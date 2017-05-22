<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 15.05.2017
 * Time: 13:15
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Channel extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('youtube', 'eventstream', 'ion_auth'));
        $this->load->model('Site_model');
        //Setup a guid
        $guid = uniqid();
        $this->youtube->setChannelId();

    }
    public function cid(){
        $data = [];
        $data['cid'] = $this->youtube->getChannelId();
        echo json_encode($data, JSON_PRETTY_PRINT);
    }
    public function subscriberCount(){
        $data = [];
        $data['subscriberCount'] = $this->youtube->getChannelStatistics()->subscriberCount;
        $otp = $this->eventstream->createEventStreamMessage($data['subscriberCount'], $data);
        $this->output
            ->cache(0.5)
            ->set_content_type('text/event-stream')
            ->set_output($otp);
        //ob_flush();
       // flush();
    }
    public function videoStatistics($videoId){
        $response = $this->youtube->getVideoStatistics($videoId);
        $data['viewCount'] = $response->viewCount;
        $data['likeCount'] = $response->likeCount;
        $data['dislikeCount'] = $response->dislikeCount;
        $data['commentCount'] = $response->commentCount;
        $otp = $this->eventstream->createEventStreamMessage($data['viewCount'], $data);
        $this->output
            ->cache(0.5)
            ->set_content_type('text/event-stream')
            ->set_output($otp);
    }

    public function newestVideo(){
        $data['videoId'] = $this->youtube->getLatestVideoId();
        $data['videoTitle'] = $this->youtube->getLatestVideoTitle();
        $otp = $this->eventstream->createEventStreamMessage($data['videoId'], $data);
        $this->output
            ->cache(60)
            ->set_content_type('text/event-stream')
            ->set_output($otp);
    }
    public function channelBackgrounds(){
        $data = $this->youtube->getChannelBackgroundImages();
        $this->output
            ->set_content_type('text/event-stream')
            ->set_output(json_encode($data, JSON_PRETTY_PRINT));
    }
    public function updateAbout(){
        $data = [];
        $data['data'] = $this->input->post('about', TRUE);
        if($this->ion_auth->logged_in() && $this->ion_auth->is_admin()){
            $data['status'] = 'success';
            $data['result'] = $this->Site_model->updateAboutMe($data['data']);
        }else{
            $data['status'] = 'failure';
        }

        echo json_encode($data);
    }
}
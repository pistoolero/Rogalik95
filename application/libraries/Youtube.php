<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 15.05.2017
 * Time: 11:30
 */

defined('BASEPATH') OR exit('No direct script access allowed');

require $_SERVER['DOCUMENT_ROOT'].'/application/vendor/autoload.php';

class Youtube{
    const OAUTH2_CLIENT_ID = "159512498973-4nhallp68ih9loq3n64c1vogg95isqop.apps.googleusercontent.com";
    const OAUTH2_CLIENT_SECRET = "xb9R_Z_eid3or8ETx0JJ_7tL";
    const API_KEY = "AIzaSyA5NQq-oSCOeBzBDq_CD3NlhQ4wUzM4MSM";
    private $client;
    private $redirect;
    private $youtube;
    private $tokenSessionKey;
    private $channelId;
    private $username = "Rogalik95";
    public function __construct()
    {
        // parent::__construct();
        //Codeigniter : Write Less Do More
        $CI =& get_instance();
        $CI->load->library(array('session'));
        $CI->load->helper(array('cookie'));
    }
    public function YoutubeGoogleClient()
    {
        $this->client = new GoogleClient();
        $this->client->setClientId(self::OAUTH2_CLIENT_ID);
        $this->client->setClientSecret(self::OAUTH2_CLIENT_SECRET);
        $this->client->setScopes('https://www.googleapis.com/auth/youtube');
        $this->redirect = filter_var('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'],
            FILTER_SANITIZE_URL);
        $this->client->setRedirectUri($this->redirect);
        $this->youtube = new Google_Service_YouTube($this->client);
        $this->tokenSessionKey = 'token-' . $this->client->prepareScopes();
        if (isset($_GET['code'])) {
            if (strval($_SESSION['state']) !== strval($_GET['state'])) {
                die('The session state did not match.');
            }

            $this->client->authenticate($_GET['code']);
            $_SESSION[$this->tokenSessionKey] = $this->client->getAccessToken();
            header('Location: ' . $this->redirect);
        }

        if (isset($_SESSION[$this->tokenSessionKey])) {
            $this->client->setAccessToken($_SESSION[$this->tokenSessionKey]);
        }
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }


    public function setChannelId()
    {
        $ch = curl_init();
        //curl_setopt($ch, CURLOPT_URL, "https://www.googleapis.com/youtube/v3/channels?part=contentDetails&forUsername=".$this->username."&key=".self::API_KEY);
        curl_setopt_array($ch, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => "https://www.googleapis.com/youtube/v3/channels?part=contentDetails&forUsername=".$this->username."&key=".self::API_KEY
        ));
        $this->channelId = json_decode(curl_exec($ch))->items[0]->id;
        curl_close($ch);
    }

    /**
     * @return mixed
     */
    public function getChannelId()
    {
        return $this->channelId;
    }
    public function getLatestVideo()
    {
        $ch = curl_init();
        curl_setopt_array($ch, array(
           CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => "https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId=".$this->getChannelId()."&maxResults=1&key=".self::API_KEY
        ));
        $result = curl_exec($ch);
        curl_close($ch);
        return json_decode($result);
    }
    public function getLatestVideoId()
    {
        return $this->getLatestVideo()->items[0]->id->videoId;
    }
    public function getLatestVideoTitle()
    {
        return $this->getLatestVideo()->items[0]->snippet->title;
    }
    public function getLatestVideoDate()
    {
        return $this->getLatestVideo()->items[0]->snippet->publishedAt;
    }
    public function getLatestVideoTimestamp()
    {
        return strtotime($this->getLatestVideoDate());
    }
    public function getChannelBackgroundImages()
    {
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => "https://www.googleapis.com/youtube/v3/channels?part=brandingSettings&forUsername=".$this->username."&key=".self::API_KEY
        ));
        $result = curl_exec($ch);
        curl_close($ch);
        return json_decode($result)->items[0]->brandingSettings->image;
    }
    public function getChannelStatistics()
    {
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => "https://www.googleapis.com/youtube/v3/channels?part=statistics&forUsername=".$this->username."&key=".self::API_KEY
        ));
        $result = curl_exec($ch);
        curl_close($ch);
        return json_decode($result)->items[0]->statistics;
    }

    public function getVideoStatistics($videoid){
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => "https://www.googleapis.com/youtube/v3/videos?part=statistics&id=".$videoid."&key=".self::API_KEY
        ));
        $result = curl_exec($ch);
        curl_close($ch);
        return json_decode($result)->items[0]->statistics;
    }

}
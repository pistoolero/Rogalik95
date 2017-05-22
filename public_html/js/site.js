var cid = 'UCcIix77y4GWUoh7pP2anZOA';
var notifitcationSound = new Audio("/public_html/sounds/job-done.mp3");
var isMobile = false; //initiate as false
// device detection
if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) isMobile = true;

if (!!window.EventSource) {
    var subCount = new EventSource('channel/subscriberCount');
   // var notify = new EventSource('notification/getNotification');
} else {
    // Result to xhr polling :(
}

subCount.onmessage = function (e) {
    var data = JSON.parse(e.data);
        $(".subCount").html(data.subscriberCount);

};

$(function(){
    $("#youtube-link").attr("href", "http://youtube.com/channel/" + cid);
    $.getJSON('https://www.googleapis.com/youtube/v3/channels?part=brandingSettings&forUsername=Rogalik95&key=AIzaSyA5NQq-oSCOeBzBDq_CD3NlhQ4wUzM4MSM', function(data){

        $("#channelBackground").css("background-image", "url(" + (isMobile ? data.items[0].brandingSettings.image.bannerMobileHdImageUrl : data.items[0].brandingSettings.image.bannerTabletExtraHdImageUrl) + ")");
        $('body').append('<style>.counter-bg{background-image: url(' + data.items[0].brandingSettings.image.bannerTabletExtraHdImageUrl + ');}</style>');
    });

    $.getJSON('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId=' + cid + '&maxResults=1&key=AIzaSyA5NQq-oSCOeBzBDq_CD3NlhQ4wUzM4MSM', function (data) {

       var title = data.items[0].snippet.title; var videoid = data.items[0].id.videoId; var thumb = data.items[0].snippet.thumbnails.high.url;

        $('body').append('<style>.video-bg{background-image: url(' + thumb + ');}</style>');
        var src = "https://www.youtube.com/embed/" + videoid;
        $("#newestVideo").attr("src", src);
        $("#videoTitle").html(title);
        var videoStats = new EventSource('/channel/videoStatistics/' + videoid);
        videoStats.onmessage = function (e) {
            var data = JSON.parse(e.data);
             $('.thumbsUp').html(data.likeCount);
             $('.thumbsDown').html(data.dislikeCount);
             $('.comments').html(data.commentCount);
             $('.views').html(data.viewCount);
        };


        $('#status').fadeOut(); // will first fade out the loading animation
        $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
        $('body').delay(350).css({'overflow':'visible'});

    })
});
$(function () {
    var save = $("#save_about");
    var cancel = $("#cancel_about");
    save.hide();
    cancel.hide();
    $("#edit_about").click(function () {
        save.show();
        cancel.show();
        tinymce.init({
            selector: '#textarea',
            branding: false,
            themes: "modern",
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste imagetools"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
            // imagetools_cors_hosts: ['www.tinymce.com', 'codepen.io'],
            min_height: 100,
            image_class_list: [
                {title: 'Fluid', value: 'img-fluid'}
            ],
            content_css: [
                '/public_html/css/style.css'
            ],
            language_url: '/public_html/js/tinymce/lang/pl.js'

        });

    });
    save.click(function () {
        tinymce.triggerSave();
        var data = {};
        data['about'] = $("#textarea").html();
        $.ajax({
            url: '/channel/updateAbout',
            type: 'POST',
            data: data,
            success: function (data) {
               data = JSON.parse(data);
               if('success' === data.status){
                   notific8('Sekcja "O mnie" została zaktualizowana', { theme: 'materialish', color: 'lilrobot', horizontalEdge: 'bottom' });
                   notifitcationSound.play();
                   setTimeout(function () {
                       tinymce.remove('#textarea');
                       $('#textarea').html(data.result);
                       save.hide();
                       cancel.hide();
                   }, 1000);
               }else if('failure' === data.status){
                   notific8('Nie udało się zakutalizować sekcji "O mnie"', { theme: 'materialish', color: 'strawberry', horizontalEdge: 'bottom' });
                   notifitcationSound.play();
               }


            }
        })
    });
    cancel.click(function () {
       tinymce.remove('#textarea');
       save.hide();
       cancel.hide();
    })
});

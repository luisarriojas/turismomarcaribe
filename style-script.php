<!--common css-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen"/>
<script type="text/javascript" src="js/functions.js"></script>

<!--superfish menu-->
<link rel="stylesheet" type="text/css" href="css/superfish.css" media="screen">
<script type="text/javascript" src="js/hoverIntent.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/supersubs.js"></script>
<script>
    $(document).ready(function () {
        $("ul.sf-menu").supersubs({
            minWidth: 12, // minimum width of sub-menus in em units
            maxWidth: 27, // maximum width of sub-menus in em units
            extraWidth: 1 // extra width can ensure lines don't sometimes turn over
            // due to slight rounding differences and font-family
        }).superfish();
        // call supersubs first, then superfish, so that subs are
        // not display:none when measuring. Call before initialising
        // containing tabs for same reason.
    });
</script>

<!--banner rotator-->
<link rel="stylesheet" type="text/css" href="css/wt-rotator.css"/>
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.min.js"></script>
<script type="text/javascript" src="js/jquery.wt-rotator.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".container1").wtRotator({
            width: 510,
            height: 220,
            thumb_width: 24,
            thumb_height: 24,
            button_width: 24,
            button_height: 24,
            button_margin: 5,
            auto_start: true,
            delay: 5000,
            play_once: false,
            transition: "random",
            transition_speed: 800,
            auto_center: true,
            easing: "easeInOutBounce",
            cpanel_position: "inside",
            cpanel_align: "BR",
            timer_align: "top",
            display_thumbs: true,
            display_dbuttons: true,
            display_playbutton: true,
            display_thumbimg: false,
            display_side_buttons: false,
            display_numbers: true,
            display_timer: true,
            mouseover_select: false,
            mouseover_pause: true,
            cpanel_mouseover: false,
            text_mouseover: false,
            text_effect: "left",
            text_sync: true,
            tooltip_type: "text",
            shuffle: false,
            block_size: 75,
            vert_size: 55,
            horz_size: 50,
            block_delay: 25,
            vstripe_delay: 75,
            hstripe_delay: 180
        });
    });
</script>


<!-- jquery Lightbox -->
<link rel="stylesheet" type="text/css" href="js/lightbox/themes/evolution/jquery.lightbox.css"/>
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="js/lightbox/themes/default/jquery.lightbox.ie6.css" />
<![endif]-->
<script type="text/javascript" src="js/lightbox/jquery.lightbox.min.js"></script>
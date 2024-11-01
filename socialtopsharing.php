<?php
ob_start();
/*
Plugin Name: Social Top Sharing
Plugin URI: http://web-agency.posizionamento-nei-motori.com/wordpress-social-top-sharing-plugin.htm
Description: Allows Top Social Network Sharing in every post and page content.
Author: Rank Lab
Version: 1.0
Author URI: http://web-agency.posizionamento-nei-motori.com
*/
	
require_once(dirname (__FILE__). '/hooks.php');
require_once(dirname (__FILE__). '/scripts.php');
require_once(dirname (__FILE__). '/menu.php');
	
if (!class_exists('SocialTopSharing')){
    class SocialTopSharing {
        private $plugin_name = 'socialtopsharing';

        function SocialTopSharing() {
        }

        public function get_plugin_name() {
            return $this->name;
        }
        
        public function socialtopsharing_initialize() {
            add_option('fb', '1');
            add_option('fb_width', '150');
            add_option('fb_height', '21');
            add_option('fb_colorscheme', 'light');
            add_option('fb_send', 'false');
            add_option('fb_showfaces', 'false');
            
            add_option('twitter', '1');
            
            add_option('socialtopsharing_google', '1');
            add_option('socialtopsharing_diggbutton', '1');
            add_option('socialtopsharing_linkedin', '1');
            add_option('socialtopsharing_myspace', '1');
            add_option('socialtopsharing_reddit', '1');
            add_option('socialtopsharing_stumpleupon', '1');
            add_option('socialtopsharing_tumblr', '1');
        }
    }
}
if (class_exists('SocialTopSharing'))
	$SocialTopSharing = new SocialTopSharing();
		else
			die("SocialTopSharing not found.");

                
function get_facebook() {
    if(get_option('fb') == '1'){
        $fb_width = get_option('fb_width');
        $fb_height = get_option('fb_height');
        $fb_colorscheme = get_option('fb_colorscheme');
        $fb_send = get_option('fb_send');
        $fb_showfaces = get_option('fb_showfaces');
        echo '<iframe src="http://www.facebook.com/plugins/like.php?app_id=162659317130181&amp;href='.get_permalink().'&amp;send='.$fb_send.'&amp;layout=button_count&amp;width='.$fb_width.'&amp;show_faces='.$fb_showfaces.'&amp;action=like&amp;colorscheme='.$fb_colorscheme.'&amp;font=arial&amp;height='.$fb_height.'" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:'.$fb_width.'px; height:'.$fb_height.'px;" allowTransparency="true"></iframe>';
    }
}

function get_twitter() {
    if(get_option('twitter') == '1'){
        echo '<a href="https://twitter.com/share" class="twitter-share-button" data-url="'.get_permalink().'" data-count="horizontal">Tweet</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>';
    }
}

function get_googleplus() {
    if(get_option('socialtopsharing_google') == '1'){
        echo '
    <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>

    <!-- Inserisci questo tag nel punto in cui vuoi che venga visualizzato il pulsante +1 -->
    <g:plusone size="medium" href="'.get_permalink().'"></g:plusone>';
    }
}

function get_diggbutton() {
    if(get_option('socialtopsharing_diggbutton') == '1'){
        echo " <script type=\"text/javascript\">
            (function() {
              var s = document.createElement('SCRIPT'), s1 = document.getElementsByTagName('SCRIPT')[0];
              s.type = 'text/javascript';
              s.async = true;
              s.src = 'http://widgets.digg.com/buttons.js';
              s1.parentNode.insertBefore(s, s1);
            })();
            </script>
            <a class=\"DiggThisButton DiggCompact\" href=\"".get_permalink()."\"></a>";
    }
}

function get_linkedin() {
    if(get_option('socialtopsharing_linkedin') == '1'){
        echo '<script src="http://platform.linkedin.com/in.js" type="text/javascript"></script>
                 <script type="IN/Share" data-url="'.get_permalink().'" data-counter="right"></script>';
    }
}

function get_myspace() {
    if(get_option('socialtopsharing_myspace') == '1'){
        echo "<a href=\"javascript:void(window.open('http://www.myspace.com/Modules/PostTo/Pages/?u='+encodeURIComponent(document.location.toString()),'ptm','height=450,width=550').focus())\">
                  <img src=\"http://cms.myspacecdn.com/cms//ShareOnMySpace/Myspace_btn_Share.png\" border=\"0\" alt=\"Share on Myspace\" /></a>";
    }
}

function get_reddit() {
    if(get_option('socialtopsharing_reddit') == '1'){
        echo "<a href=\"http://www.reddit.com/submit\" onclick=\"window.location = 'http://www.reddit.com/submit?url=".get_permalink()."' + encodeURIComponent(window.location); return false\"> <img src=\"http://www.reddit.com/static/spreddit7.gif\" alt=\"submit to reddit\" border=\"0\" /></a>";
    }
}

function get_stumbleupon() {
    if(get_option('socialtopsharing_stumpleupon') == '1'){
        echo '<script src="http://www.stumbleupon.com/hostedbadge.php?s=2"></script>';
    }
}

function get_tumblr() {
    if(get_option('socialtopsharing_tumblr') == '1'){
        echo "<script type=\"text/javascript\" src=\"http://platform.tumblr.com/v1/share.js\"></script>";
        echo "<a href=\"http://www.tumblr.com/share\" title=\"Share on Tumblr\" style=\"display:inline-block; text-indent:-9999px; overflow:hidden; width:81px; height:20px; background:url('http://platform.tumblr.com/v1/share_1.png') top left no-repeat transparent;\">Share on Tumblr</a>";
    }
}

function prova() { 
    echo get_the_content();
    echo '<div id="socialbookmark">';
    echo '<h2>Social Top Sharing</h2>';
    echo ' <p> ' . get_twitter() . '</p>';
    echo ' <p> ' . get_googleplus() . '</p>';
    echo ' <p> ' . get_facebook() . '</p>';
    echo ' <p> ' . get_diggbutton() . '</p>';
    echo ' <p> ' . get_linkedin() . '</p>';
    echo ' <p> ' . get_myspace() . '</p>';
    echo ' <p> ' . get_reddit() . '</p>';
    echo ' <p> ' . get_stumbleupon() . '</p>';
    echo ' <p> ' . get_tumblr() . '</p>';
    ?>
    <!-- Social Top Sharing | Powered by <a href="http://www.posizionamento-nei-motori.com/web-agency.htm" title="Web Agency" target="_blank">Web Agency</a> -->
    <?php
    echo '</div>';
}  


add_filter('the_content', 'prova');

$SocialTopSharing->socialtopsharing_initialize();
?>
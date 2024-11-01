<?php
function socialtopsharing_opt_main(){
    if(isset($_GET['flag']) && $_GET['flag'] == 1) {
        echo '<div id="message" class="updated below-h2"><p>Updated.</p></div>';
    }
    screen_icon('tools');
    ?>
    
    <div class="wrap">
        <h2><?php echo __('Social Top Sharing'); ?></h2>
        <br />
        <table class="widefat" width="100%" cellpadding="4" cellspacing="0" id="table-1">
    	<thead>
            <tr>
                <th class="manage-column" scope="col">#</th>
                <th width="20%" scope="col"><?php echo __('Social Network'); ?></th>
                <th width="79%" scope="col"><?php echo __('Custom options'); ?></th>
            </tr>
        </thead>
    
        <tfoot>
            <tr>
                <th class="manage-column" scope="col">#</th>
                <th width="20%" scope="col"><?php echo __('Social Network'); ?></th>
                <th width="79%" scope="col"><?php echo __('Custom options'); ?></th>
            </tr>
        </tfoot>

        <tr>
            <td class="library_id"></td>
            <td>
                <a class="row-title">Facebook</a>
                <div class="row-actions">
                    <span class="edit"><a class="edit" title="Edit" href="admin.php?page=socialtopsharing_opt&mode=edit&social=fb"><?php echo __('Edit'); ?></a></span>
                </div>
            </td>
            <td>
                <strong><?php echo __('Facebook like button'); ?></strong> <?php if(get_option('fb') == 1) echo __('Enabled'); else echo __('Disabled'); ?> |
                <strong><?php echo __('Width'); ?></strong> <?php echo get_option('fb_width'); ?>px |
                <strong><?php echo __('Height'); ?></strong> <?php echo get_option('fb_height'); ?>px |
                <strong><?php echo __('Color Scheme'); ?></strong> <?php echo get_option('fb_colorscheme'); ?> |
                <!--<strong><?php echo __('Send button'); ?></strong> <?php echo get_option('fb_send'); ?> |-->
                <strong><?php echo __('Show faces'); ?></strong> <?php echo get_option('fb_showfaces'); ?>
            </td>
        </tr>
        
        <tr>
            <td class="library_id"></td>
            <td>
                <a class="row-title">Twitter</a>
                <div class="row-actions">
                    <span class="edit"><a class="edit" title="Edit" href="admin.php?page=socialtopsharing_opt&mode=edit&social=twitter"><?php echo __('Edit'); ?></a></span>
                </div>
            </td>
            <td>
                <strong><?php echo __('Tweet button'); ?></strong> <?php if(get_option('twitter') == 1) echo __('Enabled'); else echo __('Disabled'); ?>
            </td>
        </tr>
        
        <tr>
            <td class="library_id"></td>
            <td>
                <a class="row-title">Google plus one</a>
                <div class="row-actions">
                    <span class="edit"><a class="edit" title="Edit" href="admin.php?page=socialtopsharing_opt&mode=edit&social=google"><?php echo __('Edit'); ?></a></span>
                </div>
            </td>
            <td>
                <strong><?php echo __('Google plus one'); ?></strong> <?php if(get_option('socialtopsharing_google') == 1) echo __('Enabled'); else echo __('Disabled'); ?>
            </td>
        </tr>
        
        <tr>
            <td class="library_id"></td>
            <td>
                <a class="row-title">Digg Button</a>
                <div class="row-actions">
                    <span class="edit"><a class="edit" title="Edit" href="admin.php?page=socialtopsharing_opt&mode=edit&social=digg"><?php echo __('Edit'); ?></a></span>
                </div>
            </td>
            <td>
                <strong><?php echo __('Digg button'); ?></strong> <?php if(get_option('socialtopsharing_diggbutton') == 1) echo __('Enabled'); else echo __('Disabled'); ?>
            </td>
        </tr>
        
        <tr>
            <td class="library_id"></td>
            <td>
                <a class="row-title">Linkedin Button</a>
                <div class="row-actions">
                    <span class="edit"><a class="edit" title="Edit" href="admin.php?page=socialtopsharing_opt&mode=edit&social=linkedin"><?php echo __('Edit'); ?></a></span>
                </div>
            </td>
            <td>
                <strong><?php echo __('Linkedin button'); ?></strong> <?php if(get_option('socialtopsharing_linkedin') == 1) echo __('Enabled'); else echo __('Disabled'); ?>
            </td>
        </tr>
        
        <tr>
            <td class="library_id"></td>
            <td>
                <a class="row-title">My Space</a>
                <div class="row-actions">
                    <span class="edit"><a class="edit" title="Edit" href="admin.php?page=socialtopsharing_opt&mode=edit&social=myspace"><?php echo __('Edit'); ?></a></span>
                </div>
            </td>
            <td>
                <strong><?php echo __('My Space button'); ?></strong> <?php if(get_option('socialtopsharing_myspace') == 1) echo __('Enabled'); else echo __('Disabled'); ?>
            </td>
        </tr>
        
        <tr>
            <td class="library_id"></td>
            <td>
                <a class="row-title">Reddit</a>
                <div class="row-actions">
                    <span class="edit"><a class="edit" title="Edit" href="admin.php?page=socialtopsharing_opt&mode=edit&social=reddit"><?php echo __('Edit'); ?></a></span>
                </div>
            </td>
            <td>
                <strong><?php echo __('Reddit button'); ?></strong> <?php if(get_option('socialtopsharing_reddit') == 1) echo __('Enabled'); else echo __('Disabled'); ?>
            </td>
        </tr>
        
        <tr>
            <td class="library_id"></td>
            <td>
                <a class="row-title">Stumbleupon</a>
                <div class="row-actions">
                    <span class="edit"><a class="edit" title="Edit" href="admin.php?page=socialtopsharing_opt&mode=edit&social=stumbleupon"><?php echo __('Edit'); ?></a></span>
                </div>
            </td>
            <td>
                <strong><?php echo __('Stumbleupon button'); ?></strong> <?php if(get_option('socialtopsharing_stumbleupon') == 1) echo __('Enabled'); else echo __('Disabled'); ?>
            </td>
        </tr>
        
        <tr>
            <td class="library_id"></td>
            <td>
                <a class="row-title">Tumblr</a>
                <div class="row-actions">
                    <span class="edit"><a class="edit" title="Edit" href="admin.php?page=socialtopsharing_opt&mode=edit&social=tumblr"><?php echo __('Edit'); ?></a></span>
                </div>
            </td>
            <td>
                <strong><?php echo __('Tumblr button'); ?></strong> <?php if(get_option('socialtopsharing_tumblr') == 1) echo __('Enabled'); else echo __('Disabled'); ?>
            </td>
        </tr>
     </table>
    </div>
    <?php
    socialtopsharing_credits();
}

function socialtopsharing_opt_edit(){
    screen_icon('tools');
    ?>
    <h2><?php echo __('Edit social network settings'); ?></h2>
    <div class="wrap">
        <div class="socialtopsharing_opt_edit">
        <?php
        switch($_GET['social']) {
            case 'fb': socialtopsharing_edit_fb(); break;
            case 'twitter': socialtopsharing_edit_twitter(); break;
            case 'google': socialtopsharing_edit_google(); break;
            case 'digg': socialtopsharing_edit_digg(); break;
            case 'linkedin': socialtopsharing_edit_linkedin(); break;
            case 'myspace': socialtopsharing_edit_myspace(); break;
            case 'reddit': socialtopsharing_edit_reddit(); break;
            case 'stumbleupon': socialtopsharing_edit_stumbleupon(); break;
            case 'tumblr': socialtopsharing_edit_tumblr(); break;
        }
        ?>
        </div>
    </div>
    <?php
}

function socialtopsharing_edit_fb() {
if(isset($_POST['act']) && $_POST['act'] == 'send') {
    update_option('fb', $_POST['fb']);
    update_option('fb_width', $_POST['fb_width']);
    update_option('fb_height', $_POST['fb_height']);
    update_option('fb_colorscheme', $_POST['fb_colorscheme']);
    update_option('fb_send', $_POST['fb_send']);
    update_option('fb_showfaces', $_POST['fb_showfaces']);
    
    header('Location: options-general.php?page=socialtopsharing_opt&flag=1');
}
?>
<form name="socialtopsharing_edit_fb" method="post">
    <p>
        <label><?php echo __('Facebook like button'); ?></label>
        <input type="radio" name="fb" value="1" <?php if(get_option('fb') == 1) echo 'checked'; ?> /> <?php echo __('Enabled'); ?>
        <input type="radio" name="fb" value="0" <?php if(get_option('fb') == 0) echo 'checked'; ?> /> <?php echo __('Disabled'); ?>
    </p>
    
    <p>
        <label><?php echo __('Show faces'); ?></label>
        <input type="radio" name="fb_showfaces" value="true" <?php if(get_option('fb_showfaces') == 'true') echo 'checked'; ?> /> <?php echo __('True'); ?>
        <input type="radio" name="fb_showfaces" value="false" <?php if(get_option('fb_showfaces') == 'false') echo 'checked'; ?> /> <?php echo __('False'); ?>
    </p>
    
    <p>
        <label><?php echo __('Width'); ?></label>
        <input type="text" name="fb_width" value="<?php echo get_option('fb_width'); ?>" size="3" /> px
    </p>
    
    <p>
        <label><?php echo __('Height'); ?></label>
        <input type="text" name="fb_height" value="<?php echo get_option('fb_height'); ?>" size="3" /> px
    </p>
    <!--
    <p>
        <label><?php echo __('Send button'); ?></label>
        <input type="radio" name="fb_send" value="true" <?php if(get_option('fb_send') == 'true') echo 'checked'; ?> /> <?php echo __('True'); ?>
        <input type="radio" name="fb_send" value="false" <?php if(get_option('fb_send') == 'false') echo 'checked'; ?> /> <?php echo __('False'); ?>
    </p>
    -->
    <p>
        <label><?php echo __('Colo scheme'); ?></label>
        <input type="radio" name="fb_colorscheme" value="dark" <?php if(get_option('fb_colorscheme') == 'dark') echo 'checked'; ?> /> <?php echo __('Dark'); ?>
        <input type="radio" name="fb_colorscheme" value="light" <?php if(get_option('fb_colorscheme') == 'light') echo 'checked'; ?> /> <?php echo __('Light'); ?>
    </p>
    
    <p>
        <input type="hidden" name="act" value="send" />
        <input name="save" type="submit" class="button-primary" id="publish" tabindex="5" accesskey="p" value="<?php echo __('Update'); ?>" />
    </p>
</form>
<?php
}

function socialtopsharing_edit_twitter() {
if(isset($_POST['act']) && $_POST['act'] == 'send') {
    update_option('twitter', $_POST['twitter']);
    
    header('Location: options-general.php?page=socialtopsharing_opt&flag=1');
}
?>
<form name="socialtopsharing_edit_twitter" method="post">
    <p>
        <label><?php echo __('Tweet button'); ?></label>
        <input type="radio" name="twitter" value="1" <?php if(get_option('twitter') == 1) echo 'checked'; ?> /> <?php echo __('Enabled'); ?>
        <input type="radio" name="twitter" value="0" <?php if(get_option('twitter') == 0) echo 'checked'; ?> /> <?php echo __('Disabled'); ?>
    </p>
    
    <p>
        <input type="hidden" name="act" value="send" />
        <input name="save" type="submit" class="button-primary" id="publish" tabindex="5" accesskey="p" value="<?php echo __('Update'); ?>" />
    </p>
</form>
<?php
}

function socialtopsharing_edit_google() {
if(isset($_POST['act']) && $_POST['act'] == 'send') {
    update_option('socialtopsharing_google', $_POST['socialtopsharing_google']);
    
    header('Location: options-general.php?page=socialtopsharing_opt&flag=1');
}
?>
<form name="socialtopsharing_edit_google" method="post">
    <p>
        <label><?php echo __('Google plus one button'); ?></label>
        <input type="radio" name="socialtopsharing_google" value="1" <?php if(get_option('socialtopsharing_google') == 1) echo 'checked'; ?> /> <?php echo __('Enabled'); ?>
        <input type="radio" name="socialtopsharing_google" value="0" <?php if(get_option('socialtopsharing_google') == 0) echo 'checked'; ?> /> <?php echo __('Disabled'); ?>
    </p>
    
    <p>
        <input type="hidden" name="act" value="send" />
        <input name="save" type="submit" class="button-primary" id="publish" tabindex="5" accesskey="p" value="<?php echo __('Update'); ?>" />
    </p>
</form>
<?php
}

function socialtopsharing_edit_digg() {
if(isset($_POST['act']) && $_POST['act'] == 'send') {
    update_option('socialtopsharing_diggbutton', $_POST['socialtopsharing_diggbutton']);
    
    header('Location: options-general.php?page=socialtopsharing_opt&flag=1');
}
?>
<form name="socialtopsharing_edit_digg" method="post">
    <p>
        <label><?php echo __('Digg button'); ?></label>
        <input type="radio" name="socialtopsharing_diggbutton" value="1" <?php if(get_option('socialtopsharing_diggbutton') == 1) echo 'checked'; ?> /> <?php echo __('Enabled'); ?>
        <input type="radio" name="socialtopsharing_diggbutton" value="0" <?php if(get_option('socialtopsharing_diggbutton') == 0) echo 'checked'; ?> /> <?php echo __('Disabled'); ?>
    </p>
    
    <p>
        <input type="hidden" name="act" value="send" />
        <input name="save" type="submit" class="button-primary" id="publish" tabindex="5" accesskey="p" value="<?php echo __('Update'); ?>" />
    </p>
</form>
<?php
}

function socialtopsharing_edit_linkedin() {
if(isset($_POST['act']) && $_POST['act'] == 'send') {
    update_option('socialtopsharing_linkedin', $_POST['socialtopsharing_linkedin']);
    
    header('Location: options-general.php?page=socialtopsharing_opt&flag=1');
}
?>
<form name="socialtopsharing_edit_linkedin" method="post">
    <p>
        <label><?php echo __('Linkedin button'); ?></label>
        <input type="radio" name="socialtopsharing_linkedin" value="1" <?php if(get_option('socialtopsharing_linkedin') == 1) echo 'checked'; ?> /> <?php echo __('Enabled'); ?>
        <input type="radio" name="socialtopsharing_linkedin" value="0" <?php if(get_option('socialtopsharing_linkedin') == 0) echo 'checked'; ?> /> <?php echo __('Disabled'); ?>
    </p>
    
    <p>
        <input type="hidden" name="act" value="send" />
        <input name="save" type="submit" class="button-primary" id="publish" tabindex="5" accesskey="p" value="<?php echo __('Update'); ?>" />
    </p>
</form>
<?php
}

function socialtopsharing_edit_myspace() {
if(isset($_POST['act']) && $_POST['act'] == 'send') {
    update_option('socialtopsharing_myspace', $_POST['socialtopsharing_myspace']);
    
    header('Location: options-general.php?page=socialtopsharing_opt&flag=1');
}
?>
<form name="socialtopsharing_edit_myspace" method="post">
    <p>
        <label><?php echo __('My Space button'); ?></label>
        <input type="radio" name="socialtopsharing_myspace" value="1" <?php if(get_option('socialtopsharing_myspace') == 1) echo 'checked'; ?> /> <?php echo __('Enabled'); ?>
        <input type="radio" name="socialtopsharing_myspace" value="0" <?php if(get_option('socialtopsharing_myspace') == 0) echo 'checked'; ?> /> <?php echo __('Disabled'); ?>
    </p>
    
    <p>
        <input type="hidden" name="act" value="send" />
        <input name="save" type="submit" class="button-primary" id="publish" tabindex="5" accesskey="p" value="<?php echo __('Update'); ?>" />
    </p>
</form>
<?php
}

function socialtopsharing_edit_reddit() {
if(isset($_POST['act']) && $_POST['act'] == 'send') {
    update_option('socialtopsharing_reddit', $_POST['socialtopsharing_reddit']);
    
    header('Location: options-general.php?page=socialtopsharing_opt&flag=1');
}
?>
<form name="socialtopsharing_edit_reddit" method="post">
    <p>
        <label><?php echo __('Reddit button'); ?></label>
        <input type="radio" name="socialtopsharing_reddit" value="1" <?php if(get_option('socialtopsharing_reddit') == 1) echo 'checked'; ?> /> <?php echo __('Enabled'); ?>
        <input type="radio" name="socialtopsharing_reddit" value="0" <?php if(get_option('socialtopsharing_reddit') == 0) echo 'checked'; ?> /> <?php echo __('Disabled'); ?>
    </p>
    
    <p>
        <input type="hidden" name="act" value="send" />
        <input name="save" type="submit" class="button-primary" id="publish" tabindex="5" accesskey="p" value="<?php echo __('Update'); ?>" />
    </p>
</form>
<?php
}

function socialtopsharing_edit_stumbleupon() {
if(isset($_POST['act']) && $_POST['act'] == 'send') {
    update_option('socialtopsharing_stumpleupon', $_POST['socialtopsharing_stumbleupon']);
    
    header('Location: options-general.php?page=socialtopsharing_opt&flag=1');
}
?>
<form name="socialtopsharing_edit_stumbleupon" method="post">
    <p>
        <label><?php echo __('Stumbleupon button'); ?></label>
        <input type="radio" name="socialtopsharing_stumbleupon" value="1" <?php if(get_option('socialtopsharing_stumbleupon') == 1) echo 'checked'; ?> /> <?php echo __('Enabled'); ?>
        <input type="radio" name="socialtopsharing_stumbleupon" value="0" <?php if(get_option('socialtopsharing_stumbleupon') == 0) echo 'checked'; ?> /> <?php echo __('Disabled'); ?>
    </p>
    
    <p>
        <input type="hidden" name="act" value="send" />
        <input name="save" type="submit" class="button-primary" id="publish" tabindex="5" accesskey="p" value="<?php echo __('Update'); ?>" />
    </p>
</form>
<?php
}

function socialtopsharing_edit_tumblr() {
if(isset($_POST['act']) && $_POST['act'] == 'send') {
    update_option('socialtopsharing_tumblr', $_POST['socialtopsharing_tumblr']);
    
    header('Location: options-general.php?page=socialtopsharing_opt&flag=1');
}
?>
<form name="socialtopsharing_edit_tumblr" method="post">
    <p>
        <label><?php echo __('Tumblr button'); ?></label>
        <input type="radio" name="socialtopsharing_tumblr" value="1" <?php if(get_option('socialtopsharing_tumblr') == 1) echo 'checked'; ?> /> <?php echo __('Enabled'); ?>
        <input type="radio" name="socialtopsharing_tumblr" value="0" <?php if(get_option('socialtopsharing_tumblr') == 0) echo 'checked'; ?> /> <?php echo __('Disabled'); ?>
    </p>
    
    <p>
        <input type="hidden" name="act" value="send" />
        <input name="save" type="submit" class="button-primary" id="publish" tabindex="5" accesskey="p" value="<?php echo __('Update'); ?>" />
    </p>
</form>
<?php
}

function socialtopsharing_credits() {
?>
    <br /><br />
    <strong>Powered by</strong> <span class="edit"><br />
    <img src="<?php echo WP_PLUGIN_URL; ?>/SocialTopSharing/html/img/ranklab-studio-logo.jpg" style="width:120px; height:auto" /><br />
    <a class="edit" title="Posizionamento" href="http://www.posizionamento-nei-motori.com">Posizionamento nei motori</a></span>
<?php
}
?>
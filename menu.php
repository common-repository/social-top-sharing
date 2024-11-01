<?php
function socialtopsharing_add_menu() {
    add_options_page('SocialTopSharing', 'Social Top Sharing', 'administrator', 'socialtopsharing_opt', 'socialtopsharing_opt');
}
	
function socialtopsharing_opt() {
    require_once (dirname (__FILE__) . '/html/socialtopsharing_opt.php');
    
    switch($_GET["mode"]) {
        case 'edit': socialtopsharing_opt_edit(); break;
        default: socialtopsharing_opt_main();
    }
}
/*
function distinct_elenco_newsletter(){
    require_once (dirname (__FILE__) . '/html/gestione_newsletter.php');
	distinct_archivio();
}

function distinct_settings(){
    require_once (dirname (__FILE__) . '/html/gestione_newsletter.php');
	distinct_impostazioni();
}*/
?>
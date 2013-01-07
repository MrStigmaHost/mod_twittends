<?php
/**
* QR Page Joomla! 2.5 Native Component
* @version 1.0
* @author Xtnd.it L.T.D.
* @link http://www.stigmahost.com/
* @license GNU/GPL
*/

defined('_JEXEC') or die('Restricted access');

$currenturl =   JURI::current();
$doc        =   JFactory::getDocument();
$app        =   JFactory::getApplication();
$url        =   JURI::base();

$username           =   ($params->get('tw_username') == '' ? 'stigmahost' : $params->get('tw_username'));
$width              =   (int)$params->get('tw_width');
$max_users          =   (int)$params->get('tw_max_users');
$display            =   (int)$params->get('tw_display');
$display_usernames  =   (int)$params->get('tw_show_username');
$display_tweets     =   (int)$params->get('tw_show_tweets');
$style              =   ($params->get('tw_style') == '' ? 'light' : $params->get('tw_style'));


$doc->addStyleSheet($url . '/modules/mod_twittends/css/' . $style . '.css');
$doc->addScript($url . '/modules/mod_twittends/js/jquery-1.8.2.min.js');
$doc->addScript($url . '/modules/mod_twittends/js/jquery.twitter-friends-1.0.min.js');

?>
<div class="twitter-friends" data-options="{ username:'<?php echo $username; ?>', friends: <?php echo $display; ?>, users_max: <?php echo $max_users; ?>, tweet : <?php echo $display_tweets; ?>, width: <?php echo $width; ?>, user_name: <?php echo $display_usernames; ?> }">
    <a class="tfw-info" href="http://www.moretechtips.net" target="_blank"></a>
    <span style="font-size: 70%;margin:0px;padding:0px;">
        <a href="http://www.stigmahost.com/tag/adobe/" title="Web hosting" style="text-decoration: none; color: #000 !important; font-size: 10px;margin:0px;padding:0px;" target="_blank">Stigmahost.com</a>
    </span>
</div>
<?php

echo "<br />";

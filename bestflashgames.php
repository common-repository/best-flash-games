<?php
/*
Plugin Name:bestflashgames
Version: 1.0
Plugin URI: http://www.game44.net
Description:  Best Flash Games provides over 350 free online games for your Site..
Author: Nuh Keles
Author URI: http://www.game44.net
*/



function bestflashgames_plugin_callback($content = '') {



         $view = $_REQUEST['view'];

         if (strpos($content,'#bestflashgames'))
         {
                   $bestflashgames_content=readfile("http://www.game44.net/webmaster/game.php");
                   //$bestflashgames_content="fdsafdsafggfdsafdsa";
                   $content = str_replace('#bestflashgames',$bestflashgames_content,$content);
         }
         return $content;

}


// Register hooks
add_filter('the_content', 'bestflashgames_plugin_callback');
<?php 
/** 
 * Messaggi Hello 
 * 
 * @package Messaggihello 
 * @author Sprite Coder
 * @copyright 2022 Sprite Coder
 * @license GPL-2.0-or-later 
 * 
 * @wordpress-plugin 
 * Plugin Name: Messaggi Hello
 * Plugin URI: https://spritecoder.com/messaggi-hello
 * Description: Prints "Hello World" in WordPress admin. 
 * Version: 0.0.1 
 * Author: Sprite Coder
 * Author URI: https://spritecoder.com 
 * Text Domain: messaggi-hello 
 * License: GPL v2 or later 
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt */

 function print_hello_world_title()  {
    echo "<h1 style='color: white'>Hello World</h1>"; 
  }

  function hello_world_admin_menu(){
      echo '<h2>messaggio</h2>';
  }

  
  add_action( 'admin_menu', 'hello_world_admin_menu' );

  function showMessage($message){
        $message = 'welcome';
        echo '<h2 style="color:red">'.$message.'</h2>';

  }

  add_action('admin_menu', 'showMessage');

  // function change_text_callback(){
  //   //eseguo un echo di prova
  //   echo '<p>hop aggiornato il post inserendo un contenuto!</p>';
  // }

  // add_action('publish_post', 'change_text_callback');

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

$menu = filter_input(INPUT_GET, "menu", FILTER_SANITIZE_STRING);
?>
<?php require_once './header.php'; 
 require_once './navbar.php';
 
  ?>
  <div id="kereses"></div>
        <div class="container">
            <?php
            switch ($menu) {
                case 'autok':
                    require_once './autok.php';
                    break;
                 case 'befizetes':
                    include_once './befizetes.php';
                    break;
                case 'iskola':
                    include_once './iskola.php';
                    break;
                
            
                default:
                    include_once './autok.php';
                    break;
            }
            ?>

  <?php require_once './footer.php'; ?>
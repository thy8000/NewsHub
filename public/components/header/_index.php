<?php

if (!defined('ABSPATH')) {
   exit;
}

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
   <?php

   wp_head();

   ?>
</head>

<body <?php body_class(); ?>>
   <?php

   wp_body_open();

   ?>

   <header id="header">
      Header
   </header>

   <main>

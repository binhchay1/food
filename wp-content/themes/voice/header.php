<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5, minimum-scale=1">
  <meta name="description" content="© 2018 - Vnifood">

  <!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>
<![endif]-->
  <script
    src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
    integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8="
    crossorigin="anonymous"></script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <div id="vce-main">

    <header id="header" class="main-header">
      <?php if (vce_get_option('top_bar')) : ?>
        <?php get_template_part('sections/headers/top'); ?>
      <?php endif; ?>
      <?php get_template_part('sections/headers/header-' . vce_get_option('header_layout')); ?>
    </header>

    <?php if (vce_get_option('sticky_header')): ?>
      <?php get_template_part('sections/headers/sticky'); ?>
    <?php endif; ?>

    <div id="main-wrapper">
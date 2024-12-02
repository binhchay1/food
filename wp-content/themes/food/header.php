<?php var_dump(1); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <?php if (ot_get_option('favicon') != '') { ?>
        <link rel="shortcut icon" type="ico" href="<?php echo ot_get_option('favicon') ?>">
    <?php } ?>
    <link rel="shortcut icon" type="ico" href="https://apkafe.com/wp-content/uploads/2019/04/fav_apkafe-2.png">

    <?php if (ot_get_option('custom_script_header') != '') {
        echo ot_get_option('custom_script_header');
    } ?>

    <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
    <div style="display: contents">
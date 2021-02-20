<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo $this->Options['site_description'];?>" />
        <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
        <meta name="author" content="<?php echo theme_config('author');?>" />
        <meta name="email" content="<?php echo theme_config('email');?>" />
        <meta name="website" content="<?php echo site_url();?>" />
        <meta name="Version" content="<?php echo theme_config('version');?>" />
        
        <!-- Site Title -->
        <title><?php echo $this->Options['site_name']; ?></title>

        <!-- favicon -->
        <link rel="shortcut icon" type="image/ico" href="<?php echo base_url('uploads/system/'.(!empty($Options['favicon']) ? $Options['favicon'] : 'favicon.png'));?>">

        <!--====== Plugins CSS Files =======-->
        <!--====== Custom CSS Files ======-->
    </head>

<body>
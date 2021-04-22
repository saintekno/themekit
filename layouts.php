<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$App_Options = options();
$favicon = ($favicon = riake('favicon', $App_Options)) ? upload_url('media/thumb/'.$favicon) : upload_url('system/favicon.png', base_url());
?>

<!DOCTYPE html>
<HTML class="no-js" lang="en">
<HEAD>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="on" http-equiv="cleartype"/>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <?php include('partials/meta.php');?>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $favicon; ?>">
    <link rel="canonical" href="<?php echo site_url();?>">
        
    <!-- Site Title -->
    <title><?php echo riake('site_name', $App_Options); ?> - <?php echo riake('site_title', $App_Options); ?></title>
</HEAD>
<BODY class="body">
    <?php include('partials/header.php');?>
    
    <?php include('pages/'.$pages.'.php');?>

    <?php include('partials/footer.php');?>

    <!-- javascript -->
</BODY>
</HTML>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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
</HEAD>
<BODY class="body">
    <?php include('partials/header.php');?>
    
    <?php include('pages/'.$pages.'.php');?>

    <?php include('partials/footer.php');?>

    <!-- javascript -->
</BODY>
</HTML>
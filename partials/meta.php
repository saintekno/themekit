<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- favicon -->
<link rel="shortcut icon" type="image/x-icon" href="<?php echo $favicon; ?>">
<link rel="canonical" href="<?php echo site_url();?>">
    
<!-- Site Title -->
<title><?php echo riake('site_name', $App_Options); ?> - <?php echo riake('site_title', $App_Options); ?></title>
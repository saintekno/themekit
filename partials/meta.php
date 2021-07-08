<?php
defined('BASEPATH') or exit('No direct script access allowed');
$App_Options = options(APPNAME);
$favicon = ($favicon = riake('favicon', $App_Options)) ? upload_url('media/thumb/'.$favicon) : upload_url('system/favicon.png', base_url());
?>

<!-- favicon -->
<link rel="shortcut icon" type="image/x-icon" href="<?php echo $favicon; ?>">
<link rel="canonical" href="<?php echo site_url();?>">
    
<!-- Site Title -->
<title><?php echo ($title = Polatan::get_title()) ? $title .'-' : ''; ?> <?php echo riake('site_name', $App_Options); ?></title>
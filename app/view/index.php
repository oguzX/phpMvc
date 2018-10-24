<?php
/**
 * User: OguzOzer
 * Date: 10/24/2018
 * Time: 1:04 AM
 */
require VDIR."/header.php";
?>
<h1><?php echo @$title ?></h1>
<p><?php echo @$text ?></p>
<?php
    echo ASSETS_DIR;
?>
<p><a href="<?php echo controller::url('default', 'test')?>">Test sayfası için tıklayın</a></p>
<?php
require VDIR."/footer.php";
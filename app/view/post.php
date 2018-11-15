<?php
/**
 * User: OguzOzer
 * Date: 10/24/2018
 * Time: 1:04 AM
 */
require VDIR."/header.php";
?>
<div class="container-fluid">
    <div class="h1">Post Sayfamdan sa</div>
    <div class="col-lg-5">
        <?php
        foreach ($allPost as $postRow){
            ?>
            <div class="container">
                <div class=" m-1 border border-primary ">
                    <div class="col-lg-12"><h2><?php echo $postRow["post_title"]; ?></h2></div>
                    <div class="col-lg-12"><?php echo $postRow["post_text"]; ?></div>
                    <div class="col-lg-12"><small class="text-right"><?php echo $postRow["post_date"]; ?></small></div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>
<?php
require VDIR."/footer.php";

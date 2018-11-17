<?php
/**
 * User: OguzOzer
 * Date: 10/24/2018
 * Time: 1:04 AM
 */
require LDIR."/header.php";
?>
    <div class="col-lg-12">
        <?php
        foreach ($allPost as $postRow) {
            ?>
            <div class="container mt-3">
                <div class=" m-1 border border-primary ">
                    <div class="row">
                        <div class="col-lg-11 pl-4"><h2><?php echo $postRow["post_title"]; ?></h2></div>
                        <div class="col-lg-1 pr-5 mt-2 text-right text-secondary postOption">
                            <i class="fas fa-ellipsis-v"></i>
                        </div>
                    </div>
                    <div class="col-lg-12"><?php echo $postRow["post_text"]; ?></div>
                    <div class="col-lg-12">
                        <p class="text-muted text-lg-right"><small><?php echo $postRow["post_date"]; ?></small></p>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
<?php
require LDIR."/footer.php";

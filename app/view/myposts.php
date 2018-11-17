<?php
/**
 * User: OguzOzer
 * Date: 10/24/2018
 * Time: 1:04 AM
 */
require LDIR."/header.php";
?>
    <ul class="list-group list-group-flush">
<?php
foreach ($allPost as $post) {
    ?>
    <li class="list-group-item">
        <div class="row">
            <div class="col-lg-4 text-center"><?php echo $post['post_title']?></div>
            <div class="col-lg-7 text-truncate"><?php echo $post['post_text']?></div>
            <div class="col-lg-1"><a href="<?php echo URL.'/post/edit/'.$post['post_id'];?>" class="text-secondary"><i class="fas fa-edit"></i></a></div>
        </div>
    </li>
    <?php
}
?>
</ul>
<?php
require LDIR."/footer.php";
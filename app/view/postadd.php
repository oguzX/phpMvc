<?php
/**
 * User: OguzOzer
 * Date: 10/24/2018
 * Time: 1:04 AM
 */
require LDIR."/header.php";
$postData= $postData[0];
?>
    <form action="<?php echo URL;?>/post/addnow" method="post" id="postaddForm">
        <?php if(isset($postData)) {
            ?>
            <input type="hidden" id="postid" value="<?php echo $postData['post_id'];?>">
            <?php
        }
    ?>
        <input type="text" class="form-control" placeholder="Title" name="title" <?php if(isset($postData))echo "value='".$postData['post_title']."'";?>">
        <textarea name="text" id="" cols="30" rows="10" class="form-control mt-3" placeholder="Text"><?php if(isset($postData))echo $postData['post_text'];?></textarea>
        <div class="row mx-auto mt-3">
            <a href="<?php echo URL;?>/post/post"class="text-white btn btn-info col-lg-6">Cancel</a>
            <input type="button" class="btn btn-primary col-lg-6" id="<?php if(isset($postData))echo 'posteditButton';else echo 'postaddButton';?>" value="<?php if(isset($postData))echo 'Edit';else echo 'Add';?>">
        </div>
    </form>
<?php
require LDIR."/footer.php";
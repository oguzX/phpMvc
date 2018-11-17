<?php
/**
 * User: OguzOzer
 * Date: 10/24/2018
 * Time: 1:04 AM
 */
require LDIR."/header.php";
?>
    <div class="row">
        <div class="col-3">UserName</div>
        <div class="col-3"><?php echo $userName;?></div>
    </div>
    <div class="row">
        <div class="col-3">UserType</div>
        <div class="col-3"><?php echo $userType;?></div>
    </div>
<div class="row mt-5">
    <h4 class="mb-4 pl-3">Post Actions</h4>
    <div class="container">
        <a href="<?php echo URL;?>/post/add" class="btn btn-primary">Add Post</a>
        <a href="<?php echo URL;?>/post/myPosts" class="btn btn-info">Edit Post</a>
        <a href="<?php echo URL;?>/post/remove" class="btn btn-warning">Delete Post</a>
    </div>
</div>
<?php
require LDIR."/footer.php";
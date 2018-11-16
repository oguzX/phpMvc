<?php
/**
 * User: OguzOzer
 * Date: 10/24/2018
 * Time: 1:04 AM
 */
require LDIR."/header.php";
?>
<div class="container-fluid">
    <div class="col-md-4 offset-md-4 mt-3 border border-default pb-2 shadow">
        <form action="<?php echo URL;?>/user/checklogin" method="post">
            <img src="<?php echo IMGDIR ?>/user.png" class="rounded mx-auto d-block col-6 mt-3" alt="">
            <input type="text" name="username" placeholder="User Name" class="form-control mt-2">
            <input type="password" name="password" placeholder="Password" class="form-control mt-2">
            <input type="submit" id="loginBtn" value="login" class="form-control mt-4 btn btn-success">
        </form>
    </div>
</div>
<?php
require LDIR."/footer.php";
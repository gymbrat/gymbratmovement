<?php
ob_start();
// include header.php file
include ('header.php');
?>

    <section class="blog-box">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-lg-9 p-4 my-5">
                    <?php foreach($blog as $blogpost){?>
                        <div class="col blog-sections">
                            <a href="<?php printf('%s?blog_id=%s', 'bloglink.php',  $blogpost['blogId']); ?>"><img src="assets/<?=  $blogpost['blogImage'] ?>" class="img-fluid rounded" width="100%"></a>
                            <div class="blog-title py-4 px-3 ml-0 ml-sm-3 rounded">
                                <h2><a href="<?php printf('%s?blog_id=%s', 'bloglink.php',  $blogpost['blogId']); ?>"><?=  $blogpost['blogTitle'] ?></a></h2>
                                <p class="date"><?=  date('m-d-Y', strtotime($blogpost['createdAt'])); ?> <i class="fa fa-calendar" aria-hidden="true" style="color:#8a8a8a;"></i></p>
                                <p><?=  substr($blogpost['summary'], 0, 150); ?>...</p>
                                <a href="<?php printf('%s?blog_id=%s', 'bloglink.php',  $blogpost['blogId']); ?>" class="readmore"><strong>READ MORE...</strong></a>
                            </div>
                        </div>
                        <hr>
                    <?php }?>
                </div>
                <div class="col-md-4 col-lg-3 side-blog p-4">
                    <h4 style="padding-top:10px;color:#8a8a8a;"><strong>Index</strong></h4>
                    <hr>
                     <ul>
                        <?php foreach($blog as $blogpost){?>
                            <li><strong><a href="<?php printf('%s?blog_id=%s', 'bloglink.php',  $blogpost['blogId']); ?>"><?=  $blogpost['blogTitle'] ?></a></strong></li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<style>
body{
    background: #e1e6ed;
}
</style>

 <?php
// include footer.php
include('footer.php')
 ?>

<?php 
ob_start();
// include header.php file
include("header.php");
?>

<div class="parallax"></div>

<div class="container workout-plans codes pt-5 my-5" style="min-height:60vh;">
    <h3>Workout Guides</h3>
    <div class="row my-5" style="width: auto;">
        <!-- Table -->
        <?php foreach($workoutguides as $guides){?>
            <div class="container my-3 col col-sm-12 col-lg-4">
                <div class="plan-wrap card px-5">
                    <div class="row text-center" style="width: auto;">
                        <div class="col-12">
                            <h3><strong><?=  $guides['title'] ?></strong></h3>
                            <hr>
                        </div>
                        <div class="col-12">
                            <p><?=  $guides['description'] ?></p>
                            <p><b>$<?=  $guides['price'] ?></b></p>
                        </div>
                        <div class="col">
                        <?php
                            if(isset($_SESSION['userName'])){?>
                                <button style="width:100%;" class="snipcart-add-item btn btn-gradient font-size-16"
                                data-item-id="<?=  $guides['id'] ?>"
                                data-item-price="<?=  $guides['price'] ?>"
                                data-item-url="http://localhost/tutorial/Mobile_shopee/workout-guides.php"
                                data-item-description="<?=  $guides['description'] ?>"
                                data-item-name="<?=  $guides['title'] ?>"
                                data-item-shippable="false"
                                data-item-file-guide="ec8d3719-6461-42e4-bea5-f21f1682b1d5">
                                Add to cart
                                </button>
                            <?php }else{
                                echo '<a  class="btn btn-gradient" data-toggle="modal" data-target="#guide-modal">Add to cart</a>';
                            }?>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
        <?php // if(isset($_SESSION['userName'])){ ?>
            <!--<hr>
            <section class="mt-5">
                <h3>Purchased Workout Guides</h3>
                <small>Click to download PDF(s)</small>
                <div class="row mt-5" style="width: auto;">
                <?php// foreach($workoutguides as $guides){?>
                        <div class="container my-3 col-12">
                            <h4><strong><?=  $guides['title'] ?></strong></h4>
                            <a href=""><img src="./assets/logo.svg"></a>
                            <hr>
                        </div>
                    <?php //}?>
                </div>-->
            </section>
        <?php // }?>
</div>


<!-- Modal -->
<div class="modal fade" id="guide-modal" tabindex="-1" role="dialog" aria-labelledby="guide-modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="guide-modalLabel">The Gymbrat Movement</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Please sign in or register <a href="login.php">here</a> to purchase our workout guides!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<?php 
include('footer.php')
 ?>

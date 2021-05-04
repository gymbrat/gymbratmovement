<!--Top Sale-->
<?php 

    shuffle($product_shuffle);

    //request method post
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //call method addToCart
        if(isset($_POST['top_sale_submit'])){
            $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
        }
    }

?>
<section id="top-sale">
    <div class="container py-5">
        <h4 class="font-poppins font-size-20">Top Sale</h4>
        <hr>
        <!--Owl Carousel-->
        <div class="owl-carousel owl-theme">
            <?php foreach($product_shuffle as $item){?>
            <div class="item py-2">
                <div class="product">
                    <a href="<?php printf('%s?item_id=%s','product.php',$item['item_id']) ?>"><img src="./assets<?= $item['item_image'] ?? "./assets/products/1.png";?>" alt="product1" class="img-fluid" width="100%"></a>
                    <div class="text-center">
                        <h6><?= $item['item_name'] ?? "Unknown"; ?></h6>
                        <!-- <div class="rating font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                        </div> -->
                        <div class="price py-2">
                            <span><b>$<?= $item['item_price']??"0";?></b></span>
                        </div>
                        <form method="POST">
                            <input type="hidden" name="item_id" value="<?= $item['item_id'] ?? '1';?>">
                            <input type="hidden" name="user_id" value="<?= 2;?>">
                            <?php 
                                if(in_array($item['item_id'], $Cart->getCartId($product->getData('cart'))?? [])){
                                    echo ' <button type="submit" disabled class="btn btn-gradient-success font-size-12">In the Cart</button>';
                                }else{
                                    echo ' <button type="submit" name="top_sale_submit" class="btn btn-gradient font-size-12">Add to Cart</button>';
                                }
                            ?>
                           
                        </form>
                    </div>
                </div>
            </div>
            <?php } //closing foreach function ?>
        </div>
        <!--!Owl Carousel-->
    </div>
</section>
<!--!Top Sale-->
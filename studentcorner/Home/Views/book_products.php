<?= view('Modules\Home\Views\common\header') ?>
<div class="container">
    <div class="row">
        <div class="">
            <button type="button"  class="btn btn-sm mt-2 mb-2" style="color:white;float: right;background: linear-gradient(90deg, rgba(0,174,255,1) 0%, rgba(14,123,160,1) 0%, rgba(32,100,127,1) 100%);">
                <i class="fa-solid fa-indian-rupee-sign" style="color: white;"></i> Sell Your Book
            </button>
        </div>

        <div class="col-xl-3 col-md-6 col-12 col-xxl-3">
            <div class="card col-12">
                <a href="<?php echo base_url()?>view_product" style="color:black; text-decoration: none">
                <img class="img-thumbnail"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRw_6RSazcJp2yzJmsYmxJUbbqOPOswXZWmJsQEtXjqKqCoimGTWKbOtvZCsamzIPavKN4&usqp=CAU"
                    style="height: 200px;" class="card-img-top" alt="...">
                <div class="card-body col-12">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <button type="button" class="btn btn-sm" style="color: white;background: linear-gradient(90deg, rgba(0,174,255,1) 0%, rgba(14,123,160,1) 0%, rgba(32,100,127,1) 100%);"><i class="fa-regular fa-heart"
                            style="color: white;"></i> Wishlist</button>

                    <button type="button" class="btn btn-sm" style="color: white;background: linear-gradient(90deg, rgba(0,174,255,1) 0%, rgba(14,123,160,1) 0%, rgba(32,100,127,1) 100%);"><i class="fa-solid fa-bag-shopping"
                            style="color: white;"></i> Buy Now</button>
                </div>
                </a>
            </div>
        </div>
    </div>
</div>
<?= view('Modules\Home\Views\common\footer') ?>
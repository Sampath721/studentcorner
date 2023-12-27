<!-- product_detail.php -->

<?= view('Modules\Home\Views\common\header') ?>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-6 d-flex align-items-center justify-content-center">
            <div class="image-container">
                <img src="https://parade.com/.image/c_limit%2Ccs_srgb%2Cq_auto:good%2Cw_700/MTkwNTgxMDM0NTM1MzY0NDc2/quotes-about-reading-books-5-1-jpg.webp"
                     alt="Product Image" class="product-image img-thumbnail">
            </div>
        </div>
        <div class="col-md-6">
            <div class="product-info">
                <h1>Product Name</h1>
                <p class="product-description">Product description goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <div class="rating-container">
                    <span class="star" data-rating="1">&#9733;</span>
                    <span class="star" data-rating="2">&#9733;</span>
                    <span class="star" data-rating="3">&#9733;</span>
                    <span class="star" data-rating="4">&#9733;</span>
                    <span class="star" data-rating="5">&#9733;</span>
                </div>
                <p class="product-price">$29.99</p>
                <div id="price-negotiable" class="btn border-0">Chat With Owner for Discount</div>
                <button class="add-to-cart-button btn">Add to Cart</button>
            </div>
        </div>
    </div>
</div>




<?= view('Modules\Home\Views\common\footer') ?>

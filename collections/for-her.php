<?php include_once('../includes/header.php'); ?>

<?php require_once('../products/db/forher_cat.php'); ?>


<?php
    $products = json_decode(getAllForher(), true);
?>

<div id="site-wrapper">
    <div id="site-canvas" class="snappy">
        <?php include_once('../includes/nav.php'); ?>

        <div class="container">
            <div class="row">
                <div id="main" role="main" class="col-sm-12">
                    <?php if (count($products) > 0) : ?>
                    <ul id="product-list" class="four ">
                        <?php foreach ($products as $product) : ?>
                        <li class="">
                            <div class="product-grid-item  on-sale one">

                                <div class="product">
                                    <a href="/products/single.php?product=<?php echo $product['id'] ?>"
                                        class="product-image">
                                        <span class="product-image-cell">
                                            <img class="img-responsive"
                                                data-orig="<?php echo $product['featured_image'] ?>"
                                                data-second="<?php echo $product['featured_image'] ?>"
                                                src="<?php echo $product['featured_image'] ?>"
                                                alt="<?php echo $product['title'] ?>">
                                        </span>
                                    </a>

                                    <h2 class="product-name">
                                        <a href="/products/single.php?product=<?php echo $product['id'] ?>"
                                            title="<?php echo $product['title'] ?>"><?php echo $product['title'] ?></a>
                                    </h2>

                                    <p class="product-description">
                                        Gender: MenItem Type: Hoodies, SweatshirtsType: RegularSleeve Style:
                                        RegularHooded: YesCollar: HoodedThickness: FleeceClosure Type: NoneMaterial:
                                        Polyester, CottonSleeve Length(cm): FullClothing Length: RegularDetachable Part:
                                        NonePattern Type: SolidStyle: Casual
                                    </p>

                                    <span class="price money">"<?php echo $product['sale_price'] ?></span>
                                    <span class="compare-at-price price money">"<?php echo $product['price'] ?></span>
                                    <span class="onsale">On Sale</span>


                                    <ul class="action-links">
                                        <li>
                                            <a href="#" title="Quick View" class="quick-view-open" data-toggle="modal"
                                                data-product-id="1807337586749"
                                                data-target="#productQuickView-1807337586749"><i
                                                    class="fa fa-eye"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" title="Add to Cart" data-variant-size="100"
                                                class="quick-add-to-cart">
                                                <i class="fa fa-shopping-cart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <?php endforeach; ?>
                        <div class="clearfix"></div>
                    </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <?php include_once('../includes/footer.php'); ?>

    </div> <!-- site-canvas -->
</div>
  <main id="main">
<?php
        use APP\Models\Image;

?>
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>News Page</li>
        </ol>
        <h2>News Page</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section id="pricing" class="pricing">
      <div class="container">
      <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline ">
                <h2>News</h2>
              </div>
            </div>
          </div>
          <div class="row">
          <?php foreach ($products as $product) {?>
            <?php $image = Image::where(['product_id', '=',  $product->id,  '1']); ?>

                        <!-- Start Left Blog -->
                        <div class="col-md-3 col-sm-3 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="Product-info?id=<?php echo $product->id; ?>">
                    <?php if (isset($image[0]->name)) {?>
                    <img src="<?php public_path(); ?>site/assets/img/portfolio/<?php echo $image[0]->name; ?>" alt="found">
                    <?php } else { ?>
                      <img src="<?php public_path(); ?>site/assets/img/portfolio/" alt="Photo Not Found">
                      <?php }?>

                  </a>
                </div>
                <!-- <div class="blog-meta">
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#">13 comments</a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                  </span>
                </div> -->
                <div class="blog-text">
                  <h4>
                    <a href="Product-info?id=<?php echo $product->id; ?>"><?php echo $product->name; ?></a>
                  </h4>
<h6>
<?php echo $product->title; ?>
</h6>
                </div>
                <span>
                  <a href="Product-info?id=<?php echo $product->id; ?>" class="ready-btn">Read more</a>
                </span>
              </div>
              <!-- Start single blog -->
                        </div>
            <!-- End Left Blog-->
            <?php }?>
          </div>
      </div>
    </section><!-- End Pricing Section -->


  </main><!-- End #main -->

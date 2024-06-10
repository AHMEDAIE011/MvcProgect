  
                      <?php
          use APP\Models\Image;
                      use APP\Models\Product;

                      ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <h1>Welcome to Day</h1>
      <h2>We are team of talented designers making websites with Bootstrap</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Blog Section ======= -->
    <div id="blog" class="blog-area">
      <div class="blog-inner area-padding">
        <div class="blog-overly"></div>
        <div class="container ">
        <div class="section-title">
          <span>Latest News</span>
          <h2>Latest News</h2>
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>

        <?php

        foreach ($services as $service) {?>
          <br><br><br>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline ">
                <h2><?php echo $service->name; ?> </h2>
              </div>
            </div>
          </div>
          <div class="row">
            <?php $products = Product::where(['service_id', '=',  $service->id,  '4']); ?>
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


          </div><br>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

              <div id="viewAll" class="section-headline single-blog">
              <span>
                  <a href="Product-page?service_id=<?php echo $service->id; ?>" class=" ready-btn">View All</a>
                </span>
              </div>
            </div>
          </div>
        <?php }?>
        </div>
      </div>
    </div><!-- End Blog Section -->

  </main><!-- End #main -->


<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="index.html">Home</a></li>
      <li>Portfolio Details</li>
    </ol>
    <h2>Portfolio Details</h2>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-8">
        <div class="portfolio-details-slider swiper">
          <div class="swiper-wrapper align-items-center">

          <?php foreach ($images as $image) {?>

            <div class="swiper-slide">
              <img src="<?php public_path(); ?>site/assets/img/portfolio/<?php echo $image->name; ?>" alt="">
            </div>
<?php }?>

          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="portfolio-info">
          <h3>Project information</h3>
          <ul>
            <li><strong>Product Name</strong>: <?php echo $product[0]->name; ?></li>
            <li><strong>title</strong>: <?php echo $product[0]->title; ?></li>
            <li><strong>Project date</strong>: 01 March, 2020</li>
            <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
          </ul>
        </div>
        <div class="portfolio-description">
          <h2>This is an example of Product detail</h2>
          <p>
          <?php echo $product[0]->details; ?>          </p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->

</main><!-- End #main -->

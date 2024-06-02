  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Product Page</li>
        </ol>
        <h2>Product Page</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <span>all product</span>
          <h2>all product</h2>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
        </div>

        <div class="row">

        <?php foreach ($products as $product) {?>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="zoom-in">
            <div class="box featured">
              <h3><?php echo $product->name; ?></h3>
              
                <li><?php echo $product->title; ?></li><br>
                <li><?php echo $product->details; ?></li>
              </ul>
              <div class="btn-wrap">
                <a href="Product-info?id=<?php echo $product->id; ?>" class="btn-buy">View information</a>
              </div>
            </div>
          </div>
          <?php }?>


        </div>

      </div>
    </section><!-- End Pricing Section -->


  </main><!-- End #main -->

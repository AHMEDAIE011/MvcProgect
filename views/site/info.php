<?php
use APP\Models\Image;
use APP\Models\Product;

?>
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
          <h3>Page information</h3>
          <ul>
            <li><strong>Name of The news</strong>: <?php echo $product[0]->name; ?></li>
            <li><strong>Title of The news</strong>: <?php echo $product[0]->title; ?></li>
          </ul>
        </div>

      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->
    <!-- ======= Blog Page ======= -->
    <div class="blog-page ">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <div class="page-head-blog">
              <div class="single-blog-page">
                <!-- search option start -->
                <form action="#">
                  <div class="search-option">
                    <input type="text" placeholder="Search...">
                    <button class="button" type="submit">
                      <i class="bi bi-search"></i>
                    </button>
                  </div>
                </form>
                <!-- search option end -->
              </div>
              <div class="single-blog-page">
                <!-- recent start -->
                <div class="left-blog">
                  <h4>recent post</h4>
                  <div class="recent-post">
                    <!-- start single post -->
          <?php foreach ($services as $service) {?>
           <?php $products = Product::where(['service_id', '=',  $service->id,  '3  ']); ?>
          <?php foreach ($products as $pro) {?>
            <?php $image = Image::where(['product_id', '=',  $pro->id,  '1']); ?>

                    <div class="recent-single-post">
                      <div class="post-img">
                      <a href="Product-info?id=<?php echo $pro->id; ?>">
                    <?php if (isset($image[0]->name)) {?>
                    <img src="<?php public_path(); ?>site/assets/img/portfolio/<?php echo $image[0]->name; ?>" alt="found">
                    <?php } else { ?>
                      <img src="<?php public_path(); ?>site/assets/img/portfolio/" alt="Photo Not Found">
                      <?php }?>

                  </a>
                      </div>
                      <div class="pst-content">
                        <p><a href="Product-info?id=<?php echo $pro->id; ?>">
                        <?php echo $pro->name; ?></a></p>
                      </div>
                    </div>
                    <!-- End single post -->
                    <?php }
          }?>
                   
                  </div>
                </div>
                <!-- recent end -->
              </div>
            </div>
          </div>
          <!-- End left sidebar -->
          <!-- Start single blog -->
          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <!-- single-blog start -->
                <article class="blog-post-wrapper">
                  <div class="post-information">
                    <div class="entry-meta">
                      <span class="author-meta"><i class="bi bi-person"></i> <a href="#">admin</a></span>
                      <span><i class="bi bi-clock"></i> march 28, 2016</span>
                      <span class="tag-meta">
                        <i class="bi bi-folder"></i>
                        <a href="#">painting</a>,
                        <a href="#">work</a>
                      </span>
                      <span>
                        <i class="bi bi-tags"></i>
                        <a href="#">tools</a>,
                        <a href="#"> Humer</a>,
                        <a href="#">House</a>
                      </span>
                      <span><i class="bi bi-chat"></i> <a href="#"><?php echo count($comments); ?>  comments</a></span>
                    </div>
                    <div class="entry-content">
                      <blockquote>
                        <p><?php echo $product[0]->details; ?></p>
                      </blockquote>
                       </div>
                  </div>
                </article>
                <div class="clear"></div>
                <div class="single-post-comments">
                  <div class="comments-area">
                    <div class="comments-heading">
                      <h3><?php echo count($comments); ?> comments</h3>
                    </div>
                    <div class="comments-list">
                      <ul>
                      <?php foreach ($comments as $comment) {?>

                        <li class="threaded-comments">
                          <div class="comments-details">
                            <div class="comments-list-img">
                              <img src="assets/img/blog/b02.jpg" alt="post-author">
                            </div>
                            <div class="comments-content-wrap">
                              <span>
                                <b><a href="#"><?php echo $comment->name; ?></a></b>
                              </span>
                              <p><?php echo $comment->comment; ?></p>
                            </div>
                          </div>
                        </li>
<?php }?>                       
                      </ul>
                    </div>
                  </div>
                  <div class="comment-respond">
                    <h3 class="comment-reply-title">Leave a Reply </h3>
                    
                    <!--            Sccess submet          -->
                    <?php if (app()->session->hasFlash('success')) { ?>
                    <span class="email-notes"><?php echo app()->session->getFlash('success'); ?></span>
                      <?php } ?>
                    <form action="postComment" method="post">
                      <div class="row">
                        <div class="col-lg-4 col-md-4">
                          <p>Name *</p>
                          <input type="text" name="name" value="<?php echo old('name'); ?>"/>
                          <?php if (app()->session->hasFlash('errors')) { ?>
                                    <?php if (isset(app()->session->getFlash('errors')['name'])) { ?>
                                      <p class="has-text-danger">
                                          <?php echo app()->session->getFlash('errors')['name'][0]; ?>
                                          
                                      </p>
                                    <?php } ?>
                                <?php } ?>
                          <input type="hidden" name="productID" value="<?php echo request()->get('id'); ?>" />
                        </div>
                        <div class="col-lg-4 col-md-4">
                          <p>Email *</p>
                          <input type="email" name="email" value="<?php echo old('email'); ?>"/>
                          <?php if (app()->session->hasFlash('errors')) { ?>
                                    <?php if (isset(app()->session->getFlash('errors')['email'])) { ?>
                                      <p class="has-text-danger">
                                          <?php echo app()->session->getFlash('errors')['email'][0]; ?>
                                          
                                      </p>
                                    <?php } ?>
                                <?php } ?>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 comment-form-comment">
                          <p>Comment</p>
                          <textarea id="message-box" name="comment" cols="30" rows="10" value="<?php echo old('comment'); ?>"></textarea>
                          <?php if (app()->session->hasFlash('errors')) { ?>
                                    <?php if (isset(app()->session->getFlash('errors')['comment'])) { ?>
                                      <p class="has-text-danger">
                                          <?php echo app()->session->getFlash('errors')['comment'][0]; ?>
                                          
                                      </p>
                                    <?php } ?>
                                <?php } ?>
                          <input type="submit"  />
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- single-blog end -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Page -->

</main><!-- End #main -->

<?php
// Мета-теги
$title = "Торговый островок хлебобулочных изделий";
$description = "";
$keywords = "Торговый островок, мебель, торговая точка, на заказ, москва и область";

include $_SERVER['DOCUMENT_ROOT'] . '/partials/header.php'?>

<!-- Основной контент -->
<main>
  <section id="product">
    <div class="container">
      <div class="product">
        <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/portfolio/index.php" class="product__return gallery-return">Вернуться в галерею</a>
        <div class="product__row row">
          <div class="column">
            <div class="product__gallery product-gallery">
              <div class="product-gallery__primary image-wrapper border-br-tl">
                <a data-fslightbox href="<?php $_SERVER['DOCUMENT_ROOT']?>/img/portfolio/outlet_1/1.jpg">
                  <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/img/portfolio/outlet_1/1.jpg" alt="" class="product-gallery__image image-wrapper__image border-br-tl">
                </a>
              </div>
              <!-- /.work-gallery__main -->
            </div>
            <!-- /.work-gallery -->
          </div>
          <!-- /.column -->

          <div class="column">
            <div class="product-text">
              <h1 class="product-text__title"><?php echo $title ?></h1>
              <p class="product-text__description paragraph"></p>
            </div>
            <!-- /.product-text -->

            <div class="product-photo">
              <h2 class="product-photo__title">Другие фотографии</h2>
              <div class="product-photo__content product-gallery__row">
                <div class="product-gallery__secondary product-gallery__secondary--active image-wrapper border-br-tl">
                  <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/img/portfolio/outlet_1/1.jpg" alt="" class="product-gallery__image image-wrapper__image border-br-tl">
                </div>
                <!-- /.work-gallery__secondary -->

                <div class="product-gallery__secondary image-wrapper border-br-tl">
                  <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/img/portfolio/outlet_1/2.jpg" alt="" class="product-gallery__image image-wrapper__image border-br-tl">
                </div>
                <!-- /.work-gallery__secondary -->

                <div class="product-gallery__secondary image-wrapper border-br-tl">
                  <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/img/portfolio/outlet_1/3.jpg" alt="" class="product-gallery__image image-wrapper__image border-br-tl">
                </div>
                <!-- /.work-gallery__secondary -->

                <div class="product-gallery__secondary image-wrapper border-br-tl">
                  <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/img/portfolio/outlet_1/4.jpg" alt="" class="product-gallery__image image-wrapper__image border-br-tl">
                </div>
                <!-- /.work-gallery__secondary -->
              </div>
              <!-- /.work-gallery__row -->
            </div>
            <!-- /.product-photo -->
          </div>
          <!-- /.column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.product -->
    </div>
    <!-- /.container -->
  </section>

  <?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/callback.php'?>

  <section id="other-works" class="other-works">
    <div class="container">
      <div class="section-title">
        <h2 class="section-title__heading">Другие наши работы</h2>
      </div>
      <!-- /.section-title -->

      <div class="other-works">
        <div class="other-works__image-wrapper image-wrapper border-br-tl">
          <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/img/portfolio/portfolio-item.jpg" alt="" class="other-works__image image-wrapper__image border-br-tl">
          <a href="" class="stretched-link"></a>
        </div>
        <!-- /.image-wrapper -->

        <div class="other-works__image-wrapper image-wrapper border-br-tl">
          <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/img/portfolio/portfolio-item.jpg" alt="" class="other-works__image image-wrapper__image border-br-tl">
          <a href="" class="stretched-link"></a>
        </div>
        <!-- /.image-wrapper -->

        <div class="other-works__image-wrapper image-wrapper border-br-tl">
          <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/img/portfolio/portfolio-item.jpg" alt="" class="other-works__image image-wrapper__image border-br-tl">
          <a href="" class="stretched-link"></a>
        </div>
        <!-- /.image-wrapper -->

        <div class="other-works__image-wrapper image-wrapper border-br-tl">
          <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/img/portfolio/portfolio-item.jpg" alt="" class="other-works__image image-wrapper__image border-br-tl">
          <a href="" class="stretched-link"></a>
        </div>
        <!-- /.image-wrapper -->
      </div>
      <!-- /.other-works -->
    </div>
    <!-- /.container -->
  </section>
</main>

<?php  include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'?>
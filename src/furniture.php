<?php
// Мета-теги
$title = "Фурнитура, которую мы используем в работе";
$description = "test";
$keywords = "test";

include 'partials/header.php'?>

<!-- Основной контент -->
<main>
  <section id="gallery">
    <div class="container">
      <div class="gallery">
        <div class="section-title">
          <h2 class="gallery__title section-title__heading">Фурнитура Blum</h2>
        </div>
        <!-- /.section-title -->

        <div class="gallery__wrapper">
          <div class="swiper-container gallery-slider">
            <div class="swiper-wrapper gallery-slider__wrapper">
              <div class="swiper-slide gallery-slider__slide">
                <div class="gallery__image image-wrapper border-br-tl">
                  <a data-fslightbox href="img/furniture/1.jpg">
                    <img class="image-wrapper__image border-br-tl" src="img/furniture/1_thumb.jpg" alt="">
                  </a>
                </div>
                <!-- /.gallery__image -->

                <div class="gallery__image image-wrapper border-br-tl">
                  <a data-fslightbox href="img/furniture/2.jpg">
                    <img class="image-wrapper__image border-br-tl" src="img/furniture/2_thumb.jpg" alt="">
                  </a>
                </div>
                <!-- /.gallery__image -->

                <div class="gallery__image image-wrapper border-br-tl">
                  <a data-fslightbox href="img/furniture/3.jpg">
                    <img class="image-wrapper__image border-br-tl" src="img/furniture/3_thumb.jpg" alt="">
                  </a>
                </div>
                <!-- /.gallery__image -->

                <div class="gallery__image image-wrapper border-br-tl">
                  <a data-fslightbox href="img/furniture/4.jpg">
                    <img class="image-wrapper__image border-br-tl" src="img/furniture/4_thumb.jpg" alt="">
                  </a>
                </div>
                <!-- /.gallery__image -->

                <div class="gallery__image image-wrapper border-br-tl">
                  <a data-fslightbox href="img/furniture/5.jpg">
                    <img class="image-wrapper__image border-br-tl" src="img/furniture/5_thumb.jpg" alt="">
                  </a>
                </div>
                <!-- /.gallery__image -->

                <div class="gallery__image image-wrapper border-br-tl">
                  <a data-fslightbox href="img/furniture/6.jpg">
                    <img class="image-wrapper__image border-br-tl" src="img/furniture/6_thumb.jpg" alt="">
                  </a>
                </div>
                <!-- /.gallery__image -->

                <div class="gallery__image">
                  <a data-fslightbox href="img/furniture/7.jpg">
                    <img class="image-wrapper__image border-br-tl" src="img/furniture/7_thumb.jpg" alt="">
                  </a>
                </div>
                <!-- /.gallery__image -->

                <div class="gallery__image">
                  <a data-fslightbox href="img/furniture/8.jpg">
                    <img class="image-wrapper__image border-br-tl" src="img/furniture/8_thumb.jpg" alt="">
                  </a>
                </div>
                <!-- /.gallery__image -->

                <div class="gallery__image">
                  <a data-fslightbox href="img/furniture/9.jpg">
                    <img class="image-wrapper__image border-br-tl" src="img/furniture/9_thumb.jpg" alt="">
                  </a>
                </div>
                <!-- /.gallery__image -->

                <div class="gallery__image">
                  <a data-fslightbox href="img/furniture/10.jpg">
                    <img class="image-wrapper__image border-br-tl" src="img/furniture/10_thumb.jpg" alt="">
                  </a>
                </div>
                <!-- /.gallery__image -->

                <div class="gallery__image">
                  <a data-fslightbox href="img/furniture/11.jpg">
                    <img class="image-wrapper__image border-br-tl" src="img/furniture/11_thumb.jpg" alt="">
                  </a>
                </div>
                <!-- /.gallery__image -->

                <div class="gallery__image">
                  <a data-fslightbox href="img/furniture/12.jpg">
                    <img class="image-wrapper__image border-br-tl" src="img/furniture/12_thumb.jpg" alt="">
                  </a>
                </div>
                <!-- /.gallery__image -->
              </div>
              <!-- /.swiper-slide -->
            </div>
            <!-- /.swiper-wrapper -->
            <div class="swiper-pagination gallery-slider__pagination"></div>
          </div>
          <!-- /.swiper-container -->

          <div class="swiper-button-prev gallery-slider__prev"></div>
          <div class="swiper-button-next gallery-slider__next"></div>
        </div>
        <!-- /.gallery__wrapper -->
      </div>
      <!-- /.gallery -->
    </div>
    <!-- /.container -->
  </section>
</main>

<?php include 'partials/footer.php'?>
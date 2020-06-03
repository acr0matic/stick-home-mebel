<?php // Мета-теги
$title = "Наши выполенные работы";
$description = "test";
$keywords = "test";

include $_SERVER['DOCUMENT_ROOT'] . '/partials/header.php'?>

<!-- Основной контент -->
<main>
  <section id="gallery">
    <div class="container">
      <div class="gallery">
        <div class="gallery__filters">
          <button data-filter-type="all" class="button button-secondary button-gallery button-active border-br-tl">Все <span class="button-gallery__number">0</span></button>
          <button data-filter-type="kitchen" class="button button-secondary button-gallery border-br-tl">Кухни <span class="button-gallery__number">0</span></button>
          <button data-filter-type="bathroom" class="button button-secondary button-gallery border-br-tl">Мебель в ванную <span class="button-gallery__number">0</span></button>
          <button data-filter-type="closet" class="button button-secondary button-gallery border-br-tl">Шкафы-купе <span class="button-gallery__number">0</span></button>
          <button data-filter-type="wardbore" class="button button-secondary button-gallery border-br-tl">Гардеробы <span class="button-gallery__number">0</span></button>
          <button data-filter-type="coffee" class="button button-secondary button-gallery border-br-tl">Кофейни <span class="button-gallery__number">0</span></button>
          <button data-filter-type="other" class="button button-secondary button-gallery border-br-tl">Разное <span class="button-gallery__number">0</span></button>
        </div>
        <!-- /.gallery__filters -->

        <div class="gallery__wrapper">
          <div class="swiper-container gallery-slider">
            <div class="swiper-wrapper gallery-slider__wrapper">
              <div class="swiper-slide gallery-slider__slide">
                <div data-filter="kitchen" class="gallery__image image-wrapper border-br-tl">
                  <img class="image-wrapper__image border-br-tl" src="<?php $_SERVER['DOCUMENT_ROOT']?>/img/portfolio/kitchen_1.jpg" alt="">
                  <a href="kitchen_1.php" class="stretched-link"></a>
                </div>
                <!-- /.gallery__image -->

                <div data-filter="kitchen" class="gallery__image image-wrapper border-br-tl">
                  <img class="image-wrapper__image border-br-tl" src="<?php $_SERVER['DOCUMENT_ROOT']?>/img/portfolio/kitchen_2.jpg" alt="">
                  <a href="kitchen_2.php" class="stretched-link"></a>
                </div>
                <!-- /.gallery__image -->

                <div data-filter="bathroom" class="gallery__image image-wrapper border-br-tl">
                  <img class="image-wrapper__image border-br-tl" src="<?php $_SERVER['DOCUMENT_ROOT']?>/img/portfolio/bathroom_1.jpg" alt="">
                  <a href="bathroom_1.php" class="stretched-link"></a>
                </div>
                <!-- /.gallery__image -->

                <div data-filter="wardbore" class="gallery__image image-wrapper border-br-tl">
                  <img class="image-wrapper__image border-br-tl" src="<?php $_SERVER['DOCUMENT_ROOT']?>/img/portfolio/wardbore_1.jpg" alt="">
                  <a href="wardbore_1.php" class="stretched-link"></a>
                </div>
                <!-- /.gallery__image -->

                <div data-filter="closet" class="gallery__image image-wrapper border-br-tl">
                  <img class="image-wrapper__image border-br-tl" src="<?php $_SERVER['DOCUMENT_ROOT']?>/img/portfolio/closet_1.jpg" alt="">
                  <a href="closet_1.php" class="stretched-link"></a>
                </div>
                <!-- /.gallery__image -->
                
                <div data-filter="wardbore" class="gallery__image image-wrapper border-br-tl">
                  <img class="image-wrapper__image border-br-tl" src="<?php $_SERVER['DOCUMENT_ROOT']?>/img/portfolio/wardbore_2.jpg" alt="">
                  <a href="wardbore_2.php" class="stretched-link"></a>
                </div>
                <!-- /.gallery__image -->

                <div data-filter="wardbore" class="gallery__image image-wrapper border-br-tl">
                  <img class="image-wrapper__image border-br-tl" src="<?php $_SERVER['DOCUMENT_ROOT']?>/img/portfolio/wardbore_3.jpg" alt="">
                  <a href="wardbore_3.php" class="stretched-link"></a>
                </div>
                <!-- /.gallery__image -->

                <div data-filter="kitchen" class="gallery__image image-wrapper border-br-tl">
                  <img class="image-wrapper__image border-br-tl" src="<?php $_SERVER['DOCUMENT_ROOT']?>/img/portfolio/kitchen_3.jpg" alt="">
                  <a href="kitchen_3.php" class="stretched-link"></a>
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

<!-- Подвал -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'?>
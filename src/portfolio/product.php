<?php
// Мета-теги
$title = "Название работы в две или одну строчки";
$description = "test";
$keywords = "test";

include $_SERVER['DOCUMENT_ROOT'] . '/partials/header.php'?>

<!-- Основной контент -->
<main>
  <section id="product">
    <div class="container">
      <div class="product">
        <a href="portfolio.php" class="product__return gallery-return">Вернуться в галерею</a>
        <div class="product__row row">
          <div class="column">
            <div class="product__gallery product-gallery">
              <div class="product-gallery__primary image-wrapper border-br-tl">
                <a data-fslightbox href="<?php $_SERVER['DOCUMENT_ROOT']?>/img/portfolio/item/1.jpg">
                  <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/img/portfolio/item/1.jpg" alt="" class="product-gallery__image image-wrapper__image border-br-tl">
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
              <p class="product-text__description paragraph">Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Ручеек лучше себя пунктуация напоивший, бросил что? Страна переписали дал заголовок они, дороге всемогущая.</p>
            </div>
            <!-- /.product-text -->

            <div class="product-photo">
              <h2 class="product-photo__title">Другие фотографии</h2>
              <div class="product-photo__content product-gallery__row">
                <div class="product-gallery__secondary product-gallery__secondary--active image-wrapper border-br-tl">
                  <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/img/portfolio/item/1.jpg" alt="" class="product-gallery__image image-wrapper__image border-br-tl">
                </div>
                <!-- /.work-gallery__secondary -->

                <div class="product-gallery__secondary image-wrapper border-br-tl">
                  <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/img/portfolio/item/2.jpg" alt="" class="product-gallery__image image-wrapper__image border-br-tl">
                </div>
                <!-- /.work-gallery__secondary -->

                <div class="product-gallery__secondary image-wrapper border-br-tl">
                  <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/img/portfolio/item/3.jpg" alt="" class="product-gallery__image image-wrapper__image border-br-tl">
                </div>
                <!-- /.work-gallery__secondary -->

                <div class="product-gallery__secondary image-wrapper border-br-tl">
                  <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/img/portfolio/item/4.jpg" alt="" class="product-gallery__image image-wrapper__image border-br-tl">
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

  <section id="callback">
    <div class="container">
      <div class="callback">
        <div class="callback-title">
          <h2 class="callback-title__heading"><span class="callback-title__heading callback-title__heading--common">Понравилась работа?</span> - закажи такую же!</h2>
        </div>
        <!-- /.callback-title -->

        <form action="" class="callback-form">
          <div class="callback-form__action">
            <input class="input input-form border-br-tl" name="user_name" type="text" placeholder="Имя">
            <input class="input input-form border-br-tl" name="user_phone" type="tel" placeholder="Номер телефона">
            <button class="button button-active border-bl-tr" type="button">Оставить заявку</button>
          </div>
          <!-- /.callback-form__action -->
          <span data-error-label class="form-error"></span>
        </form>
      </div>
      <!-- /.callback -->
    </div>
    <!-- /.container -->
  </section>

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
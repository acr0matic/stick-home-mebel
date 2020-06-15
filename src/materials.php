<?php
// Мета-теги
$title = "Материалы, с которыми мы работаем";
$description = "";
$keywords = "";

include 'partials/header.php' ?>

<!-- Основной контент -->
<main>

  <?php include 'partials/hero.php' ?>

  <section id="materials">
    <div class="container">
      <div class="section-title">
        <h2 class="section-title__heading">С чем мы работаем</h2>
      </div>
      <!-- /.section-title -->

      <div class="materials-row row">
        <div class="column">
          <p class="paragraph">Бытует мнение, что индивидуальный заказ мебели ‒ это дороже в два раза, чем покупка готовой продукции, да еще и ожидание растягивается на месяцы. Спешим Вас разубедить, это совершенно не верно. </p>
        </div>
        <!-- /.col -->

        <div class="column">
          <p class="paragraph">
            Может в это сложно поверить, но в некоторых случаях изготовление мебели обойдется дешевле, чем покупка уже готовой модели. Ведь Вы все делаете по своему вкусу и финансовым возможностям.
          </p>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="materials">
        <div data-material="alvic" class="material material--action border-br-tl">
          <img class="material__image border-br-tl" src="img/materials/alvic.jpg" alt="">
          <h3 class="material__title">Алвик</h3>
        </div>
        <!-- /.material -->

        <div data-material="klif" class="material material--action border-br-tl">
          <img class="material__image border-br-tl" src="img/materials/klif.jpg" alt="">
          <h3 class="material__title">Клиф</h3>
        </div>
        <!-- /.material -->

        <div data-material="arpa" class="material material--action border-br-tl">
          <img class="material__image border-br-tl" src="img/materials/arpa.jpg" alt="">
          <h3 class="material__title">Арпа</h3>
        </div>
        <!-- /.material -->

        <div data-material="egger" class="material material--action border-br-tl">
          <img class="material__image border-br-tl" src="img/materials/egger.jpg" alt="">
          <h3 class="material__title">Еггер</h3>
        </div>
        <!-- /.material -->

        <div data-material="pvh" class="material material--action border-br-tl">
          <img class="material__image border-br-tl" src="img/materials/pvh.jpg" alt="">
          <h3 class="material__title">Плёнка ПВХ</h3>
        </div>
        <!-- /.material -->

        <div data-material="emal" class="material material--action border-br-tl">
          <img class="material__image border-br-tl" src="img/materials/emal.jpg" alt="">
          <h3 class="material__title">Эмаль</h3>
        </div>
        <!-- /.material -->

        <div data-material="quartz" class="material material--action border-br-tl">
          <img class="material__image border-br-tl" src="img/materials/quartz.jpg" alt="">
          <h3 class="material__title">Кварц</h3>
        </div>
        <!-- /.material -->

        <div data-material="stone" class="material material--action border-br-tl">
          <img class="material__image border-br-tl" src="img/materials/stone.jpg" alt="">
          <h3 class="material__title">Искусственный камень</h3>
        </div>
        <!-- /.material -->
      </div>
      <!-- /.materials -->
    </div>
    <!-- /.container -->
  </section>

  <?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/callback.php'?>

</main>

<div class="modal micromodal-slide" id="materialModal" aria-hidden="true">
  <div class="modal__overlay" tabindex="-1" data-micromodal-close>
    <div class="modal__wrapper">
      <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
      <div class="modal__container border-br-tl" role="dialog" aria-modal="true">
        <header class="modal__header">
          <img class="modal__image" src="img/materials/alvic-full.jpg" alt="">
        </header>
        <main class="modal__content" id="modal-1-content">
          <h2 class="modal__title">Клиф</h2>
        </main>
      </div>
      <!-- /.modal__container -->
    </div>
    <!-- /.modal__wrapper -->
  </div>
  <!-- /.modal__overlay -->
</div>

<?php include 'partials/footer.php' ?>
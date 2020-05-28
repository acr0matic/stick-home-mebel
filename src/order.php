<?php include 'partials/header.php'?>

<!-- Основной контент -->
<main>

  <?php include 'partials/hero.php'?>

  <section id="communication" class="communication">
    <div class="container">
      <div class="section-title">
        <h2 class="section-title__heading">Работать с нами легко!</h2>
      </div>
      <!-- /.section-title -->

      <div class="row">
        <div class="column">
          <p class="paragraph">Бытует мнение, что индивидуальный заказ мебели ‒ это дороже в два раза, чем
            покупка готовой продукции, да еще и ожидание растягивается на месяцы. Спешим Вас разубедить, это
            совершенно не верно. </p>
        </div>
        <!-- /.col -->

        <div class="column">
          <p class="paragraph">
            Может в это сложно поверить, но в некоторых случаях изготовление мебели обойдется дешевле, чем
            покупка уже готовой модели. Ведь Вы все делаете по своему вкусу и финансовым возможностям.
          </p>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <h3 class="communication__title">Выбор способа связи</h3>
      <div class="communication__methods">
        <div class="communication-method">
          <img class="communication-method__image border-br-tl" src="img/pages/communication/call.jpg" alt="">
          <p class="communication-method__description paragraph">Просто позвоните по нашему номеру и менеджер
            примет Ваш заказ, а так же проконсультирует по любым вопросам: по доставке, оплате и самому
            заказу.</p>
          <a class="communication-method__phone" href="tel:"><button
                    class="button button-secondary button-communication border-bl-tr">Позвонить
              самому</button></a>
        </div>
        <!-- /.communication-method -->

        <div class="communication-method">
          <img class="communication-method__image border-br-tl" src="img/pages/communication/callback.jpg"
               alt="">
          <p class="communication-method__description paragraph">Если у вас по какой-либо причине не
            получается дозвониться нам по телефону, либо у вас нет времени, то вы можете воспользоваться
            услугой "Заказать обратный звонок".</p>
          <button data-button-action="order"
                  class="button button-secondary button-communication border-bl-tr">Обратный звонок</button>
        </div>
        <!-- /.communication-method -->

        <div class="communication-method">
          <img class="communication-method__image border-br-tl" src="img/pages/communication/order.jpg"
               alt="">
          <p class="communication-method__description paragraph">Заказать у нас мебель совсем не сложно - для
            этого нужно проделать всего лишь несколько простых шагов. Подробнее ознакомиться с ними вы
            можете ниже.</p>
          <button data-button-scroll="#order-scheme"
                  class="button button-secondary button-communication border-bl-tr">Подробнее про заказ</button>
        </div>
        <!-- /.communication-method -->
      </div>
      <!-- /.communication__method -->
    </div>
    <!-- /.container -->
  </section>

  <section id="order-scheme" class="order-scheme">
    <div class="container">
      <div class="section-title">
        <h2 class="section-title__heading">Схема заказа</h2>
      </div>
      <!-- /.section-title -->

      <ul class="order-scheme__list order-list">
        <li class="order-list__item">
          <img class="order-list__image border-br-tl" src="img/pages/communication/checkout.jpg" alt="">
          <div class="order-list__content">
            <h3 class="order-list__title">Вы заполняете анкету на сайте или звоните нашему менеджеру</h3>
            <p class="order-list__description paragraph">Желательно, чтобы вы сообщили приблизительные
              размеры заказываемой мебели и параметры помещения, в котором ее необходимо разместить.</p>
            <p class="order-list__description paragraph">Менеджер предварительно проведет расчет стоимости
              проекта Вашей мебели и запишет Вас на замер.</p>
          </div>
          <!-- /.order-list__content -->
        </li>
        <!-- /.order-list__item -->

        <li class="order-list__item">
          <img class="order-list__image border-br-tl" src="img/pages/communication/measuring.jpg" alt="">
          <div class="order-list__content">
            <h3 class="order-list__title">К Вам выезжает наш замерщик с образцами</h3>
            <p class="order-list__description paragraph">Мастер-консультант поможет с выбором цветового
              решения, даст рекомендации по конструкции Вашей мебели и произведет точный замер места
              установки</p>
            <p class="order-list__description paragraph">Все эти действия позволят составить в салоне эскиз
              и спецификацию на элементы Вашей мебели.</p>
          </div>
          <!-- /.order-list__content -->
        </li>
        <!-- /.order-list__item -->

        <li class="order-list__item">
          <img class="order-list__image border-br-tl" src="img/pages/communication/contract.jpg" alt="">
          <div class="order-list__content">
            <h3 class="order-list__title">Мы заключаем с Вами договор</h3>
            <p class="order-list__description paragraph">Уточняем детали проекта, вносим в него изменения,
              если это необходимо и заключаем договор. В нем прописаны условия поставки и примерный день
              установки мебели.</p>
          </div>
          <!-- /.order-list__content -->
        </li>
        <!-- /.order-list__item -->

        <li class="order-list__item">
          <img class="order-list__image border-br-tl" src="img/pages/communication/crafting.jpg" alt="">
          <div class="order-list__content">
            <h3 class="order-list__title">Начинаем изготовление вашего заказа</h3>
            <p class="order-list__description paragraph">Стандартное время изготовления мебели в нашей фирме
              — от 14 рабочих дней, в зависимости от сложности изделия и загруженности производства. Если
              заказ предполагает монтаж мебели, то срок может увеличиться на 2-3 дня.</p>
          </div>
          <!-- /.order-list__content -->
        </li>
        <!-- /.order-list__item -->

        <li class="order-list__item">
          <img class="order-list__image border-br-tl" src="img/pages/communication/delivery.jpg" alt="">
          <div class="order-list__content">
            <h3 class="order-list__title">Доставка, установка и гарантия</h3>
            <p class="order-list__description paragraph">Доставка и монтаж мебели включаются в сумму заказа.
              Цену доставки за пределы города и в другие города, уточняйте у менеджеров нашего салона.</p>
            <p class="order-list__description paragraph">На все наши изделия мы предоставляем гарантию в 12
              месяцев с момента поставки. Если в течение этого срока возникнут проблемы с эксплуатацией
              изделия, мы окажем полную сервисную поддержку.</p>
          </div>
          <!-- /.order-list__content -->
        </li>
        <!-- /.order-list__item -->
      </ul>
      <!-- /.order-scheme__list -->
    </div>
    <!-- /.container -->
  </section>

</main>

<?php include 'partials/footer.php'?>
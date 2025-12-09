<?php include 'header.php'; ?>
    
    <div class="top-wrapper protect-bg anim-items top-inner pay-bg">
        <div class="container">
            <div class="top protect-top">
                <div class="top__content">
                    <h1 class="top__title protect-top__title"><span>УДОБНАЯ ПРОЗРАЧНАЯ СИСТЕМА ОПЛАТЫ</span></h1>
                    <div class="top__title top__title--mob"><span>Оплата</span></div>
                    <div class="top__desc">Выбирайте подходящий сбособ <br>и оплачивайте свои покупки</div>
                </div>
                <div class="pay-img">
                    <img src="img/pay.png" alt="pay" loading="lazy">
                </div>
            </div>
        </div>
    </div>
    
    <section class="how-section">
        <div class="container">
            <div class="how">
                <h2>КАК ПРОХОДИТ?</h2>
                <p>После согласования заказа и утверждения конфигурации клиенту направляется техническая спецификация (товарный чек). Далее клиент выбирает удобный способ оплаты</p>
                <p>При заказе оплачивается полная стоимость компьютера</p>
                <p>После оплаты клиент получит полный комплект документов: кассовый чек, товарный чек с технической спецификацией компьютера и гарантийный талон</p>
            </div>
        </div>
    </section>
    
    <?php
    $safe = [
        [
            'title'=> 'НАЛИЧНЫМИ В ОФИСЕ',
            'desc' => 'Вы можете оплатить заказ в нашем офисе по адресу г. Екатеринбург, ул. Шефская 4А'
        ],
        [
            'title'=> 'СИСТЕМА БЫСТРЫХ ПЛАТЕЖЕЙ (СБП)',
            'desc' => 'Оплатите заказ через СБП по QR-коду. Это быстро, удобно и не требует наличия банковской карты. Нужно лишь мобильное приложение вашего банка'
        ],
        [
            'title'=> 'БАНКОВСКИЙ ПЕРЕВОД (ДЛЯ ФИЗ. ЛИЦ)',
            'desc' => 'После оформления заказа вышлем Вам счёт для оплаты. Вы можете оплатить его в любом банке'
        ],
        [
            'title'=> 'БАНКОВСКОЙ КАРТОЙ (+2,5% К ИТОГОВОЙ СТОИМОСТИ ЗАКАЗА)',
            'desc' => 'Онлайн оплата заказа проходит через платёжную систему ЮMoney с использованием дебетовых и кредитных карт следующих платёжных систем: МИР, VISA, Mastercard, JCB'
        ],
        [
            'title'=> 'КРЕДИТ/РАССРОЧКА',
            'desc' => 'Мы сотрудничаем с ведущими банками, чтобы предложить Вам выгодные условия кредита или рассрочки. Напишите нам в личные сообщения и специалист свяжется с вами для оформления'
        ],
        [
            'title'=> 'ОПЛАТА ПО СЧЁТУ (ДЛЯ ЮРИДИЧЕСКИХ ЛИЦ И ИП)',
            'desc' => 'Для юридических лиц и индивидуальных предпринимателей доступна оплата по счёту. После согласования мы вышлем счёт, который можно оплатить удобным для вас способом'
        ],
    ];
    ?>
    <section class="safe-section">
        <div class="container">
            <div class="safe safe--pay">
                <h2 class="safe__title">ДОСТУПНЫЕ СПОСОБЫ ОПЛАТЫ:</h2>
                <div class="safe-box">
                            
                    <?php $i = 0; foreach ($safe as $item): $i++; ?>
                    <div class="safe-item">
                        <div class="safe-item__img"><img src="img/p<?php echo $i; ?>.svg" alt="safe" loading="lazy"></div>
                        <div class="safe-item__title"><?php echo $item['title']; ?></div>
                        <div class="safe-item__desc"><?php echo $item['desc']; ?></div>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </section>
    
    <?php include 'part/faq.php'; ?>
    
    <?php
    $find_inner = true;
    ?>
    <?php include 'part/find.php'; ?>

<?php include 'footer.php'; ?>
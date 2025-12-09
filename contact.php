<?php include 'header.php'; ?>

    <section class="contact-section">
        <div class="container">
            <div class="contact">
                <h1 class="contact__title title">КОНТАКТЫ</h1>
                <div class="contact-box">
                    <div class="contact-content">
                        <div class="contact-content__item contact-content__phone">
                            <div class="contact-content__title">Телефон</div>
                            <a href="tel:+79126053744" class="contact-phone">+7 (912) 605-37-44</a>
                            <div class="find-social">
                                <a href="javascript:void(0);" class="find-social__item" target="_blank">
                                    <div class="find-social__icon"><svg width="51" height="51"><use href="img/sprite.svg<?php echo $dev; ?>#tg"></use></svg></div>
                                    <div class="find-social__title">Telegram</div>
                                </a>
                                <a href="javascript:void(0);" class="find-social__item" target="_blank">
                                    <div class="find-social__icon"><svg width="51" height="51"><use href="img/sprite.svg<?php echo $dev; ?>#wts"></use></svg></div>
                                    <div class="find-social__title">WhatsApp</div>
                                </a>
                            </div>
                        </div>
                        <div class="contact-content__item contact-schedule">
                            <div class="contact-content__title">Режим работы</div>
                            <div class="contact-content__desc">Ежедневно, с 10:00 до 20:00</div>
                        </div>
                        <div class="contact-content__item contact-email">
                            <div class="contact-content__title">Сотрудничество и реклама</div>
                            <div class="contact-content__desc"><a href="mailto:constructpc.ekb@gmail.com">constructpc.ekb@gmail.com</a></div>
                        </div>
                        <div class="contact-content__item contact-address">
                            <div class="contact-content__title">Адрес</div>
                            <div class="contact-content__desc">г. Екатеринбург, ул. Шефская, 4 А</div>
                            <div class="contact-content__sub">*Прием клиентов по предварительной записи</div>
                        </div>
                        <div class="contact-content__item contact-content__requisite">
                            <div class="contact-content__title">Реквизиты</div>
                            <div class="requisite">ИП Каменский Илья Юрьевич <br>ИНН: 93482394802349 <br>ОГРНИП: 1345435435 <br>Р/С: 21321146352103,321 <br>К/С: №654512315685 <br>БИК: 5468463132164864315</div>
                        </div>
                    </div>
                    <div id="map"></div>
                </div>
                <?php
                $subs = [
                    [
                        'icon' => 'img/s1.svg',
                        'alt'  => 'youtube',
                        'title'=> 'YOUTUBE',
                        'desc' => '146 000+ подписчиков'
                    ],
                    [
                        'icon' => 'img/s2.svg',
                        'alt'  => 'ВКОНТАКТЕ',
                        'title'=> 'ВКОНТАКТЕ',
                        'desc' => '14 000+ подписчиков'
                    ],
                    [
                        'icon' => 'img/s3.svg',
                        'alt'  => 'TIKTOK',
                        'title'=> 'TIKTOK',
                        'desc' => '124 000+ подписчиков'
                    ],
                    [
                        'icon' => 'img/s4.svg',
                        'alt'  => 'TELEGRAM',
                        'title'=> 'TELEGRAM',
                        'desc' => '17 000+ подписчиков'
                    ],
                ];
                ?>
                <div class="contact-socials">
                    <h2 class="contact-socials__h title">МЫ В СОЦИАЛЬНЫХ СЕТЯХ</h2>
                    <div class="contact-socials__slider pc-slider">
                        <div class="contact__swiper swiper">
                            <div class="swiper-wrapper">
                                <?php foreach ($subs as $s): ?>
                                <div class="swiper-slide">
                                    <a href="javascript:void(0);" class="contact-socials__item">
                                        <div class="contact-socials__icon">
                                            <img src="<?php echo $s['icon']; ?>" alt="<?php echo $s['alt']; ?>" loading="lazy">
                                        </div>
                                        <div class="contact-socials__content">
                                            <div class="contact-socials__title"><?php echo $s['title']; ?></div>
                                            <div class="contact-socials__desc"><?php echo $s['desc']; ?></div>
                                        </div>
                                    </a>
                                </div>
                                <?php endforeach; ?> 
                            </div>
                        </div>
                        <button class="nav-btn nav-prev contact-prev" type="button" aria-label="Предыдущий слайд"><svg width="58" height="58"><use href="img/sprite.svg<?php echo $dev; ?>#slider-nav"></use></svg></button>
                        <button class="nav-btn nav-next contact-next" type="button" aria-label="Предыдущий слайд"><svg width="58" height="58"><use href="img/sprite.svg<?php echo $dev; ?>#slider-nav"></use></svg></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
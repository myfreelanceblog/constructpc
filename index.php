<?php include 'header.php'; ?>
    
    <section class="hero">
        <h1 class="h1__hidden">Construct PC</h1>
        <div class="hero-slider">
            <div class="hero__swiper swiper">
                <div class="swiper-wrapper">
                    <?php for($i = 0; $i < 3; $i++): ?>
                    <div class="swiper-slide">
                        <div class="hero-item">
                            <img src="img/hero-big.jpg" alt="hero" loading="lazy" class="hero-item__img">
                            <div class="container">
                                <div class="hero-item__content">
                                    <div class="hero-item__title">БОЛЕЕ <br><span>1000</span> <br>клиентов <br>по всей России</div>
                                    <div class="hero-item__desc">Доставили ПК в 60+ городов <br>по всей стране!</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
            <div class="hero__pagination"></div>
        </div>
    </section>

    <section class="individual-section anim-items">
        <div class="container">
            <div class="individual">
                <div class="individual__top">
                    <h2 class="title">ИНДИВИДУАЛЬНЫЙ ПК ПОД ВАШИ ЗАДАЧИ</h2>
                    <div class="individual__desc">Производительное решение для работы и гейминга</div>
                </div>
                <div class="individual-box">
                    <div class="individual-box__content">
                        <div class="individual-box__title">ИГРОВЫЕ <br>И&nbsp;РАБОЧИЕ КОМПЬЮТЕРЫ</div>
                        <a href="javascript:void(0);" class="individual-btn" aria-label="ВЫБРАТЬ ПК"><span class="individual-btn__pc">ВЫБРАТЬ ПК</span><span class="individual-btn__mob">каталог</span></a>
                    </div>
                    <div class="individual-box__img">
                        <picture>
                            <source srcset="img/individual-mob.png" media="(max-width: 568px)">
                            <img src="img/individual.png" alt="individual" loading="lazy">
                        </picture>
                    </div>
                </div>
                <a href="javascript:void(0);" class="individual-btn individual-btn--mob" aria-label="ВЫБРАТЬ ПК"><span class="individual-btn__pc">ВЫБРАТЬ ПК</span><span class="individual-btn__mob">каталог</span></a>
            </div>
        </div>
    </section>

    <?php include 'part/find.php'; ?>
    
    <?php
    $steps = [
        [
            'title' => 'КОНСУЛЬТАЦИЯ И&nbsp;ПОДБОР',
            'desc'  => 'Любые изменения конфигурации по&nbsp;вашему&nbsp;желанию',
        ],
        [
            'title' => 'ОФОРМЛЕНИЕ <br>И&nbsp;ОПЛАТА',
            'desc'  => 'После согласования конфигурации вы получите товарный&nbsp;чек',
        ],
        [
            'title' => 'ПРОВЕРКА <br>И&nbsp;СБОРКА',
            'desc'  => 'Высылаем фотоотчет состава заказа, проводим стресс-тесты',
        ],
        [
            'title' => 'УПАКОВКА <br>И&nbsp;ДОСТАВКА',
            'desc'  => 'Надежно упаковываем компьютер и отправляем доставкой&nbsp;СДЭК',
        ],
    ];
    ?>
    <section class="steps-section">
        <div class="container">
            <div class="steps">
                <h2 class="title">Этапы заказа</h2>
                <div class="steps-box">
                    <?php $i = 0; foreach ($steps as $step): $i++; ?>
                    <div class="steps-item">
                        <div class="steps-item__numb"><img src="img/step<?php echo $i; ?>.svg" alt="steps" loading="lazy"></div>
                        <div class="steps-item__title"><?= $step['title'] ?></div>
                        <div class="steps-item__desc"><?= $step['desc'] ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="what-section">
        <div class="container">
            <div class="what">
                <h2 class="title">ЧТО ДЕЛАЕТ НАС ОСОБЕННЫМИ?</h2>
                <div class="what-slider">
                    <div class="what__swiper swiper">
                        <div class="swiper-wrapper">
                            <?php for($i = 0; $i < 3; $i++): ?>
                            <div class="swiper-slide">
                                <div class="what-box">
                                    <div class="what-content">
                                        <div class="what__title">ИНДИВИДУАЛЬНЫЙ ПК = ИДЕАЛЬНЫЙ ДЛЯ ВАС</div>
                                        <div class="what__desc">Вы покупаете не просто набор деталей,а готовое и идеально настроенное решение, созданное исключительно для вас</div>
                                        <a href="javascript:void(0);" class="what__btn">Узнать подробнее</a>
                                    </div>
                                    <div class="what-img">
                                        <img src="img/what.jpg" alt="what" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                    <button class="what-prev nav-btn nav-prev" type="button" aria-label="Предыдущий слайд"><svg width="58" height="58"><use href="img/sprite.svg<?php echo $dev; ?>#slider-nav"></use></svg></button>
                    <button class="what-next nav-btn nav-next" type="button" aria-label="Следующий слайд"><svg width="58" height="58"><use href="img/sprite.svg<?php echo $dev; ?>#slider-nav"></use></svg></button>
                </div>
            </div>
        </div>
    </section>

    <section class="rev-section">
        <div class="container">
            <div class="rev">
                <h2 class="title">ОТЗЫВЫ О НАС</h2>
                <div class="rev-slider">
                    <div class="rev__swiper swiper">
                        <div class="swiper-wrapper">
                            <?php for($i = 1; $i <= 4; $i++): ?>
                            <div class="swiper-slide">
                                <div class="rev-item">
                                    <div class="rev-item__img">
                                        <img src="img/rev<?php echo $i; ?>.png" alt="rev" loading="lazy">
                                    </div>
                                    <div class="rev-item__desc">65+ отзывов</div>
                                    <a href="javascript:void(0);" class="rev-item__link">Посмотреть отзывы</a>
                                </div>
                            </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                    <button class="rev__nav rev-prev" type="button" aria-label="следующий отзыв"><svg width="58" height="58"><use href="img/sprite.svg<?php echo $dev; ?>#slider-nav"></use></svg></button>
                    <button class="rev__nav rev-next" type="button" aria-label="следующий отзыв"><svg width="58" height="58"><use href="img/sprite.svg<?php echo $dev; ?>#slider-nav"></use></svg></button>
                </div>
            </div>
        </div>
    </section>

    <section class="subscribe-section">
        <div class="container">
            <div class="subscribe">
                <h2 class="title">ПОДПИСЫВАЙТЕСЬ НА НАШИ&nbsp;СЕТИ</h2>
                <div class="subscribe-content">
                    <div class="subscribe-box">
                        <?php for($i = 1; $i <= 3; $i++): ?>
                        <a href="javascript:void(0);" class="subscribe-item">
                            <img src="img/subscribe.jpg" alt="subscribe" loading="lazy">
                        </a>
                        <?php endfor; ?>
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
                    <div class="subscribe-socials">
                        <?php foreach ($subs as $s): ?>
                        <a href="javascript:void(0);" class="subscribe-socials__item">
                            <div class="subscribe-socials__icon">
                                <img src="<?php echo $s['icon']; ?>" alt="<?php echo $s['alt']; ?>" loading="lazy">
                            </div>
                            <div class="subscribe-socials__content">
                                <div class="subscribe-socials__title"><?php echo $s['title']; ?></div>
                                <div class="subscribe-socials__desc"><?php echo $s['desc']; ?></div>
                            </div>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
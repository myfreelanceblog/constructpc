<?php include 'header.php'; ?>
    
    <div class="top-wrapper protect-bg anim-items top-inner delivery-bg">
        <div class="delivery-img">
            <img src="img/delivery-bg.png" alt="delivery" loading="lazy">
        </div>
        <div class="container">
            <div class="top protect-top">
                <div class="top__content">
                    <h1 class="top__title protect-top__title"><span>ОТПРАВЛЯЕМ <br>КОМПЬЮТЕРЫ <br>ПО ВСЕЙ СТРАНЕ</span></h1>
                    <div class="top__title top__title--mob"><span>ДОСТАВКА</span></div>
                    <div class="top__desc">Качественно упакуем и доставим компьютер в любую точку России Будьте уверены - Ваш компьютер дойдет в целости и сохранности</div>
                </div>
            </div>
        </div>
    </div>
    
    <?php
    $receiving = [
        [
            'title'=> 'САМОВЫВОЗ',
            'desc' => 'Забрать ПК лично из офиса (г.&nbsp;Екатеринбург, ул.&nbsp;Шефская&nbsp;4А)'
        ],
        [
            'title'=> 'ДОСТАВКА ПО РОССИИ',
            'desc' => 'Отправка ПК через ТК СДЭК. При отправке Вы получите трек-номер для отслеживания и финальный отчет с деталями упаковки'
        ],
        [
            'title'=> 'БЕСПЛАТНАЯ ДОСТАВКА',
            'desc' => 'Доставка до квартиры (только Екатеринбург)'
        ],
    ];
    ?>
    <section class="receiving-section">
        <div class="container">
            <div class="receiving">
                <h2 class="receiving__title">СПОСОБЫ ПОЛУЧЕНИЯ ПК:</h2>
                <div class="receiving-slider pc-slider">
                    <div class="receiving__swiper swiper">
                        <div class="swiper-wrapper">
                            
                            <?php $i = 0; foreach ($receiving as $item): $i++; ?>
                            <div class="swiper-slide">
                                <div class="receiving-item">
                                    <div class="receiving-item__img"><img src="img/r<?php echo $i; ?>.svg" alt="config" loading="lazy"></div>
                                    <div class="receiving-item__title"><?php echo $item['title']; ?></div>
                                    <div class="receiving-item__desc"><?php echo $item['desc']; ?></div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            
                        </div>
                    </div>
                    <button class="nav-btn nav-prev receiving-prev" type="button" aria-label="Предыдущий слайд"><svg width="58" height="58"><use href="img/sprite.svg<?php echo $dev; ?>#slider-nav"></use></svg></button>
                    <button class="nav-btn nav-next receiving-next" type="button" aria-label="Предыдущий слайд"><svg width="58" height="58"><use href="img/sprite.svg<?php echo $dev; ?>#slider-nav"></use></svg></button>
                </div>
                
                
            </div>
        </div>
    </section>
    
    <?php
    $safe = [
        [
            'title'=> 'СТРАХОВАНИЕ ОТ ПОВРЕЖДЕНИЙ ПРИ&nbsp;ПЕРЕВОЗКЕ',
            'desc' => 'Оформим страховку груза через ТК СДЭК. Если при транспортировке случился поломка, мы заменим неисправные комплектующие'
        ],
        [
            'title'=> 'ДЕРЕВЯННАЯ ОБРЕШЕТКА (СДЭК)',
            'desc' => 'Жесткий деревянный каркас надежно защищает корпус ПК от ударов и повреждений во время транспортировки'
        ],
        [
            'title'=> 'ГАРАНТИЯ РАБОТОСПОСОБНОСТИ ПОСЛЕ&nbsp;ДОСТАВКИ',
            'desc' => 'Ваш ПК приедет готовым к работе. Поможем с первым включение и настройкой'
        ],
    ];
    ?>
    <section class="safe-section">
        <div class="container">
            <div class="safe">
                <h2 class="safe__title">ВАШ КОМПЬЮТЕР ДОЙДЕТ В ЦЕЛОСТИ И СОХРАННОСТИ!</h2>
                <div class="safe-box">
                            
                    <?php $i = 0; foreach ($safe as $item): $i++; ?>
                    <div class="safe-item">
                        <div class="safe-item__img"><img src="img/safe<?php echo $i; ?>.svg" alt="safe" loading="lazy"></div>
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
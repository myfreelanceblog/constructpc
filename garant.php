<?php include 'header.php'; ?>
    
    <div class="top-wrapper protect-bg anim-items top-inner">
        <div class="container">
            <div class="top protect-top">
                <div class="top__content">
                    <h1 class="top__title protect-top__title"><span>ВАША ЗАЩИТА <br>И УВЕРЕННОСТЬ <br>В КАЧЕСТВЕ!</span></h1>
                    <div class="top__title top__title--mob"><span>Гарантия</span></div>
                    <div class="top__desc">Главным приоритетом CONSRUCT PC является обслуживание клиентов, и мы стремимся к тому, чтобы каждый покупатель был полностью доволен как до, так и после покупки</div>
                </div>
                <div class="protect-top__img">
                    <img src="img/pc2.png" alt="pc" loading="lazy">
                </div>
            </div>
        </div>
    </div>
    
    <?php
    $garant = [
        [
            'title'=> 'ФИРМЕННАЯ <br>ГАРАНТИЯ',
            'desc' => 'Только новые комплектующие с&nbsp;гарантией до 3&nbsp;лет. После истечения нашей фирменной гарантии, мы сохраняем гарантию от&nbsp;поставщиков комплектующих'
        ],
        [
            'title'=> 'ОФИЦИАЛЬНЫЕ <br>ПОСТАВЩИКИ',
            'desc' => 'DNS, ОНЛАЙН ТРЕЙД <br>и другие проверенные партнеры'
        ],
        [
            'title'=> 'ПОДТВЕРЖДЕНИЕ <br>ПОДЛИННОСТИ',
            'desc' => 'Вы получите коробки от всех <br>комплектующих'
        ],
        [
            'title'=> 'ГАРАНТИЙНОЕ <br>ОБСЛУЖИВАНИЕ',
            'desc' => 'Полная документация <br>от поставщиков по вашему запросу'
        ]
    ];
    ?>
    <section class="garant-section">
        <div class="container">
            <div class="garant-slider">
                
                <div class="garant__swiper swiper">
                    <div class="swiper-wrapper">
                        
                        <?php $i = 0; foreach ($garant as $item): $i++; ?>
                        <div class="swiper-slide">
                            <div class="garant-item">
                                <div class="garant-item__img"><img src="img/g<?php echo $i; ?>.svg" alt="config" loading="lazy"></div>
                                <div class="garant-item__title"><?php echo $item['title']; ?></div>
                                <div class="garant-item__desc"><?php echo $item['desc']; ?></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        
                    </div>
                </div>
                <button class="nav-btn nav-prev garant-prev" type="button" aria-label="Предыдущий слайд"><svg width="58" height="58"><use href="img/sprite.svg<?php echo $dev; ?>#slider-nav"></use></svg></button>
                <button class="nav-btn nav-next garant-next" type="button" aria-label="Предыдущий слайд"><svg width="58" height="58"><use href="img/sprite.svg<?php echo $dev; ?>#slider-nav"></use></svg></button>
                
            </div>
        </div>
    </section>
    
    <section class="advantages-section">
        <div class="container">
            <div class="advantages">
                <h2 class="advantages__title">ПРЕИМУЩЕСТВА НАШЕЙ ГАРАНТИИ</h2>
                
                <?php
                $advantages = [
                    [
                        'icon'  => '',
                        'title' => '',
                        'col24' => '24 месяца',
                        'col36' => '36 месяцев',
                    ],
                    [
                        'icon'  => 'img/a1.svg',
                        'title' => 'Распространение гарантии',
                        'col24' => 'На все производственные дефекты и системные неисправности',
                        'col36' => 'На все производственные дефекты и системные неисправности',
                    ],
                    [
                        'icon'  => 'img/a2.svg',
                        'title' => 'Замена комплектующих на новые',
                        'col24' => 'Бесплатная при гарантийном случае',
                        'col36' => 'Бесплатная при гарантийном случае',
                    ],
                    [
                        'icon'  => 'img/a3.svg',
                        'title' => 'Срок устранения неисправностей',
                        'col24' => 'До 10 дней (при наличии компонентов)',
                        'col36' => 'До 5 дней (при наличии компонентов)',
                    ],
                    [
                        'icon'  => 'img/a4.svg',
                        'title' => 'Стресс-тестирование',
                        'col24' => '4 часа + фото отчет',
                        'col36' => '4 часа + фото отчет',
                    ],
                    [
                        'icon'  => 'img/a5.svg',
                        'title' => 'Возврат ПК/комплектующих на диагностику',
                        'col24' => 'Покрытие всех транспортных расходов',
                        'col36' => 'Покрытие всех транспортных расходов',
                    ],
                    [
                        'icon'  => 'img/a6.svg',
                        'title' => 'Техническая поддержка',
                        'col24' => 'Да',
                        'col36' => 'Да',
                    ],
                    [
                        'icon'  => 'img/a7.svg',
                        'title' => 'Стоимость гарантии',
                        'col24' => 'Включена',
                        'col36' => '5% к стоимости компьютера',
                    ],

                ];
                ?>
                <div class="advantages-table">
                    <div class="advantages-row">
                        <?php foreach ($advantages as $item): ?>
                        <div class="advantages-item">
                            <div class="advantages-item__col<?php if(!$item['icon']){echo ' no-icon';} ?>">
                                <?php if($item['icon']): ?>
                                <div class="advantages-item__icon">
                                    <img src="<?= $item['icon']; ?>" alt="advantages" loading="lazy">
                                </div>
                                <?php endif; ?>
                                <div class="advantages-item__title"><?= $item['title']; ?></div>
                            </div>
                            <div class="advantages-item__col"><?= $item['col24']; ?></div>
                            <div class="advantages-item__col"><?= $item['col36']; ?></div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="advantages-row advantages-row--mob">
                        <?php foreach ($advantages as $item): ?>
                        <div class="advantages-item">
                            <div class="advantages-item__col<?php if(!$item['icon']){echo ' no-icon';} ?>">
                                <?php if($item['icon']): ?>
                                <div class="advantages-item__icon">
                                    <img src="<?= $item['icon']; ?>" alt="advantages" loading="lazy">
                                </div>
                                <?php endif; ?>
                                <div class="advantages-item__title"><?= $item['title']; ?></div>
                            </div>
                            <div class="advantages-item__col"><?= $item['col36']; ?></div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="advantages-desc">
                    <p><b>Дорогие клиенты!</b></p>
                    <p>Чтобы гарантийное обслуживание Вашего ПК проходило быстро и без лишних сложностей, пожалуйста, сохраняйте все комплектующие, которые были предоставлены при сборке: крепления, дополнительные провода, инструкции и другие комплектующие. Эти элементы могут понадобиться для диагностики и ремонта в рамках гарантийного обслуживания</p>
                    <p>Мы ценим Ваше внимание к этим деталям - это помогает нам оперативно решать любые вопросы и поддерживать Ваше устройство в идеальном состоянии</p>
                    <p>Спасибо за понимание!</p>
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
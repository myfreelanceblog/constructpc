<?php include 'header.php'; ?>

<?php
$config = [
    [
        'icon' => 'c8.png',
        'name' => 'КОРПУС',
        'value' => 'ARDOR GAMING Crystal CC2 чёрный',
        'options' => [
            ['title' => 'ARDOR GAMING Crystal CC2 чёрный', 'price' => 2000, 'img' => 'catalogpc.png', 'checked' => true]
        ]
    ],
    [
        'icon' => 'c2.png',
        'name' => 'ВИДЕОКАРТА',
        'value' => 'Palit GeForce RTX 5070 12 GB',
        'options' => [
            ['title' => 'Palit GeForce RTX 5070 12&nbsp;GB', 'price' => 50000, 'img' => 'config-item.png', 'checked' => true],
            ['title' => 'Palit GeForce RTX 5060 12&nbsp;GB', 'price' => 33000, 'img' => 'config-item.png']
        ]
    ],
    [
        'icon' => 'c1.png',
        'name' => 'ПРОЦЕССОР',
        'value' => 'Intel i7 13700KF',
        'options' => [
            ['title' => 'Intel i7 13700KF', 'price' => 13000, 'img' => 'config-item.png', 'checked' => true]
        ]
    ],
    [
        'icon' => 'c3.png',
        'name' => 'МАТЕРИНСКАЯ ПЛАТА',
        'value' => 'B760 M DDR4',
        'options' => [
            ['title' => 'B760 M DDR4', 'price' => 5000, 'img' => 'config-item.png', 'checked' => true]
        ]
    ],
    [
        'icon' => 'c5.png',
        'name' => 'ОПЕРАТИВНАЯ ПАМЯТЬ',
        'value' => 'KINGSTON FURY Beast DDR4 64 GB 3200 МГц',
        'options' => [
            ['title' => 'KINGSTON FURY Beast DDR4 64 GB 3200 МГц', 'price' => 8000, 'img' => 'config-item.png', 'checked' => true]
        ]
    ],
    [
        'icon' => 'c4.png',
        'name' => 'ОХЛАЖДЕНИЕ',
        'value' => 'Valkirye LJLKSDAKJL 360',
        'options' => [
            ['title' => 'Valkirye LJLKSDAKJL 360', 'price' => 1500, 'img' => 'config-item.png', 'checked' => true]
        ]
    ],
    [
        'icon' => 'c6.png',
        'name' => 'SSD-НАКОПИТЕЛЬ',
        'value' => 'ADATA 64 GB',
        'options' => [
            ['title' => 'ADATA LEGEND 800&nbsp;GB', 'price' => 1000, 'img' => 'config-item.png'],
            ['title' => 'ADATA LEGEND 64&nbsp;GB', 'price' => 2000, 'img' => 'catalogpc.png', 'checked' => true],
            ['title' => 'ADATA LEGEND 100&nbsp;GB', 'price' => 3000, 'img' => 'config-item.png'],
            ['title' => 'ADATA LEGEND 200&nbsp;GB', 'price' => 4000, 'img' => 'config-item.png']
        ]
    ],
    [
        'icon' => 'c6.png',
        'name' => 'HDD-НАКОПИТЕЛЬ',
        'value' => 'Нет',
        'options' => [
            ['title' => 'Нет', 'price' => 0, 'img' => '', 'checked' => true],
            ['title' => '1 TB', 'price' => 5000, 'img' => 'config-item.png']
        ]
    ],
    [
        'icon' => 'c7.png',
        'name' => 'БЛОК ПИТАНИЯ',
        'value' => '1STPLAYER NGDP 600W',
        'options' => [
            ['title' => '1STPLAYER NGDP 600W', 'price' => 4500, 'img' => 'config-item.png', 'checked' => true]
        ]
    ],
    [
        'icon' => 'c8.png',
        'name' => 'ОПЕРАЦИОННАЯ СИСТЕМА',
        'value' => 'Windows 11',
        'options' => [
            ['title' => 'Windows&nbsp;10', 'price' => 3000, 'img' => '', 'checked' => false],
            ['title' => 'Windows&nbsp;11', 'price' => 5000, 'img' => '', 'checked' => true]
        ]
    ],
    [
        'icon' => 'c9.png',
        'name' => 'ФИРМЕННАЯ ГАРАНТИЯ',
        'value' => '2 года',
        'options' => [
            ['title' => '2 года', 'price' => 0, 'img' => '', 'checked' => true]
        ]
    ]
];

$totalPrice = 0;

foreach ($config as $item) {
    foreach ($item['options'] as $opt) {
        if (!empty($opt['checked'])) {
            $totalPrice += (int)$opt['price'];
            break;
        }
    }
}
?>
    <h1 class="hidden-title">Каталог</h1>
    <section class="card-section">
        <div class="card-top-wrap">
            <div class="container">
                <div class="card-top">
                    <div class="card-top__left">
                        <div class="card-top__sub">Игровой компьютер</div>
                        <div class="card-top__title">CONSTRUCT FLOW</div>
                    </div>
                    <div class="card-top__right">
                        <div class="card-result">
                            <div class="card-price">
                                <div class="card-price__title">Итого:</div>
                                <div class="card-price__numb"><span><?= number_format($totalPrice, 0, '', ' ') ?></span> рублей</div>
                            </div>
                            <button type="button" class="card-add" aria-label="Добавить в корзину">Добавить в корзину</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-wrapper">
            <div class="container">
                <div class="card">
                    <div class="card-gal">
                        <div class="gal-big">
                            <div class="gal-big__swiper swiper">
                                <div class="swiper-wrapper">
                                    <?php for($i = 0; $i < 4; $i++): ?>
                                    <div class="swiper-slide">
                                        <a href="img/catalogpc.png" class="gal-big__item" data-fancybox="gallery">
                                            <img src="img/catalogpc.png" alt="catalog" loading="lazy">
                                        </a>
                                    </div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                        <div class="gal-small">
                            <div class="gal-small__swiper swiper">
                                <div class="swiper-wrapper">
                                    <?php for($i = 0; $i < 4; $i++): ?>
                                    <div class="swiper-slide">
                                        <div class="gal-small__item">
                                            <img src="img/catalogpc.png" alt="catalog" loading="lazy">
                                        </div>
                                    </div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="config">
                        <div class="config__title">КОНФИГУРАЦИЯ</div>
                        <div class="config-box">

                            <?php foreach ($config as $item): ?>

                            <?php
                            // находим активную checked опцию
                            $activeOpt = null;
                            foreach ($item['options'] as $o) {
                                if (!empty($o['checked'])) {
                                    $activeOpt = $o;
                                    break;
                                }
                            }
                            if ($activeOpt === null) {
                                $activeOpt = $item['options'][array_key_first($item['options'])];
                            }

                            $basePrice = (int)$activeOpt['price']; // базовая цена для diff
                            ?>

                            <div class="config-item">
                                <div class="config-item__top">
                                    <div class="config-item__title">
                                        <div class="config-item__icon">
                                            <img src="img/<?= $item['icon'] ?>" alt="config" loading="lazy">
                                        </div>
                                        <div class="config-item__name"><?= $item['name'] ?></div>
                                    </div>
                                    <div class="config-item__value">
                                        <span><?= $activeOpt['title'] ?></span>
                                        <svg width="15" height="9"><use href="img/sprite.svg<?= $dev ?>#down"></use></svg>
                                    </div>
                                </div>

                                <div class="config-item__bottom">
                                    <div class="config-choice">
                                        <div class="config-choice__img<?php if(!$activeOpt['img']){echo ' empty';} ?>">
                                            <img src="img/<?php echo ($activeOpt['img']) ? $activeOpt['img'] : 'config-empty.png'; ?>" alt="config" loading="lazy">
                                        </div>

                                        <div class="config-options">
                                            <?php foreach ($item['options'] as $i => $opt): ?>
                                                <?php
                                                // серверный расчёт diff
                                                $optPrice = (int)$opt['price'];
                                                $diff = $optPrice - $basePrice;

                                                if ($diff === 0) {
                                                    $diffText = '0';
                                                } elseif ($diff > 0) {
                                                    $diffText = '+' . $diff;
                                                } else {
                                                    $diffText = (string)$diff; // уже с минусом
                                                }
                                                
                                                $img = $opt['img'];
                                                ?>

                                                <label class="config-options__item">
                                                    <input 
                                                        type="radio"
                                                        name="<?= strtolower($item['name']) ?>"
                                                        value="<?= $i ?>"
                                                        data-img="<?php echo ($img) ? 'img/'.$img : ''; ?>"
                                                        data-price="<?= $opt['price'] ?>"
                                                        <?= !empty($opt['checked']) ? 'checked' : '' ?>
                                                    >

                                                    <div class="config-options__title">
                                                        <span><?= $opt['title'] ?></span>
                                                    </div>

                                                    <div class="config-options__difference">
                                                        <span><?= $diffText ?></span> ₽
                                                    </div>
                                                </label>

                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <?php endforeach; ?>


                        </div>
                    </div>

                </div>
                <div class="card-mob">
                    <div class="card-result">
                        <div class="card-price">
                            <div class="card-price__title">Итого:</div>
                            <div class="card-price__numb"><span><?= number_format($totalPrice, 0, '', ' ') ?></span> рублей</div>
                        </div>
                        <button type="button" class="card-add" aria-label="Добавить в корзину">Добавить в корзину</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="performance-section">
        <div class="container">
            <div class="performance">
                <div class="performance__top">
                    <h2 class="performance__title">ПРОИЗВОДИТЕЛЬНОСТЬ</h2>
                    <div class="performance__sub">УЛЬТРА-НАСТРОЙКИ</div>
                </div>
                
                <div class="performance-slider pc-slider">
                    <div class="performance__swiper swiper">
                        <div class="swiper-wrapper">
                            <?php for($i = 0; $i < 3; $i++): ?>
                            <div class="swiper-slide">
                                <a href="img/performance.jpg" class="performance__item" data-fancybox="performance">
                                    <picture>
                                        <source srcset="img/performance-mob.jpg" media="(max-width:768px)">
                                        <img src="img/performance.jpg" alt="performance" loading="lazy">
                                    </picture>
                                </a>
                            </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                    <button class="nav-btn nav-prev performance-prev" type="button" aria-label="Предыдущий слайд"><svg width="58" height="58"><use href="img/sprite.svg<?php echo $dev; ?>#slider-nav"></use></svg></button>
                    <button class="nav-btn nav-next performance-next" type="button" aria-label="Предыдущий слайд"><svg width="58" height="58"><use href="img/sprite.svg<?php echo $dev; ?>#slider-nav"></use></svg></button>
                </div>
            </div>
        </div>
    </section>

    <section class="best-section anim-items">
        <div class="container">
            <div class="best">
                <div class="best__content">
                    <div class="best__title">ЛУЧШИЙ ВАРИАНТ ДЛЯ HD-ГЕЙМИНГА!</div>
                    <div class="best__desc">CONSTRUCT FLOW создан для знакомства не только с самыми интересными новинками, но и динамичными соревновательными играми. Вы можете быть уверены, что получите только лучшие впечателения от геймплея с детализированным плавныи изображением</div>
                </div>
                <div class="best__img">
                    <img src="img/best.png" alt="best" loading="lazy">
                </div>
            </div>
        </div>
    </section>
    
    <?php
    $priority = [
        [
            'title'  => 'Фирменная <br>гарантия',
            'text'   => 'Гарантия 1 год на всю сборку с заменой любой детали на новую. Вы имеете дело с одной точкой контакта — с нами.'
        ],
        [
            'title'  => 'Глубокая <br>оптимизация',
            'text'   => 'Обновление BIOS с полной настройкой, установка драйверов и необходимого ПО, обязательное 4-часовое тестирование на брак и стабильность под 100% нагрузкой.'
        ],
        [
            'title'  => 'Надёжность <br>упаковки',
            'text'   => 'Безопасная упаковка для доставки по всей России.'
        ],
        [
            'title'  => 'Техподдержка <br>и консультация',
            'text'   => 'Мы ежедневно готовы помочь по любым вопросам.'
        ],
    ];
    ?>
    <section class="priority-section">
        <div class="container">
            <div class="priority">
                <h2 class="priority__title title">ПРЕВОСХОДСТВА:</h2>
                <div class="priority-slider pc-slider">
                    <div class="priority__swiper swiper">
                        <div class="swiper-wrapper">
                            <?php foreach($priority as $k => $item): ?>
                            <div class="swiper-slide">
                                <div class="priority-item">
                                    <div class="priority-item__img">
                                        <img src="img/pr<?php echo $k + 1; ?>.svg" alt="priority" loading="lazy">
                                    </div>
                                    <div class="priority-item__title"><?php echo $item['title']; ?></div>
                                    <div class="priority-item__desc"><?php echo $item['text']; ?></div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <button class="nav-btn nav-prev priority-prev" type="button" aria-label="Предыдущий слайд"><svg width="58" height="58"><use href="img/sprite.svg<?php echo $dev; ?>#slider-nav"></use></svg></button>
                    <button class="nav-btn nav-next priority-next" type="button" aria-label="Предыдущий слайд"><svg width="58" height="58"><use href="img/sprite.svg<?php echo $dev; ?>#slider-nav"></use></svg></button>
                </div>
            </div>
        </div>
    </section>
    
    <?php
    $clients = array(
        array(
            'title' => 'ГАРАНТИЯ <br>КОМПАНИИ',
            'img'   => 'g1.svg',
        ),
        array(
            'title' => 'УПАКОВКА <br>И ДОСТАВКА',
            'img'   => 'cl2.svg',
        ),
        array(
            'title' => 'ОПЛАТА <br>И ОФОРМЛЕНИЕ',
            'img'   => 'cl3.svg',
        ),
        array(
            'title' => 'ЭТАПЫ <br>ЗАКАЗА',
            'img'   => 'g3.svg',
        ),
    );
    ?>

    <section class="clients-section">
        <div class="container">
            <div class="clients">
                <h2 class="clients__title title">ДЛЯ КЛИЕНТА:</h2>
                <div class="clients-slider pc-slider">
                    <div class="clients__swiper swiper">
                        <div class="swiper-wrapper">
                            <?php foreach($clients as $k => $item): ?>
                            <div class="swiper-slide">
                                <div class="clients-item">
                                    <div class="clients-item__img">
                                        <img src="img/<?php echo $item['img']; ?>" alt="priority" loading="lazy">
                                    </div>
                                    <div class="clients-item__title"><?php echo $item['title']; ?></div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <button class="nav-btn nav-prev priority-prev" type="button" aria-label="Предыдущий слайд"><svg width="58" height="58"><use href="img/sprite.svg<?php echo $dev; ?>#slider-nav"></use></svg></button>
                    <button class="nav-btn nav-next priority-next" type="button" aria-label="Предыдущий слайд"><svg width="58" height="58"><use href="img/sprite.svg<?php echo $dev; ?>#slider-nav"></use></svg></button>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
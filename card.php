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
            ['title' => 'Palit GeForce RTX 5070 12 GB', 'price' => 50000, 'img' => 'config-item.png', 'checked' => true],
            ['title' => 'Palit GeForce RTX 5060 12 GB', 'price' => 33000, 'img' => 'config-item.png']
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
            ['title' => 'ADATA LEGEND 800 GB', 'price' => 1000, 'img' => 'config-item.png'],
            ['title' => 'ADATA LEGEND 64 GB', 'price' => 2000, 'img' => 'catalogpc.png', 'checked' => true],
            ['title' => 'ADATA LEGEND 100 GB', 'price' => 3000, 'img' => 'config-item.png'],
            ['title' => 'ADATA LEGEND 200 GB', 'price' => 4000, 'img' => 'config-item.png']
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
            ['title' => 'Windows 10', 'price' => 3000, 'img' => '', 'checked' => false],
            ['title' => 'Windows 11', 'price' => 5000, 'img' => '', 'checked' => true]
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
                                        <div class="gal-big__item">
                                            <img src="img/catalogpc.png" alt="catalog" loading="lazy">
                                        </div>
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
                                        <div class="config-choice__img">
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
                                                if (!$img) {
                                                    $img = 'config-empty.png';
                                                }
                                                ?>

                                                <label class="config-options__item">
                                                    <input 
                                                        type="radio"
                                                        name="<?= strtolower($item['name']) ?>"
                                                        value="<?= $i ?>"
                                                        data-img="img/<?= $img ?>"
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
            </div>
        </div>
        
    </section>

<?php include 'footer.php'; ?>
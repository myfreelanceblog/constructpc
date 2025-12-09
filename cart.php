<?php include 'header.php'; ?>

    <section class="cart-section">
        <div class="container">
            <div class="cart">
                <h1 class="cart__title title">КОРЗИНА</h1>
                <div class="cart-row">
                    <div class="cart-item">
                        <div class="cart-item__top">
                            <div class="cart-item__img">
                                <img src="img/catalogpc.png" alt="pc" loading="lazy">
                            </div>
                            <div class="cart-item__content">
                                <div class="cart-item__title">ИГРОВОЙ КОМПЬЮТЕР CONSTRUCT</div>
                                <div class="cart-item__row">
                                    <div class="cart-item__price">
                                        <span class="price-actual">89 000 Р</span>
                                        <span class="price-credit">8 999 Р/ мес</span>
                                    </div>
                                    <div class="quantity">
                                        <button class="quantity__btn quantity__minus" type="button" aria-label="Удалить товар">-</button>
                                        <input type="number" value="1" name="quantity" readonly>
                                        <button class="quantity__btn quantity__plus" type="button" aria-label="Добавить товар">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cart-char">
                            <button class="cart-char__title" type="button" aria-label="Характеристики" >
                                <span>Характеристики</span>
                                <svg width="13" height="7"><use href="img/sprite.svg<?php echo $dev; ?>#down-fill"></use></svg>
                            </button>
                            <div class="cart-char__content">
                                <div class="char">
                                <?php
                                $chars = [
                                    'КОРПУС' => 'ARDOR GAMING Crystal CC2 черный',
                                    'ВИДЕОКАРТА' => 'Palit GeForce RTX 5070 12 GB',
                                    'ПРОЦЕССОР' => 'Intel i7 13700KF',
                                    'МАТЕРИНСКАЯ ПЛАТА' => 'B760 M DDR4',
                                    'ОПЕРАТИВНАЯ ПАМЯТЬ' => 'KINGSTON FURY Beast DDR4 64 GB 3200 МГц',
                                    'ОХЛАЖДЕНИЕ' => 'Valkyrie LJLKSDAKJL 360',
                                    'SSD-НАКОПИТЕЛЬ' => 'ADATA 64 GB',
                                    'HDD-НАКОПИТЕЛЬ' => 'Нет',
                                    'БЛОК ПИТАНИЯ' => '1STPLAYER NGDP 600W',
                                    'ВЕНТИЛЯТОРЫ' => 'CHO TO TAM',
                                    'КАСТОМНЫЕ ПРОВОДА' => 'CHO TO TAM',
                                    'ОПЕРАЦИОННАЯ СИСТЕМА' => 'Windows 11',
                                    'ФИРМЕННАЯ ГАРАНТИЯ' => '2 года',
                                ];
                                ?>
                                <?php foreach ($chars as $label => $value): ?>
                                    <div class="char__item">
                                        <div class="char__label"><?= $label ?></div>
                                        <div class="char__value"><?= $value ?></div>
                                    </div>
                                <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <button class="cart-item__del" type="button" aria-label="Удалить товар">
                            <span>Удалить</span>
                            <svg width="21" height="20"><use href="img/sprite.svg<?php echo $dev; ?>#trash"></use></svg>
                        </button>
                    </div>
                </div>
                <div class="cart-result">
                    <div class="total">
                        <div class="total__title">ИТОГО:</div>
                        <div class="total__numb"><span>198 000</span> Р</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
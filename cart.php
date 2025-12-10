<?php include 'header.php'; ?>

    <section class="cart-section">
        <div class="container">
            <div class="cart">
                <div class="cart-start">
                    <h1 class="cart__title title">КОРЗИНА</h1>
                    <div class="cart-table">
                        <?php for($i = 0; $i < 2; $i++): ?>
                        <div class="cart-item">
                            <div class="cart-item__top">
                                <a href="javascript:void(0);" class="cart-item__img">
                                    <img src="img/catalogpc.png" alt="pc" loading="lazy">
                                </a>
                                <div class="cart-item__content">
                                    <a href="javascript:void(0);" class="cart-item__title">ИГРОВОЙ КОМПЬЮТЕР CONSTRUCT</a>
                                    <div class="cart-item__row">
                                        <div class="cart-item__price">
                                            <span class="price-actual">89 000 Р</span>
                                            <span class="price-credit">8 999 Р/ мес</span>
                                        </div>
                                        <div class="quantity-wrap">
                                            <div class="quantity">
                                                <button class="quantity__btn quantity__minus" type="button" aria-label="Удалить товар">-</button>
                                                <input type="text" value="1" name="quantity" readonly>
                                                <button class="quantity__btn quantity__plus" type="button" aria-label="Добавить товар">+</button>
                                            </div>
                                            <div class="quantity-wrap__title">кол-во</div>
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
                        <?php endfor; ?>
                    </div>
                    <div class="cart-result">
                        <div class="total">
                            <div class="total__title">ИТОГО:</div>
                            <div class="total__numb"><span>198 000</span> Р</div>
                        </div>
                        <div class="cart-btns">
                            <a href="javascript:void(0);" class="cart-btns__item">Продолжить покупки</a>
                            <button class="cart-btns__item order-btn" type="button" aria-label="Оформить заказ">Оформить заказ</button>
                        </div>
                    </div>
                </div>
                <div class="cart-end">
                    <div class="order">
                        <h2 class="title order__title">ОФОРМЛЕНИЕ ЗАКАЗА</h2>
                        <div class="order-box">
                            <div class="order-form">
                                <div class="order__sub">Контакты</div>
                                <div class="order-form__box">
                                    <div class="order-form__input">
                                        <input type="text" name="name" placeholder="ФИО">
                                    </div>
                                    <div class="order-form__input">
                                        <input type="tel" name="phone" placeholder="Телефон">
                                    </div>
                                    <div class="order-form__input">
                                        <input type="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="order-form__input">
                                        <textarea name="message" placeholder="Комментарий"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="order-delivery">
                                <div class="order__sub">Способ доставки</div>
                                <div class="order-delivery__box">
                                    <?php
                                    $delivery = [
                                        [
                                            'value' => 'Самовывоз',
                                            'title' => 'Самовывоз',
                                            'desc'  => "Забрать лично из офиса <br>г. Екатеринбург, ул. Шефская, 4А",
                                        ],
                                        [
                                            'value' => 'Доставка Екатеринбург',
                                            'title' => 'Доставка Екатеринбург',
                                            'desc'  => 'Курьером до двери',
                                        ],
                                        [
                                            'value' => 'Доставка по России',
                                            'title' => 'Доставка по России',
                                            'desc'  => 'Доставка в пункт ТК CДEK',
                                        ],
                                        [
                                            'value' => 'Доставка курьером по России',
                                            'title' => 'Доставка курьером по России',
                                            'desc'  => 'Доставка курьером ТК СДЕК',
                                        ],
                                    ];
                                    $i = 0;
                                    ?>
                                    <?php foreach ($delivery as $item): $i++; ?>
                                    <label class="order-delivery__item">
                                        <input type="radio" name="delivery" value="<?= $item['value'] ?>" <?php if($i == 1){echo ' checked';} ?>>
                                        <div class="order-delivery__content">
                                            <div class="order-delivery__title"><?= $item['title'] ?></div>
                                            <div class="order-delivery__desc"><?= $item['desc'] ?></div>
                                        </div>
                                    </label>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="method">
                            <div class="order__sub">Способы оплаты:</div>
                            <?php
                            $consult = array(
                                'НАЛИЧНЫМИ В ОФИСЕ',
                                'СИСТЕМА БЫСТРЫХ ПЛАТЕЖЕЙ (СБП)',
                                'БАНКОВСКИЙ ПЕРЕВОД <br>(ДЛЯ ФИЗ. ЛИЦ)',
                                'БАНКОВСКОЙ КАРТОЙ <br>(+2,5% К ИТОГОВОЙ СТОИМОСТИ ЗАКАЗА)',
                                'КРЕДИТ/РАССРОЧКА',
                                'ОПЛАТА ПО СЧЁТУ (ДЛЯ&nbsp;ЮРИДИЧЕСКИХ ЛИЦ И ИП)',
                            );

                            // количество колонок
                            $cols = 3;
                            $per_col = ceil(count($consult) / $cols);
                            $columns = array_chunk($consult, $per_col);
                            $i = 0;
                            ?>

                            <div class="consult-box method-pay">
                            <?php foreach ($consult as $item): $i++; ?>
                                <label class="consult-box__item<?php if($i == 1){echo ' active';} ?>">
                                    <input type="radio" name="pay" value="<?= $item ?>"<?php if($i == 1){echo ' checked';} ?>>
                                    <div class="consult-box__title"><?= $item ?></div>
                                    <div class="consult-box__img">
                                        <img src="img/b<?php echo $i; ?>.svg" alt="pay" loading="lazy">
                                    </div>
                                </label>
                            <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="order-btns">
                            <button class="order-btns__item order-back" type="button" aria-label="Вернуться в корзину">Назад</button>
                            <button class="order-btns__item order-submit" type="button" aria-label="Отправить заявку">Отправить заявку</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
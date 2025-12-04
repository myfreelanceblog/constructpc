<?php include 'header.php'; ?>
    
    <div class="top-wrapper stage-bg anim-items">
        <div class="container">
            <div class="top stage-top">
                <h1 class="top__title stage-top__title"><span>ЭТАПЫ ЗАКАЗА</span></h1>
            </div>
        </div>
    </div>

    <section class="consult-section">
        <div class="container">
            <div class="consult">
                <?php
                $config = [
                    [
                        'title'=> 'БЮДЖЕТ',
                        'desc' => 'Подберем конфигурацию <br>соответствующую вашим <br>финансовым ввозможностям'
                    ],
                    [
                        'title'=> 'ИГРЫ И ГРАФИКА',
                        'desc' => 'Учтем требования к графике, <br>чтобы Вы могли наслаждаться <br>современными проектами на <br>высоких настройках'
                    ],
                    [
                        'title'=> 'СПЕЦИФИЧЕСКИЕ <br>ЗАДАЧИ',
                        'desc' => 'Учтем потребности <br>в стриминге, 3D-моделировании, <br>видеомонтаже и других <br>задачах'
                    ],
                    [
                        'title'=> 'КОМПЛЕКТУЮЩИЕ',
                        'desc' => 'Учтем ваши предпочтения <br>по брендам и моделям <br>компонентов'
                    ],
                    [
                        'title'=> 'ДИЗАЙН <br>И КАСТОМИЗАЦИЯ',
                        'desc' => 'Поможем выбрать дизайн, <br>размеры и цвет корпуса, чтобы <br>компьютер гармонично <br>вписался в Ваш стиль <br>и интерьер, разберем Ваши <br>пожелания по дополнительной <br>кастомизации'
                    ],
                ];
                ?>
                <div class="consult-item">
                    <div class="consult-top">
                        <h2 class="title">КОНСУЛЬТАЦИЯ И <br>ПОДБОР КОНФИГУРАЦИИ</h2>
                        <div class="consult__numb"><span>1</span> ЭТАП</div>
                    </div>
                    <div class="consult-config">
                        <div class="config__swiper swiper">
                            <div class="swiper-wrapper">
                                
                                <?php $i = 0; foreach ($config as $item): $i++; ?>
                                <div class="swiper-slide">
                                    <div class="consult-config__item">
                                        <div class="consult-config__img"><img src="img/config<?php echo $i; ?>.svg" alt="config" loading="lazy"></div>
                                        <div class="consult-config__title"><?php echo $item['title']; ?></div>
                                        <div class="consult-config__desc"><?php echo $item['desc']; ?></div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                                
                            </div>
                        </div>
                        <button class="nav-btn nav-prev config-prev" type="button" aria-label="Предыдущий слайд"><svg width="58" height="58"><use href="img/sprite.svg<?php echo $dev; ?>#slider-nav"></use></svg></button>
                        <button class="nav-btn nav-next config-next" type="button" aria-label="Предыдущий слайд"><svg width="58" height="58"><use href="img/sprite.svg<?php echo $dev; ?>#slider-nav"></use></svg></button>
                    </div>
                </div>

                <div class="consult-item">
                    <div class="consult-top">
                        <h2 class="title">ОФОРМЛЕНИЕ ЗАКАЗА <br>И ОПЛАТА</h2>
                        <div class="consult__numb"><span>2</span> ЭТАП</div>
                    </div>
                    <div class="consult-order">
                        <div class="consult-order__desc">
                            <ul>
                                <li>Уточняем контактную информацию для формирования товарного чека CONSTRUCT PC с полной технической спецификацией </li>
                                <li>При заказе оплачивается полная стоимость всего компьютера</li>
                                <li>После оплаты вы получаете полный комплект документов: кассовый чек, товарный чек с технической спецификацией компьютера и гарантийный талон</li>
                            </ul>
                        </div>
                        <div class="consult-order__title">ДОСТУПНЫЕ СПОСОБЫ ОПЛАТЫ:</div>
                        <?php
                        $consult = array(
                            'НАЛИЧНЫМИ В ОФИСЕ',
                            'БАНКОВСКОЙ КАРТОЙ <br>(+2,5% К ИТОГОВОЙ СТОИМОСТИ ЗАКАЗА)',
                            'СИСТЕМА БЫСТРЫХ ПЛАТЕЖЕЙ (СБП)',
                            'КРЕДИТ/РАССРОЧКА',
                            'БАНКОВСКИЙ ПЕРЕВОД <br>(ДЛЯ ФИЗ. ЛИЦ)',
                            'ОПЛАТА ПО СЧЁТУ (ДЛЯ&nbsp;ЮРИДИЧЕСКИХ ЛИЦ И ИП)',
                        );

                        // количество колонок
                        $cols = 3;
                        $per_col = ceil(count($consult) / $cols);
                        $columns = array_chunk($consult, $per_col);
                        $i = 0;
                        ?>

                        <div class="consult-box">
                            <?php foreach ($columns as $col): ?>
                                <div class="consult-box__col">
                                    <?php foreach ($col as $item): $i++; ?>
                                        <div class="consult-box__item">
                                            <div class="consult-box__title"><?= $item ?></div>
                                            <div class="consult-box__img">
                                                <img src="img/b<?php echo $i; ?>.svg" alt="pay" loading="lazy">
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>

                    </div>
                </div>

                <?php
                $step = [
                    [
                        'title'=> 'Сборка компьютера',
                        'desc' => 'Аккуратная сборка с идеальным кабель-менеджментом <br>для эстетики и эффективного охлаждения'
                    ],
                    [
                        'title'=> 'Настройка системы',
                        'desc' => 'Обновление BIOS, настройка вентиляторов, заводской разгон оперативной памяти(XMP), оптимизация настроек BIOS'
                    ],
                    [
                        'title'=> 'Тестирование',
                        'desc' => 'Проводим стресс-тесты всех элементов под максимальной нагрузкой для проверки стабильности'
                    ],
                    [
                        'title'=> 'Установка ПО',
                        'desc' => 'Лицензионная Windows 10/11PRO с оригинальной активацией ключом. Все необходимые драйверы и программы'
                    ],
                    [
                        'title'=> 'Фотоотчет',
                        'desc' => 'Высылаем отчет о температурах и тестах. Отправляем фото готовой сборки'
                    ],
                ];
                ?>
                <div class="consult-item">
                    <div class="consult-top">
                        <h2 class="title">ПРОВЕРКА И СБОРКА <br>ФОТООТЧЕТ</h2>
                        <div class="consult__numb"><span>3</span> ЭТАП</div>
                    </div>
                    <div class="consult-order">
                        <div class="consult-order__desc consult-order__desc--max">
                            <ul>
                                <li>Как только комплектующие поступают к нам, мы высылаем Вам фотоотчет с составом заказа</li>
                                <li>Все компоненты проходят проверку на внешние и внутренние дефекты. В случае обнаружения проблем (царапины, потертости, вскрытые пломбы), мы оперативно производим замену</li>
                            </ul>
                        </div>
                    </div>
                    <div class="consult-step">
                        <?php $i = 0; foreach($step as $item): $i++; ?>
                        <div class="consult-step__item">
                            <img src="img/cstep<?php echo $i; ?>.jpg" alt="step" loading="lazy">
                            <div class="consult-step__numb"><?php echo $i; ?></div>
                            <div class="consult-step__bottom">
                                <div class="consult-step__title"><?php echo $item['title']; ?></div>
                                <div class="consult-step__desc"><?php echo $item['desc']; ?></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="consult-item">
                    <div class="consult-top">
                        <h2 class="title">УПАКОВКА <br>И ДОСТАВКА</h2>
                        <div class="consult__numb"><span>4</span> ЭТАП</div>
                    </div>
                    <div class="consult-pack">
                        <div class="consult-pack__desc">
                            <p>Надежно упаковывыем компьютер для транспортировки и отправляем службой доставки CDEK. Будьте уверены - Ваш компьютер дойдет в целости и сохранности</p>
                            <p>После отправки Вы получите трек-номер для отслеживания заказа и финальный отчет с&nbsp;деталями упаковки</p>
                            <p><b>По желанию можно докупить деревянную обрешетку и страховку CDEK</b></p>
                        </div>
                        <div class="consult-pack__img"><img src="img/delivery.svg" alt="delivery" loading="lazy"></div>
                    </div>
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
<?php include 'header.php'; ?>
    <?php if(false): ?>
    <div class="bread">
        <div class="container">
            <ul class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                    <a href="javascript:void(0);" itemprop="item">
                        <span itemprop="name">Главная</span>
                        <meta itemprop="position" content="1">
                    </a>
                </li>
                <li class="breadcrumb__single">Игровые и рабочие компьютеры</li>
            </ul>
        </div>
    </div>
    <?php endif; ?>
    <h1 class="hidden-title">Каталог</h1>
    <section class="catalog-section">
        <div class="container">
            <div class="catalog">
                <?php for($i = 0; $i < 3; $i++): ?>
                <div class="catalog-item">
                    <div class="catalog-top">
                        <div class="catalog-top__title">CONSTRUCT FLOW</div>
                        <div class="catalog-top__desc">Для качественного гейминга в Full HD и 2K - разрешении</div>
                    </div>
                    <div class="catalog-content">
                        <div class="catalog-content__left">
                            <div class="catalog-content__price">от 80 000 руб.</div>
                            <div class="catalog-content__img">
                                <img src="img/catalogpc.png" alt="catalog" loading="lazy">
                            </div>
                            <div class="color">
                                <div class="color__title">Доступные <br>цвета</div>
                                <div class="color-choice">
                                    <div class="color-choice__item"></div>
                                    <div class="color-choice__item dark"></div>
                                </div>
                            </div>
                        </div>
                        <div class="catalog-content__right">
                            <div class="catalog-config">
                                <div class="catalog-config__item">
                                    <div class="catalog-config__img">
                                        <img src="img/c1.png" alt="config" loading="lazy">
                                    </div>
                                    <div class="catalog-config__content">
                                        <div class="catalog-config__title">Процессор</div>
                                        <div class="catalog-config__options">
                                            <span>Intel Core i5/i7/i9</span>
                                            <span>AMD Ryzen 5/7/9</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="catalog-config__item">
                                    <div class="catalog-config__img">
                                        <img src="img/c2.png" alt="config" loading="lazy">
                                    </div>
                                    <div class="catalog-config__content">
                                        <div class="catalog-config__title">Видеокарта</div>
                                        <div class="catalog-config__options">
                                            <span>NVIDIA RTX 5060/5070/5080</span>
                                            <span>AMD Radeon 9060/9070/9080</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="catalog-config__item">
                                    <div class="catalog-config__img">
                                        <img src="img/c3.png" alt="config" loading="lazy">
                                    </div>
                                    <div class="catalog-config__content">
                                        <div class="catalog-config__title">Материнская плата</div>
                                        <div class="catalog-config__options">
                                            <span>В/Н чипсет</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="catalog-config__item">
                                    <div class="catalog-config__img">
                                        <img src="img/c4.png" alt="config" loading="lazy">
                                    </div>
                                    <div class="catalog-config__content">
                                        <div class="catalog-config__title">Охлаждение</div>
                                        <div class="catalog-config__options">
                                            <span>Башенное/СЖО</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="catalog-config__item">
                                    <div class="catalog-config__img">
                                        <img src="img/c5.png" alt="config" loading="lazy">
                                    </div>
                                    <div class="catalog-config__content">
                                        <div class="catalog-config__title">Оперативная память</div>
                                        <div class="catalog-config__options">
                                            <span>от 16 Гб</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="catalog-config__item">
                                    <div class="catalog-config__img">
                                        <img src="img/c6.png" alt="config" loading="lazy">
                                    </div>
                                    <div class="catalog-config__content">
                                        <div class="catalog-config__title">SSD накопитель</div>
                                        <div class="catalog-config__options">
                                            <span>от 512 Гб до 2 Тб</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="catalog-config__item">
                                    <div class="catalog-config__img">
                                        <img src="img/c7.png" alt="config" loading="lazy">
                                    </div>
                                    <div class="catalog-config__content">
                                        <div class="catalog-config__title">Блок питания</div>
                                        <div class="catalog-config__options">
                                            <span>от 600w</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="catalog-config__item">
                                    <div class="catalog-config__img">
                                        <img src="img/c8.png" alt="config" loading="lazy">
                                    </div>
                                    <div class="catalog-config__content">
                                        <div class="catalog-config__title">Корпус</div>
                                        <div class="catalog-config__options">
                                            <span>ARDOR Poddelka HU2</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="javascript:void(0);" class="catalog-btn">Подробнее</a>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>
    
    <?php
    $find_inner = true;
    ?>
    <?php include 'part/find.php'; ?>

<?php include 'footer.php'; ?>
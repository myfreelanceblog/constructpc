<?php $dev = '?v='.time(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<meta content="True" name="HandheldFriendly">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">

	<title>Construct PC</title>

    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32.png">
    <link rel="icon" type="image/png" sizes="48x48" href="img/favicon/favicon-48.png">
    <link rel="icon" type="image/png" sizes="120x120" href="img/favicon/favicon-120.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/favicon-apple.png">
    <link rel="icon" type="image/svg+xml" href="img/favicon/favicon.svg">

	<link rel="stylesheet" type="text/css" href="css/swiper-bundle.min.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>

    <header>
        <div class="container">
            <div class="header">
                <a href="javascript:void(0);" class="header__logo">
                    <picture>
                        <source srcset="img/logo-mob.svg" media="(max-width: 1068px)">
                        <img src="img/logo.svg" alt="logo" loading="lazy">
                    </picture>
                </a>
                <div class="header__content">
                    <nav>
                        <ul class="header__menu">
                            <li><a href="javascript:void(0);">ГЛАВНАЯ</a></li>
                            <li><a href="javascript:void(0);">КАТАЛОГ</a></li>
                            <li><a href="javascript:void(0);">УСЛУГИ</a></li>
                            <li><a href="javascript:void(0);">КЛИЕНТАМ</a></li>
                        </ul>
                    </nav>
                    <a href="javascript:void(0);" class="header-cart">
                        <svg width="24" height="24"><use href="img/sprite.svg<?php echo $dev; ?>#cart"></use></svg>
                    </a>
                </div>

                <button class="mob-m" type="button" aria-label="Menu">
                    <svg width="30" height="30"><use href="img/sprite.svg<?php echo $dev; ?>#menu"></use></svg>
                    <svg width="23" height="23"><use href="img/sprite.svg<?php echo $dev; ?>#close"></use></svg>
                </button>
            </div>
        </div>
    </header>

    <div class="mobile-menu-wrap">
        <div class="container">
            <div class="mobile-menu">
                <ul class="mobile-menu__nav">
                    <li><a href="javascript:void(0);">ГЛАВНАЯ</a></li>
                    <li><a href="javascript:void(0);">КАТАЛОГ</a></li>
                    <li><a href="javascript:void(0);">КОРЗИНА</a></li>
                    <li><a href="javascript:void(0);">Услуги</a></li>
                    <li><a href="javascript:void(0);">Клиентам</a></li>
                    <li><a href="javascript:void(0);">Этапы заказа</a></li>
                    <li><a href="javascript:void(0);">Гарантия</a></li>
                    <li><a href="javascript:void(0);">Доставка</a></li>
                    <li><a href="javascript:void(0);">Оплата</a></li>
                    <li><a href="javascript:void(0);">Контакты</a></li>
                </ul>
                <div class="social-btns">
                    <a href="javascript:void(0);" class="social-btns__item">
                        <svg width="51" height="51"><use href="img/sprite.svg<?php echo $dev; ?>#tg"></use></svg>
                    </a>
                    <a href="javascript:void(0);" class="social-btns__item">
                        <svg width="51" height="51"><use href="img/sprite.svg<?php echo $dev; ?>#wts"></use></svg>
                    </a>
                    <a href="javascript:void(0);" class="social-btns__item">
                        <svg width="51" height="51"><use href="img/sprite.svg<?php echo $dev; ?>#vk"></use></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
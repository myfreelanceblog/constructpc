<?php
$faq = [
    [
        'title'=> 'Куда обратиться в случае возникновения проблем?',
        'desc' => 'Аккуратная сборка с идеальным кабель-менеджментом <br>для эстетики и эффективного охлаждения'
    ],
    [
        'title'=> 'Как много времени займет гарантийный ремонт?',
        'desc' => 'Обновление BIOS, настройка вентиляторов, заводской разгон оперативной памяти(XMP), оптимизация настроек BIOS'
    ],
    [
        'title'=> 'Как отправить компьютер для гарантии/обслуживания?',
        'desc' => 'Проводим стресс-тесты всех элементов под максимальной нагрузкой для проверки стабильности'
    ],
    [
        'title'=> 'Что делать когда ваша гарантия закончилась, и есть неисправность?',
        'desc' => 'Лицензионная Windows 10/11PRO с оригинальной активацией ключом. Все необходимые драйверы и программы'
    ],
];
?>
<section class="faq-section anim-items">
    <div class="container">
        <div class="faq-content">
            <h2 class="faq-title">ЧАСТО ЗАДАВАЕМЫЕ ВОПРОСЫ:</h2>
            <div class="faq" itemscope itemtype="https://schema.org/FAQPage">
                <?php foreach($faq as $item): ?>
                <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="faq-item">
                    <div class="faq-item__title" itemprop="name">
                        <span><?php echo $item['title']; ?></span>
                        <div class="faq-item__icon"><svg width="15" height="9"><use href="img/sprite.svg<?php echo $dev; ?>#down"></use></svg></div>
                    </div>
                    <div class="faq-item__content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text"><?php echo $item['desc']; ?></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        
    </div>
</section>
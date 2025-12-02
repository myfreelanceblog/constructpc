<?php
$find_title = 'НЕ НАШЛИ <br>ПОДХОДЯЩИЙ ПК?';
$find_desc = 'Напишите нам в мессенджерах или отправьте заявку, чтобы мы могли перезвонить!';

if (isset($find_inner)) {
    $find_title = 'ОСТАЛИСЬ <br>ВОПРОСЫ?';
    $find_desc = 'Отправьте заявку, чтобы мы <br>могли с вами связаться!';
}
?>
<section class="find-section anim-active">
    <div class="container">
        <div class="find">
            <div class="find-content">
                <div class="find-content__top">
                    <div class="find__title"><?php echo $find_title; ?></div>
                    <div class="find__desc"><?php echo $find_desc; ?></div>
                </div>
                
                <?php if(!isset($find_inner)): ?>
                <div class="find-social">
                    <a href="javascript:void(0);" class="find-social__item" target="_blank">
                        <div class="find-social__icon"><svg width="51" height="51"><use href="img/sprite.svg<?php echo $dev; ?>#tg"></use></svg></div>
                        <div class="find-social__title">Telegram</div>
                    </a>
                    <a href="javascript:void(0);" class="find-social__item" target="_blank">
                        <div class="find-social__icon"><svg width="51" height="51"><use href="img/sprite.svg<?php echo $dev; ?>#wts"></use></svg></div>
                        <div class="find-social__title">WhatsApp</div>
                    </a>
                </div>
                <?php endif; ?>
            </div>
            <div class="find-form">
                <div class="input">
                    <input type="text" placeholder="Имя">
                </div>
                <div class="input">
                    <input type="tel" placeholder="Телефон">
                </div>
                <div class="agree">
                    <div class="agree__input"><span class="wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required"><span class="wpcf7-list-item first last"><label><input type="checkbox" name="checkbox-agree[]" value="yes" /><span class="wpcf7-list-item-label">yes</span></label></span></span></div>
                    <label class="agree__label" for="accept-agree">Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь с <a href="javascript:void(0);">политикой конфиденциальности</a></label>
                </div>
                <div class="input input--submit">
                    <input type="submit" value="Оставить заявку">
                </div>
            </div>
            
            <?php if(!isset($find_inner)): ?>
            <div class="find-social find-social--mob">
                <a href="javascript:void(0);" class="find-social__item" target="_blank">
                    <div class="find-social__icon"><svg width="51" height="51"><use href="img/sprite.svg<?php echo $dev; ?>#tg"></use></svg></div>
                    <div class="find-social__title">Telegram</div>
                </a>
                <a href="javascript:void(0);" class="find-social__item" target="_blank">
                    <div class="find-social__icon"><svg width="51" height="51"><use href="img/sprite.svg<?php echo $dev; ?>#wts"></use></svg></div>
                    <div class="find-social__title">WhatsApp</div>
                </a>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
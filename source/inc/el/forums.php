<div class="col-xs-6 col-xs-push-<?=$j%2==0?1:2?> col-sm-push-0 col-sm-3 forums__item">
    <a href="<?=$info['link'][$j]?>" class="forums__item-a">
        <div class="forums__item-img-wrap">
            <div class="forums__item-img"><span class="<?=$info['ico'][$j]?> ico-forums"></span></div>
            <div class="forums__item-text">
                <?=$info['name'][$j]?>
            </div>
        </div>
    </a>
</div>
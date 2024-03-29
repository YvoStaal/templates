<?php

/*
type: layout
name: Owl Carousel(Tarita)
description: Pictures
*/
?>

<div class="owl-carousel-style-v2" rel="carousel<?php print $params['id']; ?>"
     field="carousel<?php print $params['id']; ?>">

    <div class="owl-slider-v3">
        <?php if (is_array($data)): ?>
            <?php $rand = uniqid(); ?>
            <?php $count = -1;
            foreach ($data as $item): ?>
                <?php $count++; ?>
                <div class="item">
                    <img class="img-responsive" src="<?php print thumbnail($item['filename']); ?>" alt="">
                </div>
            <?php endforeach; ?>
        <?php else : ?>
        <?php endif; ?>
    </div>
</div>
<script type="text/javascript">
    jQuery(document).ready(function () {
        OwlCarousel.initOwlCarousel();
    });
</script>
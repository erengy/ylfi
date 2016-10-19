        <div class="row front-page-hero">
            <ul class="col-xs-6 reset">
                <?php
                if (!empty($fallacies)) {
                    for ($i = 0; $i < count($fallacies) / 2; $i++) {
                        echo '<li>' . get_fallacy_link($fallacies[$i], 'square-button') . '</li>';
                    }
                }
                ?>
            </ul>
            <div class="col-xs-12 middle hidden-xs">
                <img src="<?php echo $base_uri; ?>/assets/images/hero.svg" alt="" />
            </div>
            <ul class="col-xs-6 reset">
                <?php
                if (!empty($fallacies)) {
                    for ($i = count($fallacies) / 2; $i < count($fallacies); $i++) {
                        echo '<li>' . get_fallacy_link($fallacies[$i], 'square-button') . '</li>';
                    }
                }
                ?>
            </ul>
        </div>

        <article class="front-page-hero-article">
        </article>

        <p class="text-center waits-for-hero">Mantık hataları akıl yürütme sürecimizdeki kusurlardan kaynaklanır ve gerek politikacılar gerekse de medya tarafından insanları yanıltmak için sıklıkla kullanılır. Uyanık olun!</p>
        <div class="text-center">
            <div class="fb-like" data-href="<?php echo $base_uri; ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
        </div>

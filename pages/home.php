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

        <p class="text-center waits-for-hero">A logical fallacy is a flaw in reasoning. Logical fallacies are like tricks or illusions of thought, and they&#039;re often very sneakily used by politicians and the media to fool people. Don&#039;t be fooled! This website has been designed to help you identify and call out dodgy logic wherever it may raise its ugly, incoherent&nbsp;head. Rollover the icons above and click for examples. If you see someone committing a fallacy, link them to it e.g. yourlogicalfallacyis.com/strawman</p>
        <div class="text-center">
            <div class="fb-like" data-href="<?php echo $base_uri; ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
        </div>
    </div> <!-- .container -->


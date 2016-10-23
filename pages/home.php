        <div class="row front-page-hero">
            <ul class="col-xs-6 reset">
                <?php
                $fallacies = $data->getFallacies();
                $fallacies = array_slice($fallacies, 0, count($fallacies) / 2);
                foreach ($fallacies as $slug => $fallacy) {
                    echo '<li>' . get_fallacy_link($fallacy, $slug, 'square-button') . '</li>';
                }
                ?>
            </ul>
            <div class="col-xs-12 middle hidden-xs">
                <img src="<?php echo $baseURI; ?>/assets/images/hero.svg" alt="" />
            </div>
            <ul class="col-xs-6 reset">
                <?php
                $fallacies = $data->getFallacies();
                $fallacies = array_slice($fallacies, count($fallacies) / 2);
                foreach ($fallacies as $slug => $fallacy) {
                    echo '<li>' . get_fallacy_link($fallacy, $slug, 'square-button') . '</li>';
                }
                ?>
            </ul>
        </div>

        <article class="front-page-hero-article">
            <h2><?php echo $data->getFallacies()['korkuluk']['title'] ?></h2>
            <p><?php echo $data->getFallacies()['korkuluk']['head'] ?></p>
            <hr>
        </article>

        <p class="text-center waits-for-hero"><?php echo $data->getPageDescription(); ?></p>
        <div class="text-center">
            <p>Başkalarını da uyandırın!</p>
            <?php require 'social.php'; ?>
        </div>

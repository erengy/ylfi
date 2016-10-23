        <!--detailed-template-->
        <article class="fallacy-detailed">
            <header>
                <span class="square-button" style="font-size:2em">
                    <i class="icon-<?php echo $data->getSlug(); ?>"></i>
                </span>
                <span class="prev"><i class="icon-prev" title="Önceki"></i></span>
                <span class="next"><i class="icon-next" title="Sonraki"></i></span>
            </header>
            <div class="body">
                <h1><?php echo $data->getPageData()['title']; ?></h1>
                <h2><?php echo $data->getPageData()['head']; ?></h2>
                <div class="description"><?php echo $data->getPageData()['description']; ?></div>
                <div class="example"><h3>Örnekler</h3><?php echo $data->getPageData()['example']; ?></div>
                <div class="share">Bu yanılgıyı Facebook'ta paylaşın!</div>
                <div class="fb-button"><!-- fb like button --></div>
            </div>
        </article>
        <!--detailed-template-->

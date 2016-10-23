<ul id="social">
    <li class="fb">
        <div class="fb-like" data-href="<?php echo $data->getPageUrl(); ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
    </li>
    <li class="tw">
        <a class="twitter-share-button" href="https://twitter.com/share" data-url="<?php echo $data->getPageUrl(); ?>" data-text="<?php echo htmlspecialchars($data->getPageTitle()); ?>"></a>
    </li>
    <li class="gp">
        <div class="g-plusone" data-size="medium" data-href="<?php echo $data->getPageUrl(); ?>"></div>
    </li>
</ul>

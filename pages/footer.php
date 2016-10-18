    <footer id="footer">
        <div class="container">
            <ul class="row reset">
                <li class="col-sm-4">
                    <h4>
                        <a href="<?php echo $base_uri; ?>/faq">
                            <span class="image"><img src="<?php echo $base_uri; ?>/assets/images/envelope.svg" alt="" /></span>
                            contact us
                        </a>
                    </h4>
                    <p>Please read the <a href="<?php echo $base_uri; ?>/faq">FAQs</a> before <br /> sending us an <a href="mailto:jesse@yourlogicalfallacyis.com">email</a>.</p>
                </li>
                <li class="col-sm-4">
                    <h4>
                        <a href="<?php echo $base_uri; ?>/poster">
                            <span class="image"><img src="<?php echo $base_uri; ?>/assets/images/poster.png" alt="" /></span>
                            want a free poster?
                        </a>
                    </h4>
                    <p>Download a free pdf version <br /> or get a nice printed one</p>
                </li>
                <li class="col-sm-4">
                    <h4>
                        <a target='_blank' href="http://www.schoolofthought.org/">
                            <span class="image"><img src="<?php echo $base_uri; ?>/assets/images/schoolofthought_small.png" alt="" /></span>
                            watch the TEDx
                        </a>
                    </h4>
                    <p>What if we taught critical thinking in schools?</p>
                </li>    
            </ul>

            <p class="icons">
                <?php
                if (!empty($fallacies)) {
                    for ($i = 0; $i < count($fallacies) / 2; $i++) {
                        echo get_fallacy_link($fallacies[$i]);
                    }
                }
                ?>
                <br class="hidden-md hidden-lg" />
                <?php
                if (!empty($fallacies)) {
                    for ($i = count($fallacies) / 2; $i < count($fallacies); $i++) {
                        echo get_fallacy_link($fallacies[$i]);
                    }
                }
                ?>
            </p>

            <p class="credits">
                Created by
                <a href="//au.linkedin.com/in/jesserichardsonaustralia" target="_blank" title="Jesse">Jesse Richardson</a>,
                <a href="//espadav8.co.uk/" target="_blank" title="Andy">Andy Smith</a>, 
                <a href="//theprojectsomething.com" target="_blank" title="Som">Som Meaden</a>,
                and <a href="http://www.flipcreative.com.au/" target="_blank">Flip Creative</a>.
                <!-- With a little love from <a href="http://gaandder.com/" target="_blank" title="James">James Gill</a>. -->
                <br />
                <a href="http://creativecommons.org/licenses/by-nc/3.0/" title="Attribution-NonCommercial 3.0 Unported (CC BY-NC 3.0)" target="_blank">
                    <span class="cc"></span> <span class="by"></span> <span class="nc"></span>
                </a> 
                Website content published under a creative commons attribution and noncommercial license 2016.
            </p>

            <ul id="social">
                <li class="fb">
                    <div class="fb-like" data-href="<?php echo $base_uri; ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
                </li>
                <li class="tw">
                    <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo $base_uri; ?>" data-text="Don't be fooled!"></a>
                </li>
                <li class="gp">
                    <div class="g-plusone" data-size="medium" data-href="<?php echo $base_uri; ?>"></div>
                </li>
            </ul>

            <p class="language-help">Can&rsquo;t see your language? Help us to translate into your language: <a href="mailto:jesse@yourlogicalfallacyis.com">send us an email to register</a></p>
        </div>
    </footer>
</div> <!-- .wrap -->

<script>
    var fallacy_data = fallacy_data || {};
    fallacy_data.free_destinations = ["US"];
    fallacy_data.shipping_price = parseFloat("19.00");
</script>    
<script>
    var fallacyLocale = "ylfi/";
</script>

<script async src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" id="jquery-script"></script>
<script async src="<?php echo $base_uri; ?>/assets/js/fallacy.js?15"></script>

<script src="https://apis.google.com/js/platform.js" async defer></script>

<script type='text/html' id='detailed-template'>
    <!--detailed-template-->
    <article class="fallacy-detailed">
        <header>
            <span class="square-button" style="font-size:2em">
                <i></i>
            </span>
            <span class="prev"><i class="icon-prev"></i></span>
            <span class="next"><i class="icon-next"></i></span>
        </header>
        <div class="body">
            <h1></h1>
            <h2></h2>
            <p><!-- description --></p>
            <p><!-- example --></p>
            <p>Want to share this fallacy on Facebook? Here&#039;s a button for you:</p>
            <p><!-- fb like button --></p>
        </div>
    </article>
    <!--detailed-template-->
</script>

<script>
    window.twttr = (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0],
        t = window.twttr || {};
        if (d.getElementById(id)) return t;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://platform.twitter.com/widgets.js";
        fjs.parentNode.insertBefore(js, fjs);

        t._e = [];
        t.ready = function(f) {
            t._e.push(f);
        };

        return t;
    }(document, "script", "twitter-wjs"));
</script>
</body>
</html>

    </div> <!-- .container -->

    <footer id="footer">
        <div class="container">
            <ul class="row reset">
                <li class="col-sm-4">
                    <h4>
                        <a href="<?php echo $base_uri; ?>/faq">
                            <span class="image"><img src="<?php echo $base_uri; ?>/assets/images/envelope.svg" alt="" /></span>
                            bize ulaşın
                        </a>
                    </h4>
                    <p>Bize <a href="mailto:bilgi@ozgurdusuncehareketi.org">e-posta</a> göndermeden önce lütfen <a href="<?php echo $base_uri; ?>/faq">SSS</a> bölümünü inceleyin.</p>
                </li>
                <li class="col-sm-4">
                    <h4>
                        <a href="<?php echo $base_uri; ?>/poster">
                            <span class="image"><img src="<?php echo $base_uri; ?>/assets/images/poster.png" alt="" /></span>
                            poster isteyen?
                        </a>
                    </h4>
                    <p>PDF halini ücretsiz olarak indirin ve duvarınıza asın.</p>
                </li>
                <li class="col-sm-4">
                    <h4>
                        <a target='_blank' href="http://www.schoolofthought.org/">
                            <span class="image"><img src="<?php echo $base_uri; ?>/assets/images/schoolofthought_small.png" alt="" /></span>
                            TEDx konuşması
                        </a>
                    </h4>
                    <p>Eleştirel düşünceyi okullarda öğretsek nasıl olurdu?</p>
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
                Oluşturan
                <a href="http://au.linkedin.com/in/jesserichardsonaustralia" target="_blank" title="Jesse">Jesse Richardson</a>,
                <a href="http://espadav8.co.uk/" target="_blank" title="Andy">Andy Smith</a> ve
                <a href="http://theprojectsomething.com" target="_blank" title="Som">Som Meaden</a>.
                <a href="http://creativecommons.org/licenses/by-nc/3.0/" title="Attribution-NonCommercial 3.0 Unported (CC BY-NC 3.0)" target="_blank"><img src="https://s3.amazonaws.com/yourlogicalfallacyis/assets/cc.png" border="0" /></a>
                Türkçeleştiren: <a href="http://ozgurdusuncehareketi.org" target="_blank" title="ODH">Özgür Düşünce Hareketi</a> &
                Ivır zıvırı halleden: <a href="https://gurkan.in" target="_blank" title="Gürkan">Gürkan</a>
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
<?php require 'fallacy.php'; ?>
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

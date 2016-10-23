    </div> <!-- .container -->

    <footer id="footer">
        <div class="container">
            <ul class="row reset">
                <li class="col-sm-4">
                    <h4>
                        <a href="<?php echo $baseURI; ?>/sss">
                            <span class="image"><img src="<?php echo $baseURI; ?>/assets/images/envelope.svg" alt="" /></span>
                            bize ulaşın
                        </a>
                    </h4>
                    <p>Bize <a href="mailto:bilgi@mantikhatalari.com">e-posta</a> göndermeden önce lütfen <a href="<?php echo $baseURI; ?>/sss" title="Sık Sorulan Sorular">SSS</a> bölümünü inceleyin.</p>
                </li>
                <li class="col-sm-4">
                    <h4>
                        <a href="http://arsiv.ozgurdusuncehareketi.org" target="_blank">
                            <span class="image"><img src="<?php echo $baseURI; ?>/assets/images/logo-argument-archive.png" alt="" /></span>
                            argüman arşivi
                        </a>
                    </h4>
                    <p>Sürekli karşılaştığımız bilim dışı iddialara bilimsel yanıtlar</p>
                </li>
                <li class="col-sm-4">
                    <h4>
                        <a href="https://yalansavar.org" target="_blank">
                            <span class="image"><img src="<?php echo $baseURI; ?>/assets/images/logo-yalansavar.png" alt="" /></span>
                            yalansavar
                        </a>
                    </h4>
                    <p>Karanlığa lanet okumaktansa, bir mum yakmak yeğdir.</p>
                </li>
            </ul>

            <p class="icons">
                <?php
                $fallacies = $data->getFallacies();
                $fallacies = array_slice($fallacies, 0, count($fallacies) / 2);
                foreach ($fallacies as $slug => $fallacy) {
                    echo get_fallacy_link($fallacy, $slug);
                }
                ?>
                <br class="hidden-md hidden-lg" />
                <?php
                $fallacies = $data->getFallacies();
                $fallacies = array_slice($fallacies, count($fallacies) / 2);
                foreach ($fallacies as $slug => $fallacy) {
                    echo get_fallacy_link($fallacy, $slug);
                }
                ?>
            </p>

            <p class="credits">
                Oluşturan:
                <a href="https://au.linkedin.com/in/jesserichardsonaustralia" target="_blank" title="Jesse">Jesse Richardson</a>,
                <a href="https://espadav8.co.uk" target="_blank" title="Andy">Andy Smith</a> ve
                <a href="http://theprojectsomething.com" target="_blank" title="Som">Som Meaden</a><br>
                Türkçeleştiren:
                <a href="http://ozgurdusuncehareketi.org" target="_blank" title="ODH">Özgür Düşünce Hareketi</a> ·
                Ivır zıvırı halleden:
                <a href="https://gurkan.in" target="_blank" title="Gürkan">Gürkan</a> ve
                <a href="http://erengy.com" target="_blank" title="Eren Okka">Eren</a><br>
                <a href="https://creativecommons.org/licenses/by-nc/4.0/deed.tr" class="license" title="Alıntı-Gayriticari 4.0 Uluslararası (CC BY-NC 4.0)" target="_blank"><i class="icon-cc"></i> <i class="icon-by"></i> <i class="icon-nc"></i></a>
            </p>
        </div>
    </footer>
</div> <!-- .wrap -->

<script async src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" id="jquery-script"></script>

<script>
    window.___gcfg = {
        lang: 'tr'
    };
</script>
<script async defer src="https://apis.google.com/js/platform.js"></script>

<script>
    var baseURI = '<?php echo $baseURI; ?>';
    var basePath = '<?php echo $basePath; ?>';
    var basePathFound = basePath.match(/^\/([^/]+)$/);
    if (basePathFound) {
        basePath = basePathFound[1] + '/';
    }
</script>
<script async src="<?php echo $baseURI; ?>/assets/js/fallacy.js?15"></script>

<script type="text/html" id="detailed-template">
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

<footer class="page-footer grey darken-2">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text"><a href="/"><b>Эльбрус - Инструктор</b></a></h5>
                <p class="grey-text text-lighten-4">
                    Инструктор по горным лыжам и сноуборду <br>
                    Экскурсии по живописным уголкам Кабардино-Балкарии<br>
                    Походы по Приэльбрусью.
                    Услуги гида, помощь с размещением.<br>
                    Такси Минводы - Приэльбрусье<br>
                    Контакты:
                    <a href="tel:+79280829701" class="phone">+7&nbsp;928&nbsp;082&nbsp;97&nbsp;01&nbsp;(Эди)</a>,
                    <a href="tel:+79280848238"
                       class="phone">+7&nbsp;928&nbsp;084&nbsp;82&nbsp;38&nbsp;(Светлана)</a><br>
                    WhatsUpp: <a href="https://api.whatsapp.com/send?phone=79280848238" class="phone">+7&nbsp;928&nbsp;084&nbsp;82&nbsp;38&nbsp;(Светлана)</a>
                    <br>
                    <a class="white-text" href="mailto:akhmatova-85@mail.ru" target="_blank">
                        Email: <b>akhmatova-85@mail.ru</b></a>
                    <br>
                    <a class="white-text" href="https://www.instagram.com/svetlana_ahmatova_chabdarova/" target="_blank">
                        Instagram: <b>svetlana_ahmatova_chabdarova</b>
                    </a>
                </p>


            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Услуги</h5>
                <ul>
                    <li><a class="white-text" href="/">Инструктор</a></li>
                    <li><a class="white-text" href="/taxi/">Такси</a></li>
                    <li><a class="white-text" href="/hotel/">Гостиница</a></li>
                    <li><a class="white-text" href="/prices/">Цены</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Экскурсии</h5>
                <ul>
                    <li><a class="white-text" href="/ehkskursiya/golubye-ozera/">Голубые Озера</a></li>
                    <li><a class="white-text" href="/ehkskursiya/">Приэльбрусье</a></li>
                    <li><a class="white-text" href="/ehkskursiya/chegemskie_vodopady/">Чегемские водопады</a></li>
                    <li><a class="white-text" href="/ehkskursiya/habazskie-vodopady/">Хабазские водопады</a></li>
                    <li><a class="white-text" href="/ehkskursiya/dzhyly-suu/">Джилы су</a></li>
                    <li><a class="white-text" href="/ehkskursiya/priehlbruse/">Эльбрус</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
        </div>
    </div>
</footer>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="/js/materialize.js"></script>
<script src="/slick/slick.min.js"></script>
<script type="text/javascript" src="/fancybox/jquery.easing-1.3.pack.js"></script>
<script type="text/javascript" src="/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="/fancybox/jquery.fancybox.pack.js"></script>
<script src="/js/masonry.pkgd.min.js"></script>
<script src="/js/ehkskursiya-slider.js"></script>
<script>
    $(document).ready(function() {

        $("a[rel=photo_group]").fancybox({
            'transitionIn'	:	'elastic',
            'transitionOut'	:	'elastic',
            'titlePosition' 	: 'over',
            'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
                return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
            }
        });


    });
</script>

</body>
</html>

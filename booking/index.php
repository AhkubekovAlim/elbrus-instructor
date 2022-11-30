<?
$_TITLE = 'Онлайн-бронирование инструктора по горным лыжам и сноуборду в Приэльбрусье';
require $_SERVER['DOCUMENT_ROOT'].'/header.php';
?>

    <div class="container">
        <div class="section">
            <h1><?= $_TITLE ?></h1>
        </div>
    </div>

    <div class="container">
        <div class="section">
            <div id="znmst-result"></div>
            <script src="https://bronirui-online.ru/widget/loader.js" type="text/javascript"></script>
            <script type="text/javascript">window.loader.init(4110, 'znmst-result', 'service', '/booking/');</script>
        </div>
    </div>

<? require $_SERVER['DOCUMENT_ROOT'].'/contacts.php'; ?>

    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h5 class="header col s12 light">Инстркутор по горным лыжам и сноуборду</h5>
                </div>
            </div>
        </div>
        <div class="parallax">
            <img src="/img/ski-woman.jpg" alt="Инструтор по горным лыжам"
                 title="Инструтор по горным лыжам">
        </div>
    </div>

<?
require $_SERVER['DOCUMENT_ROOT'].'/ehkskursiya/footer.php';
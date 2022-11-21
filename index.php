<?php
/**
 * Created by PhpStorm.
 * User: wind9
 * Date: 07.02.2018
 * Time: 0:41
 */
$_TITLE = 'Инструктор по горным лыжам в Приэльбрусье, цены занятий на сноуборде в Азау и Чегет';
require $_SERVER['DOCUMENT_ROOT'].'/header.php';

$month = date('m');

if($month > 4 && $month < 11) {
    require $_SERVER['DOCUMENT_ROOT'].'/tracking-info.php';
    require $_SERVER['DOCUMENT_ROOT'].'/instructor-info.php';
} else {
    require $_SERVER['DOCUMENT_ROOT'].'/instructor-info.php';
    require $_SERVER['DOCUMENT_ROOT'].'/tracking-info.php';
}
?>

    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h5 class="header col s12 light">Голубые озера</h5>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="/img/blue_lakes.jpg" alt="Голубые озера" title="Голубые озера"></div>
    </div>

   <? require $_SERVER['DOCUMENT_ROOT'].'/contacts.php'; ?>

    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h5 class="header col s12 light">Чегемские водопады</h5>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="/img/chegemskie_vodopady_desc.jpg" alt="Чегемские водопады"
                                   title="Чегемские водопады"></div>
    </div>



<?
require $_SERVER['DOCUMENT_ROOT'].'/footer.php';
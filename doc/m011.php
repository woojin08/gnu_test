<?php
include_once "../../../common.php";
$page_num = 1;
$page_title = 'CEO 인사말';
$sub_num = 1;
$sub_title = '회사소개';

include_once(G5_THEME_PATH . '/head.php');
?>
... 일반페이지임...
<?= $page_num ?><?= $sub_num ?>
<img src="../img/top_logo.png" alt="">

<style>
    nav {
        font-size: 40px;
    }

    nav li.on a {
        color: #f00;
    }
</style>

<script>
    var num = <?= $page_num ?>;
    $('nav li').eq(num).addClass('on').siblings().removeClass('on');
</script>
<?php
include_once(G5_THEME_PATH . '/tail.php');

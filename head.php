<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH . '/head.php');
    return;
}

if (G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH . '/shop.head.php');
    return;
}
include_once(G5_THEME_PATH . '/head.sub.php');
include_once(G5_LIB_PATH . '/latest.lib.php');
include_once(G5_LIB_PATH . '/outlogin.lib.php');
include_once(G5_LIB_PATH . '/poll.lib.php');
include_once(G5_LIB_PATH . '/visit.lib.php');
include_once(G5_LIB_PATH . '/connect.lib.php');
include_once(G5_LIB_PATH . '/popular.lib.php');
?>
<?php
if (defined('_INDEX_')) { // index에서만 실행
    include G5_BBS_PATH . '/newwin.inc.php'; // 팝업레이어
}
?>

<header>
    <h1>
        <a href="/">
            <img src="<?php echo G5_THEME_URL ?>/img/top_logo.png" alt="">
        </a>
    </h1>
    <div class="title" style="background:url(../img/main_m0<?= $page_num ?>.jpg); height:400px">
        <?= $page_num ?> / <?= $sub_title ?> / <?= $page_title ?>
    </div>
    <nav>
        <ul>
            <li><a href="/">home <?= $page_num ?></a></li>
            <li><a href="<?php echo G5_THEME_URL ?>/doc/m011.php">sub01</a></li>
            <li><a href="<?php echo G5_THEME_URL ?>/doc/m012.php">sub02</a></li>
            <li><a href="<?php echo G5_THEME_URL ?>/doc/m013.php">sub03</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=qa">Q &amp; A Board</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a></li>
            <li><a href="<?php echo G5_URL ?>/adm">관리자</a></li>
        </ul>
    </nav>

</header>
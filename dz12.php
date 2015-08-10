<?php
error_reporting(E_ERROR|E_WARNING|E_PARSE|E_NOTICE);
ini_set('display_errors', 1);
header("Content-Type: text/html; charset=utf-8");

$smarty_root = __DIR__."/smarty/";
$project_root=__DIR__;
require_once $project_root."/dbsimple/config.php";
require_once "DbSimple/Generic.php";
require $smarty_root.'libs/Smarty.class.php';
require $project_root.'/functions.php';

$smarty = new Smarty;
$smarty->compile_check=true;
$smarty->debugging=false;

$smarty->template_dir=$smarty_root.'/templates/';
$smarty->compile_dir=$smarty_root.'/templates_c/';
// $smarty->cache_dir = $smarty_root . 'cache';
// $smarty->config_dir = $smarty_root . 'configs';

if (file_exists('user.txt')) {
    $loginConfig = unserialize( file_get_contents('user.txt') );
} else {
    header('Location: install.php');
}
$db = DbSimple_Generic::connect( "mysql://{$loginConfig['username']}:{$loginConfig['password']}@{$loginConfig['host']}/{$loginConfig['db']}" );
// Устанавливаем обработчик ошибок.
$db->setErrorHandler('databaseErrorHandler');
$db->query("SET NAMES UTF8");

require_once('classes.php');


// delete advert
if (isset($_GET['del'])) {
    Ads::deleteAdvert();
}


// if form was submitted
if (isset($_POST['formSubmit'])) {
    // update advert
    if (isset($_GET['id'])) {
        $post = $_POST;
        $post['id'] = (int) $_GET['id'];
        $ad=new Ads($post);
        $ad->save();
    // add advert
    } else {
        $ad=new Ads($_POST);
        $ad->save();
    }
}

// insert advert to form
if ( isset($_GET['id']) ) {
    AdsStore::advertForForm();
} else {
    $title='';
    $price='';
    $name='';
    $description='';
    $phone='';
    $email='';
    $allow_mails='';
    $private='';
    $city='';
    $metro='';
    $category_id='';

    $smarty->assign('private', $private);
    $smarty->assign('name', $name);
    $smarty->assign('email', $email);
    $smarty->assign('allow_mails', $allow_mails);
    $smarty->assign('phone', $phone);
    $smarty->assign('city', $city);
    $smarty->assign('metro', $metro);
    $smarty->assign('title', $title);
    $smarty->assign('description', $description);
    $smarty->assign('price', $price);
    $smarty->assign('category_id', $category_id);
}

AdsStore::instance()->getAllAdsFromDb()->prepareForOut()->getSelects()->display();

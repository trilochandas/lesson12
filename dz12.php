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

$db = DbSimple_Generic::connect('mysql://test:123@localhost/test');
// Устанавливаем обработчик ошибок.
$db->setErrorHandler('databaseErrorHandler');
$db->query("SET NAMES UTF8");

class Ads{
    private $id;    
    private $title;
    private $description;
    private $name;
    private $email;
    private $phone;
    // private $city;
    // private $metro;
    // private $category_id;
    private $price;
    private $allow_mails;
    private $type;
    
    public function __construct($ad) {
        if(isset($ad['id'])){
            $this->id=$ad['id'];
        }
        $this->name=$ad['name'];
        $this->type=$ad['type'];
        $this->email=$ad['email'];
        if ( !isset($ad['allow_mails']) ) {
            $this->allow_mails = 0;
        } else {
            $this->allow_mails = $ad['allow_mails'];
        }
        $this->phone=$ad['phone'];
        // $this->city=$ad['city'];
        // $this->metro=$ad['metro'];
        // $this->category_id=$ad['category_id'];
        $this->title=$ad['title'];
        $this->description=$ad['description'];
        $this->price=$ad['price'];
    }

    public function getId() {
        return $this->id;
    }
    public function getName() {
        return $this->name;
    }
    public function getDesc() {
        return $this->description;
    }
    public function getTitle() {
        return $this->title;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getPhone() {
        return $this->phone;
    }
    public function getPrice() {
        return $this->price;
    }
    
    public function save() {
        global $db;
        $vars = get_object_vars($this);
        var_dump($vars);
        $db->query('REPLACE INTO adverts(?#) VALUES(?a)',  array_keys($vars),  array_values($vars));
    }
    
    
}

class AdsStore{
    private static $instance=NULL;
    private $ads=array();
    
    public static function instance() {
        if(self::$instance == NULL){
            self::$instance = new AdsStore();
        }
        return self::$instance;
    }
    public function addAds(Ads $ad) {
        if(!($this instanceof AdsStore)){
            die('Нельзя использовать этот метод в конструкторе классов');
        }
        $this->ads[$ad->getId()]=$ad;
    }
    public function getAllAdsFromDb() {
        global $db;
        $all = $db->select('select * from adverts');
        foreach ($all as $value){
            $ad = new Ads($value);
            self::addAds($ad); //помещаем объекты в хранилище
        }
        return self::$instance;
    }
    public function prepareForOut() {
        global $smarty;
        $row='';
        foreach ($this->ads as $value) {
            $smarty->assign('ad',$value);
            $row.=$smarty->fetch('table_row.tpl.html');
        }
        $smarty->assign('ads_rows',$row);
        return self::$instance;
    }
    public function display() {
        global $smarty;
        $smarty->display('oop.tpl');
    }

    public static function deleteAdvert() {
        global $db;
        $id = (int) $_GET['del'];
        $db->query('DELETE FROM adverts WHERE id=?', $id);
    }
}

if(isset($_POST['name'])&&isset($_POST['description'])){
    $ad=new Ads($_POST);
    $ad->save();
}

// delete advert
if (isset($_GET['del'])) {
    AdsStore::deleteAdvert();
}



AdsStore::instance()->getAllAdsFromDb()->prepareForOut()->display();

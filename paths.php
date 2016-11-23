<?php
  //SITE ROOT
  $path = $_SERVER['DOCUMENT_ROOT'] . '/Gamebets/';
  define('SITE_ROOT', $path);

  //SITE PATH
  define('SITE_PATH', 'http://'.$_SERVER['HTTP_HOST'].'/Gamebets/');

  //LOG
  define('LOG_DIR', SITE_ROOT . 'classes/Log.class.singleton.php');
  define('GENERAL_LOG_DIR', $path . 'log/general/Site_General_errors.log');
  define('PRODUCTS_LOG_DIR', $path . 'log/products/Site_Products_errors.log');

  //PRODUCTION
  define('PRODUCTION', false);

  //MODEL
  define('MODEL_PATH', SITE_ROOT . 'model/');

  //RESOURCES
  define('RESOURCES_PATH', SITE_ROOT . 'resources/');

  //MEDIA
  define('MEDIA_PATH', SITE_ROOT . 'media/');

  //UTILS
  define('UTILS_PATH', SITE_ROOT . 'utils/');

  //VIEW
  define('CSS_PATH', SITE_PATH . 'view/css/');
  define('JS_PATH', SITE_PATH . 'view/js/');
  define('INC_PATH', SITE_PATH . 'view/inc/');
  define('IMAGES_PATH', SITE_PATH . 'view/images/');

  //MODULES
  define('MODULES_PATH', SITE_ROOT . 'module/');

  //MODULE PRODUCTS
  define('CONTROLLER_USERS_PATH', MODULES_PATH . 'users/controller/');
  define('MODEL_USERS_PATH', MODULES_PATH . 'users/model/model/');
  define('BLL_USERS_PATH', MODULES_PATH . 'users/model/bll/');
  define('DAO_USERS_PATH', MODULES_PATH . 'users/model/bll/');
  define('UTILS_USERS_PATH', MODULES_PATH . 'users/utils/');
  define('JS_USERS_PATH', SITE_PATH . 'module/users/view/js/');
  define('CSS_USERS_PATH', SITE_PATH . 'module/users/view/css/');

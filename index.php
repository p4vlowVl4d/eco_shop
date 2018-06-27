<?php

//format: dd-mm-yyyy
// $string = '21-11-2015';
//
// M 12, D 21 , Y 2015
//
// $pattern = '/([0-9]{2})-([0-9]{2})-([0-9]{4})/';
// $replacement = 'Month: $2, Day:  $1, Year: $3';
//
// echo preg_replace($pattern, $replacement, $string);
//
// die;


//front controller

 // 1.Общие настройки
  mb_internal_encoding("UTF-8");
  ini_set('display_errors', 1);
  error_reporting(E_ALL);
  session_start();
  // 2.Подключение файлов системы
  define('ROOT', dirname(__FILE__));
  require_once(ROOT.'/components/Autoload.php');
  // 3.Установка соединения с БД


 // 4.Вызов Route
  $router = new Router();
  $router->run();
  // $session = new Session();
  // $session->write();

<?php
  /**
   *
   */
  class Router
  {
    private $routes;

    public function __construct()
    {
      $routesPath = ROOT.'/config/routes.php';
      $this->routes = include($routesPath);
    }
    //возвращает строку
    private function getUri()
    {
      if(!empty($_SERVER['REQUEST_URI'])){
        return trim($_SERVER['REQUEST_URI'], '/');
      }
    }
    public function run()
    {
      //Получить строку запроса
      $uri = $this->getUri();
      //Проверить наличие такого запроса в routes.php
      foreach($this->routes as $uriPattern => $path){
        //Проверка uriPattern и uri
        if(preg_match("%$uriPattern%",$uri)){

          // echo '<br> Где ищем (запрос, который набрал пользователь): '.$uri;
          // echo '<br> Что ищем (совпадение из правила): '.$uriPattern;
          // echo '<br> Кто обрабатывает: '.$path.'<br>';

          //Получаем внутренний путь из внешнего согласно правилу.
          $internalRoute = preg_replace("%$uriPattern%", $path, $uri);

          //Определить контроллер, action, параметры
          $segments = explode("/",$internalRoute);


          $controllerName = array_shift($segments).'Controller';
          $controllerName = ucfirst($controllerName);

          $actionName = 'action'.ucfirst(array_shift($segments));
          $parameters = $segments;
          
         
            $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';
          
          

          if(file_exists($controllerFile)){
            require_once($controllerFile);
          }
          // Создать объект, вызвать метод (т.е action)
          $controllerObject = new $controllerName;
          $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
          if($result != null){
             break;
          }
        }
      }


    }
  }

 ?>

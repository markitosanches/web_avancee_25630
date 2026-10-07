<?php

namespace App\Routes;

class Route {
    
    private static $routes = [];

    static public function get(string $url, string $controller):void{
        self::$routes[] = ['url' => $url, 'controller' => $controller, 'method' => 'GET'];
    }

    static public function post(string $url, string $controller):void{
        self::$routes[] = ['url' => $url, 'controller' => $controller, 'method' => 'POST'];
    }

    static public function dispatch(){
        // echo "<pre>";
        // var_dump(self::$routes);
        // echo "</pre>";
        // echo "<pre>";
        // var_dump($_SERVER);
        // echo "</pre>";

        $url = $_SERVER['REQUEST_URI'];
        $urlSegments = explode('?', $url);
        // print_r($urlSegments);
        $urlPath = $urlSegments[0];
        $method = $_SERVER['REQUEST_METHOD'];

    
        // echo $url;
        // echo "<br>";
        // echo $method;
        // echo "<br>";

        foreach(self::$routes as $route){

        //echo BASE.$route['url'] ."==". $urlPath."<br>";

            if(BASE.$route['url'] == $urlPath && $route['method'] == $method){
                $controllerSegments = explode('@', $route['controller']);
                // print_r($controllerSegments);
                $controllerName = 'App\\Controllers\\'.$controllerSegments[0];
                $methodName = $controllerSegments[1];

                // echo $controllerName;
                $controllerInstance = new $controllerName();

                if($method == "GET"){
                    if(isset($urlSegments[1])){
                        // echo $urlSegments[1];
                        parse_str($urlSegments[1], $queryParams);
                        // print_r($queryParams);
                        $controllerInstance->$methodName($queryParams);
                    }else{
                        $controllerInstance->$methodName();
                    }
                    
                }elseif($method == "POST"){
                    $controllerInstance->$methodName($_POST);
                }
                return;
            }

        }
        http_response_code(404);
        echo "404 Page not found!";

    }

}

?>


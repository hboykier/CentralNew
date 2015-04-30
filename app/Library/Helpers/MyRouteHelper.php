<?php namespace App\Library\Helpers {


    use Illuminate\Routing\Route;

    class MyRouteHelper {
        public static function action(Route $route) {
            $parts = explode('.', $route->getName());
            return $parts[count($parts)-1];
        }
    }

}
?>
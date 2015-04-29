<?php namespace App\Helpers {

    class MyRouteHelper {
        public static function action(\Route $route) {
            $parts = explode('.', $route->currentRouteName());
            return $parts[count($parts)-1];
        }
    }

}
?>
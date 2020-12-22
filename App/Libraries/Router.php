<?php

namespace App\Libraries;

class Router {

    public $routes = [
        'GET' => [],

        'POST' => [],
    ];


    public static function load($file)
    {
        $router = new static;
    
        require $file;

        return $router;
    }

    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType]))
        {
            $classAndFunc = $this->stripFunctionName($this->routes[$requestType][$uri]);

            return [
                'uri' => $classAndFunc['uri'],
                'function' => $classAndFunc['function'],
                'class' => $classAndFunc['class'],
            ];
        }

        throw new \Exception('No route defined for this route.');
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    private function stripFunctionName($uri)
    {
        $class = str_ireplace('.php', '', $uri);

        $data = [
            'uri' => $uri,
            'function' => 'index',
            'class' => str_replace('/', '\\', $class),
        ];

        $atSign = strpos($uri, '@');

        if ($atSign !== false)
        {
            $class = str_replace('/', '\\', substr($uri, 0, $atSign));
            $class = str_ireplace('.php', '', $class);
            $data = [
                'uri' => substr($uri, 0, $atSign),
                'function' => substr($uri, $atSign + 1),
                'class' => $class,
            ];
        }

        return $data;
    }
}
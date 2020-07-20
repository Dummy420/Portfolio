<?php
namespace FrameWork\Controllers;

class IndexController
{
    public static function Render()
    {
        $loader = new \Twig\Loader\ArrayLoader([
            'index' => 'Hello {{ name }}!',
        ]);
        $twig = new \Twig\Environment($loader);
        
        echo $twig->render('index', ['name' => 'Fabien']);
    }
}
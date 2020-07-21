<?php
namespace FrameWork;

class IndexController
{
    public static function Render()
    {
        $loader = new \Twig\Loader\FilesystemLoader('Vues');
        $twig = new \Twig\Environment($loader, [
        ]);

        $template = $twig->load('index.html.twig');
    }
}
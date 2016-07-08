<?php require_once 'vendor/autoload.php';
Twig_Autoloader::register();

$remove_accent = new Twig_SimpleFilter('remove_accent', function ($str) {
    $str = htmlentities($str, ENT_NOQUOTES, 'utf-8');
    $str = preg_replace('#&([A-za-z])(?:uml|circ|tilde|acute|grave|cedil|ring);#', '\1', $str);
    $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str);
    $str = preg_replace('#&[^;]+;#', '', $str);
    return $str;
});


$loader = new Twig_Loader_Filesystem('./twig/');
$twig = new Twig_Environment($loader, array('debug' => true));
$twig->addExtension(new Twig_Extension_Debug());
$twig->addFilter($remove_accent); // add this

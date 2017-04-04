<?php require_once 'vendor/autoload.php';
Twig_Autoloader::register();

$remove_accent = new Twig_SimpleFilter('remove_accent', function ($str) {
    $str = htmlentities($str, ENT_NOQUOTES, 'utf-8');
    $str = preg_replace('#&([A-za-z])(?:uml|circ|tilde|acute|grave|cedil|ring);#', '\1', $str);
    $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str);
    $str = preg_replace('#&[^;]+;#', '', $str);
    return $str;
});

$dirFiles = array();
if ($handle = opendir('twig/pages')) {
    while (false !== ($file = readdir($handle))) {
        $ext = pathinfo($file, PATHINFO_EXTENSION);
        if ($ext == "twig") {
            array_push($dirFiles, $file);
        }
    }
    closedir($handle);
}
sort($dirFiles);



$loader = new Twig_Loader_Filesystem('./twig/');
$twig = new Twig_Environment($loader, array('debug' => true));
$twig->addExtension(new Twig_Extension_Debug());
$twig->addFilter($remove_accent); // add this
$dir    = 'js/vendors';
$scanned_directory = array_diff(scandir($dir), array('..', '.'));
$twig->addGlobal('listJsVendors', $scanned_directory);
$twig->addGlobal('debug', !isset($_GET['prod']));
$twig->addGlobal('listPage', $dirFiles);

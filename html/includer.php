<?php
$page = $_GET['page'];
$twigFile = 'twig/pages/' . str_replace('php', 'twig', $page);
$twigCallFile = 'pages/' . str_replace('php', 'twig', $page);
if(file_exists($twigFile)){
    include "options.php";
    include('inc/boot.php');
    $twig->addGlobal('index', $page);
    $page = $twig->loadTemplate($twigCallFile);
    echo $page->render(getTwigOptions($page));
}
else{
    include "index.php";
}
?>

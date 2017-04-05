<?php
function getTwigOptions($page) {
    $path = explode('/', $page);
    $pageClean = str_replace('.twig', '', $path[1]);
    //switch on the page name without extension
    switch ($pageClean){
        case '01-index':
            $twigOption = array(
                'test' => 'variable test'
            );
            break;
        default:
            $twigOption = array();
    }
    return $twigOption;
}
?>
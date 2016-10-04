<?php include('inc/boot.php');
$page = $twig->loadTemplate('pages/' . str_replace('php', 'twig', basename(__FILE__)));
echo $page->render(array('pagetitle' => 'Index'));
?>

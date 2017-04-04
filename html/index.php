<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles/all.css">
    <title>base-tpl</title>
    <meta charset="UTF-8">
</head>
<body>
<div id="content">
    <ul>
        <?php

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
        foreach ($dirFiles as $file) {
            echo '<li>Page <a href="' . str_replace('.twig', '.php', $file) . '">' . str_replace('.twig', '', $file) . '</a></li>';
        }
        ?>
    </ul>
</div>
</body>
</html>




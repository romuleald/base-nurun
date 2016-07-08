<?php include('inc/html.php'); ?>
<?php
$active = isset($_GET['active']);
$N4 = isset($_GET['N4']);
?>
<head>
    <?php include('inc/head.php'); ?>
    <script>
        if (location.hash) {
            document.head.insertAdjacentHTML('beforeend', '<style type="text/css">.nur-help-title:target {outline: solid 1px red;}.nur-help-title:target + div {display: block;}.nur-help-title:not(:target) {display: none;}.nur-help-title:not(:target) + div {display: none;}body{min-height:110%}</style>')
        }
    </script>
</head>
<body>

<?php include('inc/layout/header.php'); ?>

<div class="main-container">

    <?php echo generateAllBlocksTitle('cookies', 'M.cookies') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <?php include('inc/modules/module-cookies.php'); ?>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('module filtre products', 'M.75') ?>
    <div class="section section-medium mod-full border-full">
        <div class="section-inner">
            <div class="section-content">
                <?php include('inc/modules/module-M75.php'); ?>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('explorez nos catégories de produit', 'M.72') ?>
    <div class="section section-medium">
        <div class="section-inner">
            <div class="section-content">
                <?php include('inc/modules/module-M72.php'); ?>
            </div>
        </div>
    </div>


    <?php echo generateAllBlocksTitle('Push aucun résultats', 'M.74') ?>
    <div class="section section-medium">
        <div class="section-inner">
            <div class="section-content">
                <?php include('inc/modules/module-M74.php'); ?>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Push Newsletter', 'M.02') ?>
    <div class="section">
        <div class="section-content">
            <?php include('inc/modules/module-M02.php'); ?>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('push-content', 'M.03') ?>
    <div class="section">
        <div class="section-content">
            <?php include('inc/modules/module-M03.php'); ?>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('push--link-content', 'M.04') ?>
    <div class="section">
        <div class="section-content">
            <?php include('inc/modules/module-M04.php'); ?>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('push-socialmedia', 'M.05') ?>
    <div class="section">
        <div class="section-content">
            <?php include('inc/modules/module-M05.php'); ?>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('push news détails', 'M.06') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="section-grid-d-2">
                    <?php include('inc/modules/module-M06.php'); ?>
                </div>
                <div class="section-grid-d-2">
                    <?php include('inc/modules/module-M06.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('push Image + Texte-Majeur', 'M.06bis') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="mod-full">
                    <?php include('inc/modules/module-M06bis.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Push édito Image + Texte / Décli', 'M.06.2') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="mod-full">
                    <?php include('inc/modules/module-M06.2.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Push édito Image + Texte / Décli A', 'M.06.3') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="section-grid-d-2 section-grid-m-1">
                    <?php include('inc/modules/module-M06.3.php'); ?>
                </div>
            </div>
        </div>
    </div>


<!--    --><?php //echo generateAllBlocksTitle('Push édito Image + Texte / Décli B', 'M.06.3B') ?>
<!--    <div class="section">-->
<!--        <div class="section-inner">-->
<!--            <div class="section-content">-->
<!--                <div class="section-grid-d-2 section-grid-m-1">-->
<!--                    --><?php //include('inc/modules/module-M06.3B.php'); ?>
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

    <?php echo generateAllBlocksTitle('Push édito Image + Texte / Décli C', 'M.06.3C') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="section-grid-d-2 section-grid-m-1">
                    <?php include('inc/modules/module-M06.3C.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('push-edito-txt', 'M.07') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="section-grid-d-3">
                    <?php include('inc/modules/module-M07.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Module de titre + body', 'M.07.1') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="section-grid-d-2 section-grid-m-1">
                    <?php include('inc/modules/module-M07.1.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Module de titre + body', 'M.07.1B') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="section-grid-d-2 section-grid-m-1">
                    <?php include('inc/modules/module-M07.1B.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('push-edito-txt-img', 'M.08.0') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="section-grid-d-3">
                    <?php include('inc/modules/module-M08.0.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('push-edito-txt-img-link', 'M.08.1') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="section-grid-d-3">
                    <?php include('inc/modules/module-M08.1.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Solution projets', 'M.08.2') ?>
    <div class="section set-8-2">
        <div class="section-inner">
            <div class="section-content">
                <?php include('inc/modules/module-M14.php'); ?>
                <?php include('inc/modules/module-M08.2.php'); ?>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('push-formation', 'M.08.3') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="section-grid-d-3">
                    <?php include('inc/modules/module-M08.3.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('formation professionnelles', 'M.90') ?>
    <div class="section section-small set-90">
        <div class="section-inner">
            <div class="section-content">
                <?php include('inc/modules/module-M90.php'); ?>
            </div>
        </div>
    </div>


    <?php echo generateAllBlocksTitle('Overview produit', 'M.24') ?>
    <div class="section set-24 section-medium section-spacing-medium section-bg mod-full section-large">
        <div class="section-inner">
            <div class="section-content">
                <?php include('inc/modules/module-M24.php'); ?>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Overview produit', 'M.24-Bis') ?>
    <div class="section set-24 section-medium section-spacing-medium section-bg mod-full section-large">
        <div class="section-inner">
            <div class="section-content">
                <?php include('inc/modules/module-M24-Bis.php'); ?>
            </div>
        </div>
    </div>


    <?php echo generateAllBlocksTitle('push-tuto', 'M.11') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="mod-full">
                    <?php include('inc/modules/module-M11.php'); ?>
                </div>
            </div>

        </div>
    </div>

    <?php echo generateAllBlocksTitle('Image-tetiere', 'M.12') ?>
    <?php include('inc/modules/module-M12.php'); ?>

    <?php echo generateAllBlocksTitle('push-range', 'M.18') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="mod-full">
                    <?php include('inc/modules/module-M18.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('module banniere', 'M.16') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="mod-full">
                    <?php include('inc/modules/module-M16.php'); ?>
                </div>
            </div>
        </div>
    </div>




    <?php echo generateAllBlocksTitle('push-liens', 'M.10.1') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="section-grid-d-3">
                    <?php include('inc/modules/module-M10-1.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('mosaique', 'M.22') ?>
    <div class="section set-22">
        <div class="section-inner">
            <div class="section-content"> <!--ajouter la class "filter-by-list" pour passer de mosaique a list-->
                <?php $product_overlay_no_roll = false; ?> <!--no roll product if true-->
                <?php for ($m22_index = 0; $m22_index < 6; $m22_index++) { ?>
                    <div class="section-grid-d-3 section-grid-m-2 module-set-22">
                        <?php include('inc/modules/module-M22.php'); ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('liste', 'M.22.1') ?>
    <div class="section set-22">
        <div class="section-inner">
            <div class="section-content filter-by-list">
                <!--ajouter la class "filter-by-list" pour passer de mosaique a list-->
                <?php $product_overlay_no_roll = false; ?> <!--no roll product if true-->
                <?php for ($m22_index = 0; $m22_index < 6; $m22_index++) { ?>
                    <div class="section-grid-d-3 section-grid-m-2 module-set-22">
                        <?php include('inc/modules/module-M22.1.php'); ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('rollover-product', 'M.23') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <?php $product_overlay_no_roll = true; ?> <!--no roll product if true-->
                <div class="section-grid-d-3 section-grid-m-2">
                    <div class="block-visual-product wrapper-block-product-overlay JS_toggler">
                        <img src="img/data/m-24.png" alt="">
                        <!--overlay product-->
                        <?php include('inc/modules/module-M23.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('push-telecharger-recevoir', 'M.23.1') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <?php $product_overlay_no_roll = true; ?> <!--no roll product if true-->
                <div class="section-grid-d-3 section-grid-m-1">
                    <div class="block-visual-product wrapper-block-product-overlay JS_toggler">
                        <img src="img/data/m-24.png" alt="">
                        <!--overlay product-->
                        <?php include('inc/modules/module-M23.1.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Carrousel d\'images', 'M.26') ?>
    <?php include("inc/sets/set-26.php") ?>


    <?php echo generateAllBlocksTitle('nav-onglets-produits', 'nav-onglets') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="mod-full">
                    <?php include('inc/modules/module-nav-menu-onglet.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('push-category', 'M.19') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="mod-full">
                    <?php include('inc/modules/module-M19.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('nav-gauche-categorie', 'M.17') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="section-grid-d-3">
                    <div class="nav-bar">
                        <?php include('inc/modules/module-M17.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('décli m-06', 'M.06.1') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="mod-full">
                    <?php include('inc/modules/module-M06.1.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('affichage tri', 'M.21') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="mod-full">
                    <?php echo $twigm21->render(array(
                        'id' => 1,
                        'cookThumb' => (getcook('display', 'thumbnail')) ? 'active' : '',
                        'cookMoz' => (getcook('display', 'list')) ? 'active' : '',
                        'sortby' => $_GET['sort-by']
                    )); ?>
                </div>
            </div>
        </div>
    </div>
    <?php echo generateAllBlocksTitle('affichage tri', 'M.21BIS') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="mod-full">
                    <?php echo $twigm21->render(array(
                        'id' => 'bis',
                        'cookThumb' => (getcook('display', 'thumbnail')) ? 'active' : '',
                        'cookMoz' => (getcook('display', 'list')) ? 'active' : '',
                        'sortby' => $_GET['sort-by']
                    )); ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('affichage tri', 'M.21-2') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="mod-full">
                    <?php echo $twigm21->render(array(
                        'id' => 2,
                        'cookThumb' => (getcook('display', 'thumbnail')) ? 'active' : '',
                        'cookMoz' => (getcook('display', 'list')) ? 'active' : '',
                        'sortby' => @$_GET['sort-by']
                    )); ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('nav-gauche-filtres', 'M.20') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content posr">
                <div class="section-grid-d-3 section-grid-m-1">
                    <?php include('inc/modules/module-M20.php'); ?>
                </div>
            </div>
        </div>
    </div>
    <?php echo generateAllBlocksTitle('nav-gauche-filtres', 'M.20BIS') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content posr">
                <div class="section-grid-d-3 section-grid-m-1">
                    <?php include('inc/modules/module-M20BIS.php'); ?>
                </div>
            </div>
        </div>
    </div>
    <?php echo generateAllBlocksTitle('nav-gauche-filtres', 'M.20-2') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content posr">
                <div class="section-grid-d-3 section-grid-m-1">
                    <?php include('inc/modules/module-M20.2.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Carrousel cross sell', 'M.25') ?>
    <?php include("inc/sets/set-25.php") ?>

    <?php echo generateAllBlocksTitle('Carrousel up sell', 'M.25.1') ?>
    <?php include("inc/sets/set-25.1.php") ?>

    <?php echo generateAllBlocksTitle('Module-M41-Info-pratique', 'M.41') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="mod-full">
                    <?php include('inc/modules/module-M41.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Module M35 intro', 'M.35') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content posr">
                <?php include('inc/modules/module-M35.php'); ?>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Module M48 intro(je réalise le détail)', 'M.48') ?>
    <div class="set-t07 fix-reco-customer">
        <div class="background-grey">
            <?php include('inc/modules/module-M34.php'); ?>
            <div class="section section-medium reco-customer">
                <div class="section-inner">
                    <div class="section-content">
                        <?php include('inc/modules/module-M48.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Module M48-Bis sans poster', 'M.48') ?>
    <div class="set-t07">
        <div class="background-grey">
            <?php include('inc/modules/module-M34-Bis.php'); ?>
            <div class="section section-medium">
                <div class="section-inner">
                    <div class="section-content">
                        <?php include('inc/modules/module-M48.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Édito Media m-34', 'M.34') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="mod-full">
                    <?php include('inc/modules/module-M34.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Édito Citation m-37', 'M.37') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="mod-full">
                    <?php include('inc/modules/module-M37.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('chiffres clés', 'M.38') ?>
    <div class="section">
        <div class="section-content">
            <h3>Cas 1</h3>
            <div class="set-38">
                <div class="module-set-38">
                    <?php
                    $item = "1";
                    include('inc/modules/module-M38.php');
                    ?>
                </div>
            </div>

            <h3>Cas 2</h3>
            <div class="set-38">
                <div class="module-set-38">
                    <?php
                    $item = "2";
                    include('inc/modules/module-M38.php');
                    ?>
                    <?php
                    $item = "3";
                    include('inc/modules/module-M38.php');
                    ?>
                </div>
            </div>

            <h3>Cas 3</h3>
            <div class="set-38">
                <div class="module-set-38">
                    <?php
                    $item = "2";
                    include('inc/modules/module-M38.php');
                    ?>
                    <?php
                    $item = "3";
                    include('inc/modules/module-M38.php');
                    ?>
                    <?php
                    $item = "2";
                    include('inc/modules/module-M38.php');
                    ?>
                </div>
            </div>

            <h3>Cas 4</h3>
            <div class="set-38">
                <div class="module-set-38">
                    <?php
                    $item = "2";
                    include('inc/modules/module-M38.php');
                    ?>
                    <?php
                    $item = "3";
                    include('inc/modules/module-M38.php');
                    ?>
                    <?php
                    $item = "2";
                    include('inc/modules/module-M38.php');
                    ?>
                </div>

                <div class="module-set-38">
                    <?php
                    $item = "1";
                    include('inc/modules/module-M38.php');
                    ?>
                </div>
            </div>

            <h3>Cas 5</h3>
            <div class="set-38">
                <div class="module-set-38">
                    <?php
                    $item = "2";
                    include('inc/modules/module-M38.php');
                    ?>
                    <?php
                    $item = "3";
                    include('inc/modules/module-M38.php');
                    ?>
                </div>

                <div class="module-set-38">
                    <?php
                    $item = "3";
                    include('inc/modules/module-M38.php');
                    ?>
                    <?php
                    $item = "2";
                    include('inc/modules/module-M38.php');
                    ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('texte 2 colonnes', 'M.39') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <?php include('inc/modules/module-M39.php'); ?>

            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Fiche logiciel', 'M.43') ?>
    <div class="section set-24 section-medium section-spacing-medium section-bg mod-full section-large">
        <div class="section-inner">
            <div class="section-content">
                <?php include('inc/modules/module-M43.php'); ?>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Push edito video', 'M.44') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <?php include('inc/modules/module-M44.php'); ?>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Tuto video', 'M.45') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <?php include('inc/modules/module-M45.php'); ?>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Carrousel Push solutions chantier', 'M.25.2') ?>
    <?php include("inc/sets/set-25.2.php") ?>

    <?php echo generateAllBlocksTitle('besoin daide', 'M.42') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <?php include('inc/modules/module-M42.php'); ?>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('besoin d\'aide', 'M.42.1') ?>
    <div class="section">
        <div class="mod-full">
            <?php include('inc/modules/module-M42.1.php'); ?>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Formation', 'M.46') ?>
    <div class="section section-small">
        <div class="section-inner">
            <div class="section-content">
                <?php include('inc/modules/module-M46.php'); ?>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('univers produit', 'M.52') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <?php include('inc/modules/module-M52.php'); ?>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('push-formations-decli', 'M.54') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <?php include('inc/modules/module-M54.php'); ?>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Carrousel nouveautés', 'M.25.3') ?>
    <?php include("inc/sets/set-25.3.php") ?>

    <?php echo generateAllBlocksTitle('Carrousel cross sell pro', 'M.25.5') ?>
    <?php include("inc/sets/set-25.5.php") ?>

    <?php echo generateAllBlocksTitle('Carrousel up sell pro', 'M.25.4') ?>
    <?php include("inc/sets/set-25.4.php") ?>

    <?php echo generateAllBlocksTitle('Push édito Image + Texte / Décli 3', 'M.06.4') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="section-grid-d-3-4">
                    <?php include('inc/modules/module-M06.4.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Push édito Image + Texte / Décli 3', 'M.06.4-2') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="section-grid-d-3-4">
                    <?php include('inc/modules/module-M06.4-2.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Mise en avant produit', 'M.51') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="mod-full">
                    <?php include('inc/modules/module-M51.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('MEA mise en avant', 'M.39.1') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="mod-full">
                    <?php include('inc/modules/module-M39.1.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Materiel utilisé', 'M.40') ?>
    <div class="section section-small m-25 set-40">
        <div class="section-inner">
            <div class="content">
                <h2 class="block-title">Matériels utilisés</h2>
            </div>
            <div class="section-content"> <!--ajouter la class "filter-by-list" pour passer de mosaique a list-->
                <?php $product_overlay_no_roll = false; ?> <!--no roll product if true-->
                <?php for ($m40_index = 0; $m40_index < 7; $m40_index++) { ?>
                    <div class="section-grid-d-4 section-grid-m-2 module-set-40">
                        <?php include('inc/modules/module-M40.php'); ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Push édito Image + Texte / Décli 4', 'M.06.4-3') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="section-grid-d-3-4">
                    <?php include('inc/modules/module-M06.4-3.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Vous aimerez aussi', 'M.47') ?>
    <div class="section section-medium set-47">
        <div class="section-inner">
            <div class="section-content">
                <h2 class="txt-title-dashed txt-title-dashed-large">Vous aimerez aussi</h2>
                <div class="m47-container js-slider dots-mobile" data-max-width="768" data-slider-dots="true" data-slider-nav="false" data-slider-item="2">
                    <?php for ($i = 0; $i <= 2; $i++) { ?>
                        <div class="item m-wrap">
                            <?php include('inc/modules/module-M47.php'); ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Module M50 - Résultats Mosaïque', 'M.50') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <?php include('inc/modules/module-M50.php'); ?>
            </div>
        </div>
    </div>


    <?php echo generateAllBlocksTitle('Module M56 - contacter le service pro', 'M.56') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <?php include('inc/modules/module-M56.php'); ?>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('push liens externes', 'M.10.2') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <?php include('inc/modules/module-M10.2.php'); ?>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('liste-appli-mosaic', 'M.49') ?>
    <div class="section set-22">
        <div class="section-inner">
            <div class="section-content"> <!--ajouter la class "filter-by-list" pour passer de mosaique a list-->
                <?php $product_overlay_no_roll = false; ?> <!--no roll product if true-->
                <?php for ($m22_index = 0; $m22_index < 6; $m22_index++) { ?>
                    <div class="section-grid-d-3 section-grid-m-2 module-set-22 moz-49">
                        <?php include('inc/modules/module-M49.php'); ?>
                    </div>
                <?php } ?>
                <div class="section-grid-d-1 section-grid-m-1 ofh">
                    <ul class="line block-pagination">
                        <li class="pagination">
                            <a href="#prev" class="pagination inactive">
                                <i class="icon-arrow-left thin-icon icon-item"></i>
                            </a>
                        </li>
                        <li class="pagination pages"><a href="#" class="active">1</a></li>
                        <li class="pagination pages"><a href="#">2</a></li>
                        <li class="pagination pages"><a href="#">3</a></li>
                        <li class="pagination pages"><a href="#">...</a></li>
                        <li class="pagination pages"><a href="#">6</a></li>
                        <li class="pagination">
                            <a href="#next" class="pagination">
                                <i class="icon-arrow-right thin-icon icon-item"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('liste-appli-liste', 'M.49-1') ?>
    <div class="section set-22">
        <div class="section-inner">
            <div class="section-content filter-by-list">
                <!--ajouter la class "filter-by-list" pour passer de mosaique a list-->
                <?php $product_overlay_no_roll = false; ?> <!--no roll product if true-->
                <?php for ($m22_index = 0; $m22_index < 6; $m22_index++) { ?>
                    <div class="section-grid-d-3 section-grid-m-2 module-set-22">
                        <?php include('inc/modules/module-M49-1.php'); ?>
                    </div>
                <?php } ?>
                <div class="section-grid-d-1 section-grid-m-1 ofh">
                    <ul class="line block-pagination">
                        <li class="pagination">
                            <a href="#prev" class="pagination inactive">
                                <i class="icon-arrow-left thin-icon icon-item"></i>
                            </a>
                        </li>
                        <li class="pagination pages"><a href="#" class="active">1</a></li>
                        <li class="pagination pages"><a href="#">2</a></li>
                        <li class="pagination pages"><a href="#">3</a></li>
                        <li class="pagination pages"><a href="#">...</a></li>
                        <li class="pagination pages"><a href="#">6</a></li>
                        <li class="pagination">
                            <a href="#next" class="pagination">
                                <i class="icon-arrow-right thin-icon icon-item"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Listing Résultats', 'M.49-1BIS') ?>
    <div class="section set-22">
        <div class="section-inner">
            <div class="section-content filter-by-list">
                <!--ajouter la class "filter-by-list" pour passer de mosaique a list-->
                <?php $product_overlay_no_roll = false; ?> <!--no roll product if true-->
                <?php for ($m22_index = 0; $m22_index < 6; $m22_index++) { ?>
                    <div class="section-grid-d-3 section-grid-m-2 module-set-22">
                        <?php include('inc/modules/module-M49-1BIS.php'); ?>
                    </div>
                <?php } ?>
                <div class="section-grid-d-1 section-grid-m-1 ofh">
                    <ul class="line block-pagination">
                        <li class="pagination">
                            <a href="#prev" class="pagination inactive">
                                <i class="icon-arrow-left thin-icon icon-item"></i>
                            </a>
                        </li>
                        <li class="pagination pages"><a href="#" class="active">1</a></li>
                        <li class="pagination pages"><a href="#">2</a></li>
                        <li class="pagination pages"><a href="#">3</a></li>
                        <li class="pagination pages"><a href="#">...</a></li>
                        <li class="pagination pages"><a href="#">6</a></li>
                        <li class="pagination">
                            <a href="#next" class="pagination">
                                <i class="icon-arrow-right thin-icon icon-item"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Navigation de gauche BtB', 'M.55') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <?php include('inc/modules/module-M55.php'); ?>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('push liens', 'M.10.3') ?>

    <div class="section">
        <div class="section-inner">
            <div class="section-content posr">
                <div class="section-grid-d-1 section-grid-m-1">
                    <?php include('inc/modules/module-M10.3.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('WYSIWYG', 'M.36.1') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content posr">
                <div class="section-grid-d-1 section-grid-m-1">
                    <?php include('inc/modules/module-M36-1.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('decli M11 - 3 tutos videos', 'M.11-1') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="mod-full">
                    <?php include('inc/modules/module-M11-1.php'); ?>
                </div>
            </div>

        </div>
    </div>

    <?php echo generateAllBlocksTitle('decli M11 - 2 tutos', 'M.11-2') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="mod-full">
                    <?php include('inc/modules/module-M11-2.php'); ?>
                </div>
            </div>

        </div>
    </div>

    <?php echo generateAllBlocksTitle('decli M11 - 1 tuto', 'M.11-3') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="mod-full">
                    <?php include('inc/modules/module-M11-3.php'); ?>
                </div>
            </div>

        </div>
    </div>

    <?php echo generateAllBlocksTitle('Formulaire - Module Pré-qualification Particulier', 'M.Pre-qualification') ?>
    <div class="section">
        <div class="section-content">
            <?php include('inc/modules/module-M.Pre-qualification.php'); ?>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Formulaire - Module Pré-qualification Pro', 'M.Pre-qualification Pro') ?>
    <div class="section">
        <div class="section-content">
            <?php include('inc/modules/module-M.Pre-qualification-pro.php'); ?>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Produits professionnels Décli', 'M.40-1') ?>
    <div class="section m-11 set-40">
        <div class="section-inner">
            <div class="content">
                <h2 class="block-title">Produits professionnels <span class="number-result">(1282)</span></h2>
            </div>
            <div class="section-content"> <!--ajouter la class "filter-by-list" pour passer de mosaique a list-->
                <?php $product_overlay_no_roll = false; ?> <!--no roll product if true-->
                <?php for ($m40_index = 0; $m40_index < 7; $m40_index++) { ?>
                    <div class="section-grid-d-4 section-grid-m-2 module-set-40">
                        <?php include('inc/modules/module-M40-1.php'); ?>
                    </div>
                <?php } ?>
            </div>
            <p class="block-link">
                <a href="#" title="#" class="btn btn-main">voir tout</a></p>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Module Actus', 'S67') ?>
    <?php include("inc/sets/set-67.php") ?>

    <?php echo generateAllBlocksTitle('Module mise en avant actus', 'M.66') ?>
    <?php include("inc/sets/set-66.php") ?>

    <?php echo generateAllBlocksTitle('onglets-vueensemble B2B', 'M.27.2') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="mod-full">
                    <?php include('inc/modules/module-M27.2.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('onglet-normes B2B', 'M.31.1') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="mod-full">
                    <?php include('inc/modules/module-M31-1.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('onglet-prescription B2B', 'M.31.2') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="mod-full">
                    <?php include('inc/modules/module-M31-2.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('push-docs-conseils B2B', 'M.30-1') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="mod-full">
                    <?php include('inc/modules/module-M30-1.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('FAQ', 'FAQ') ?>
    <div class="section  section-medium mod-full border-full">
        <div class="section-inner">
            <div class="section-content">
                <?php include('inc/modules/module-FAQ.php'); ?>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('onglet-logiciels B2B', 'M.76') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="mod-full">
                    <?php include('inc/modules/module-M76.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('push-caracteristiques B2B', 'M.28-2') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="mod-full">
                    <?php include('inc/modules/module-M28-2.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('push-pieces detaches B2B', 'M.77-1') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="mod-full">
                    <?php include('inc/modules/module-M77-1.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('push-pieces detaches B2B', 'M.77-2') ?>

    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="mod-full">
                    <?php include('inc/modules/module-M77-2.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Mentions légales', 'M.62') ?>
    <div class="section section-medium mod-full border-full">
        <div class="section-inner">
            <div class="section-content">
                <?php include('inc/modules/module-M62.php'); ?>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Plan du site', 'M.63') ?>
    <div class="section section-medium mod-full border-full">
        <div class="section-inner">
            <div class="section-content">
                <?php include('inc/modules/module-M63.php'); ?>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Plan du site', 'M.63-pro') ?>
    <div class="section section-medium mod-full border-full">
        <div class="section-inner">
            <div class="section-content">
                <?php include('inc/modules/module-M63-pro.php'); ?>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Module Actus', 'S67.1') ?>
    <?php include('inc/modules/module-M67-1.php'); ?>


    <?php echo generateAllBlocksTitle('nav-onglets-produits B2B', 'nav-onglets B2B') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="mod-full">
                    <?php include('inc/modules/module-nav-menu-ongletB2B.php'); ?>
                </div>
            </div>
        </div>
    </div>


    <?php echo generateAllBlocksTitle('formulaire telephone', 'M.79') ?>
    <div class="section mod-full border-full">
        <div class="section-inner">
            <div class="section-content">
                <?php include('inc/modules/module-M79.php'); ?>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Contact-tetiere', 'tetiere contact') ?>
    <?php include('inc/modules/module-M-contact-tetiere.php'); ?>

    <?php echo generateAllBlocksTitle('Module validation formulaire ', 'validation form') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <?php echo $twigmvalidconfirm->render(array("message" => "Votre demande a bien été prise en compte.")); ?>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Module texte informatif formulaire ', 'texte informatif form') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <?php include('inc/modules/module-text-form.php'); ?>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Module Résultat nombre documentation ', 'M-82') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <?php include('inc/modules/module-M82.php'); ?>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Module  Push liens - documentation ', 'M10.3-2') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="block-inner-link">
                    <?php include('inc/modules/module-M10.3-2.php'); ?>
                </div>

            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('wishlist part', 'M.69-1') ?>
    <div class="m-69-1">
        <div class="section m-21">
            <?php include('inc/sets/set-69-1.php'); ?>
        </div>
        <div class="section set-22 js-set-22">
            <div class="section-inner">
                <div class="section-content filter-by-list"> <!--ajouter la class "filter-by-list" pour passer de mosaique a list-->
                    <?php $product_overlay_no_roll = false; ?> <!--no roll product if true-->
                    <?php for ($m22_index = 0; $m22_index < 6; $m22_index++) { ?>
                        <div class="section-grid-d-3 section-grid-m-2 module-set-22">
                            <?php include('inc/modules/module-M69-1.php'); ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="ofh">
                <p class="total-amount">Total TTC <span class="price js-total-price">0,00€</span></p>
            </div>

        </div>
    </div>

    <?php echo generateAllBlocksTitle('wishlist pro', 'M.69-2') ?>
    <div class="m-69-1 m-69-2">
        <div class="section m-21">
            <?php include('inc/sets/set-69-2-pro.php'); ?>
        </div>
        <div class="section set-22 js-set-22">
            <div class="section-inner">
                <div class="section-content filter-by-list"> <!--ajouter la class "filter-by-list" pour passer de mosaique a list-->
                    <?php $product_overlay_no_roll = false; ?> <!--no roll product if true-->
                    <?php for ($m22_index = 0; $m22_index < 6; $m22_index++) { ?>
                        <div class="section-grid-d-3 section-grid-m-2 module-set-22">
                            <?php include('inc/modules/module-M69-1.php'); ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="block-pro-total">
                <p class="total-amount">Sous Total HT avant remise (18 articles)</p>
                <p class="price js-total-price">0,00€</p><span class="no-tax"><sup class="super">HT</sup></span>
                <div class="block-percent">
                    <p class="text-percent">Appliquer une remise de</p>
                    <input type="text" class="field-percent js-field-percent" name="percent" value="0" min="0"/>
                    <p class="text-percent">%</p>
                </div>
                <p class="total-amount total-amount-percent">Total HT avec remise (18 articles)</p>
                <p class="price price-percent js-total-price-percent">0,00€</p><span class="no-tax no-tax-percent"><sup class="super">HT</sup></span>
            </div>

        </div>
    </div>

    <?php echo generateAllBlocksTitle('Module M-33', 'M-33 store locator') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <?php include('inc/modules/module-M33.php'); ?>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Module M-89', 'M-89') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <?php include('inc/modules/module-M89.php'); ?>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Module M88', 'M.88') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content posr">
                <?php include('inc/modules/module-M88.php'); ?>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Module quizz', 'M.87') ?>
    <div class="section section-medium mod-full">
        <div class="section-inner">
            <div class="section-content">
                <?php include('inc/modules/module-M87.php'); ?>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Module page FAQ', 'M.85') ?>
    <div class="section section-medium mod-full border-full">
        <div class="section-inner">
            <div class="section-content">
                <?php include('inc/modules/module-M85.php'); ?>
            </div>
        </div>
    </div>
    <?php echo generateAllBlocksTitle('Module M-61', 'M-61') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <?php include('inc/modules/module-M61.php'); ?>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Module M-83', 'Room solution N1') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <?php include('inc/modules/module-M83.php'); ?>
            </div>
        </div>
    </div>


    <?php echo generateAllBlocksTitle('Module M-84', 'Room solution N2') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <?php include('inc/modules/module-M84.php'); ?>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Module Page 404', 'Page 404') ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <?php include('inc/modules/module-page-404.php'); ?>
            </div>
        </div>
    </div>


</div>

<?php include('inc/debug.inc.php'); ?>
<!-- #main-container -->

<?php echo generateAllBlocksTitle('footer', 'M.05') ?>
<?php include 'inc/layout/footer.php'; ?>
<!-- SCRIPTS -->
<?php include 'inc/scripts.php'; ?>
</body>
</html>

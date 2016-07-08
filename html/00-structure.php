<?php include('inc/html.php'); ?>
<head>
    <?php include('inc/head.php'); ?>
</head>
<body>
<?php include('inc/layout/header.php'); ?>
<div class="main-container">

    <?php echo generateAllBlocksTitle('Section full duo sans marges internes avec contrainte 1440'); ?>
    <div class="section mod-full">
        <div class="section-inner">
            <div class="section-content">
                <div class="section-grid-d-2">
                    <?php include 'inc/modules/module-M06.php'; ?>
                </div>
                <div class="section-grid-d-2">
                    <?php include 'inc/modules/module-M06.php'; ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Section small duo avec marges internes avec contrainte 1440'); ?>
    <div class="section section-small section-spacing-medium">
        <div class="section-inner">
            <div class="section-content">
                <div class="section-grid-d-2">
                    <?php include 'inc/modules/module-M08.1.php'; ?>
                </div>
                <div class="section-grid-d-2">
                    <?php include 'inc/modules/module-M08.1.php'; ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Section trio avec marges internes avec contrainte 1440'); ?>
    <div class="section section-medium section-spacing-small">
        <div class="section-inner">
            <div class="section-content">
                <div class="section-grid-d-3">
                    <?php include 'inc/modules/module-M08.1.php'; ?>
                </div>
                <div class="section-grid-d-3">
                    <?php include 'inc/modules/module-M08.1.php'; ?>
                </div>
                <div class="section-grid-d-3">
                    <?php include 'inc/modules/module-M08.1.php'; ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo generateAllBlocksTitle('Section full trio sans marges internes avec contrainte 1440'); ?>
    <div class="section">
        <div class="section-inner">
            <div class="section-content">
                <div class="section-grid-d-3">
                    <?php include 'inc/modules/module-M08.1.php'; ?>
                </div>
                <div class="section-grid-d-3">
                    <?php include 'inc/modules/module-M08.1.php'; ?>
                </div>
                <div class="section-grid-d-3">
                    <?php include 'inc/modules/module-M08.1.php'; ?>
                </div>
                <div class="section-grid-d-3">
                    <?php include 'inc/modules/module-M08.1.php'; ?>
                </div>
                <div class="section-grid-d-3">
                    <?php include 'inc/modules/module-M08.1.php'; ?>
                </div>
                <div class="section-grid-d-3">
                    <?php include 'inc/modules/module-M08.1.php'; ?>
                </div>
            </div>
        </div>
    </div>

    <?php include('inc/debug.inc.php'); ?>

    <!-- #main-container -->

    <?php echo generateAllBlocksTitle('footer', '') ?>
    <?php include 'inc/layout/footer.php'; ?>
    <!-- SCRIPTS -->
    <?php include 'inc/scripts.php'; ?>
</body>
</html>

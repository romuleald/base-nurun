<div class="module m-61">
    <?php
    $alphabet = array('a', 'b' , 'c' , 'd' , 'e' , 'f' , 'g' , 'h' , 'i' , 'j' , 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
    ?>
    <div class="lexicon">
        <a class="link-lexicon active" href="#letter-a"><p class="lexicon-letter">a</p></a>
        <?php
        $i = 5 ;
        foreach (array_slice($alphabet ,1) as $letter) {
            $i++;
            ?>
            <a class="link-lexicon" href="#letter-<?php echo $letter; ?>"><p class="lexicon-letter"><?php echo $letter; ?></p></a>
            <?php
        }
        ?>
    </div>

    <?php
    $letterA = array('accumulateur' , 'alarme intrusion' , 'ampèremètre' , 'amplificateur' , 'ampoule' , 'ampère-heure' , 'analogue' , 'anode' , 'arrêt d’urgence' , 'assistance à l’autonomie' , 'automatisation de tâches');
    $letterB = array('bâtiment basse consommation','bâtiment durable','bâtiment intelligent','bâtiment passif','boite d’encastrement','boitier d’étage','borne','bouche d’extraction','bruit ambiant','bruit résiduel','BUS'
    ,'boite d’encastrement','boitier d’étage','borne');
    $letterC = array('capacité électrique','centrale d’alarme','champ électrique','circuit terminal','coefficient de Performance','commutateur (switch)','compatibilité électromagnétique (CEM)','compresseur','conception bioclimatique'
    ,'condenseur','conducteur de phase','conducteur de protection',' conduits de raccordement','confort multimédia','confort thermique','consommation conventionnelle','consommation énergétique du bâtiment','consommations des usages domestiques','contrôle à distance'
    ,'contrôle chantier','contrôle d’accès','convecteur électrique','courant porteur');

    ?>
    <div id="letter-a" class="container-content-list">
        <div class="content-list">
            <p class="first-letter">A</p>
            <ul class="list-lex columns">
                <?php
                $i = 0 ;
                foreach ($letterA as $item) {
                    $i++;
                    ?>
                    <li class="list-word JS_toggler " data-toggler-group="lexicon" data-toggler-id="<?php echo $i; ?>"><?php echo $item; ?></li>
                    <?php
                    if ($i % 2 == 0){
                        ?>
                        <li class="list-word list-full JS_item_toggler accordion-wrapper" data-toggler-group="lexicon" data-toggler-itemid="<?php echo $i -1; ?>"><div class="layer-lexicon"><p class="text-lexicon">Bâtiment dont la consommation énergétique au m² est très basse. Cette consommation peut aussi  être compensée par les apports de chaleur solaires ou émises par les apports internes (chaleur des  occupants, éclairage artificiel, les équipements électroniques, etc.). Ce terme peut aussi être utilisé pour un bâtiment bénéficiant du label de performance énergétique allemand Passivhaus ou qui réponde aux exigences de ce label.</p></div></li>
                        <li class="list-word list-full JS_item_toggler accordion-wrapper" data-toggler-group="lexicon" data-toggler-itemid="<?php echo $i; ?>"><div class="layer-lexicon"><p class="text-lexicon">Bâtiment dont la consommation énergétique au m² est très basse. Cette consommation peut aussi  être compensée par les apports de chaleur solaires ou émises par les apports internes (chaleur des  occupants, éclairage artificiel, les équipements électroniques, etc.). Ce terme peut aussi être utilisé pour un bâtiment bénéficiant du label de performance énergétique allemand Passivhaus ou qui réponde aux exigences de ce label.</p></div></li>
                        <?php
                    }
                }
                ?>

            </ul>

        </div>
    </div>

    <div id="letter-b" class="container-content-list">
        <div class="content-list">
            <p  class="first-letter">B</p>
            <ul class="list-lex columns">
                <?php
                $i = 0 ;
                foreach ($letterB as $item) {
                    $i++;
                    ?>
                    <li class="list-word JS_toggler " data-toggler-group="lexiconB" data-toggler-id="<?php echo $i; ?>"><?php echo $item; ?></li>
                    <?php
                    if ($i % 2 == 0){
                        ?>
                        <li class="list-word list-full JS_item_toggler accordion-wrapper" data-toggler-group="lexiconB" data-toggler-itemid="<?php echo $i -1; ?>"><div class="layer-lexicon"><p class="text-lexicon">Bâtiment dont la consommation énergétique au m² est très basse. Cette consommation peut aussi  être compensée par les apports de chaleur solaires ou émises par les apports internes (chaleur des  occupants, éclairage artificiel, les équipements électroniques, etc.). Ce terme peut aussi être utilisé pour un bâtiment bénéficiant du label de performance énergétique allemand Passivhaus ou qui réponde aux exigences de ce label.</p></div></li>
                        <li class="list-word list-full JS_item_toggler accordion-wrapper" data-toggler-group="lexiconB" data-toggler-itemid="<?php echo $i; ?>"><div class="layer-lexicon"><p class="text-lexicon">Bâtiment dont la consommation énergétique au m² est très basse. Cette consommation peut aussi  être compensée par les apports de chaleur solaires ou émises par les apports internes (chaleur des  occupants, éclairage artificiel, les équipements électroniques, etc.). Ce terme peut aussi être utilisé pour un bâtiment bénéficiant du label de performance énergétique allemand Passivhaus ou qui réponde aux exigences de ce label.</p></div></li>
                        <?php
                    }
                }
                ?>

            </ul>

        </div>
    </div>

    <div id="letter-c" class="container-content-list">
        <div class="content-list">
            <p  class="first-letter">C</p>
            <ul class="list-lex columns">
                <?php
                $i = 0 ;
                foreach ($letterC as $item) {
                    $i++;
                    ?>
                    <li class="list-word JS_toggler " data-toggler-group="lexiconC" data-toggler-id="<?php echo $i; ?>"><?php echo $item; ?></li>
                    <?php
                    if ($i % 2 == 0){
                        ?>
                        <li class="list-word list-full JS_item_toggler accordion-wrapper" data-toggler-group="lexiconC" data-toggler-itemid="<?php echo $i -1; ?>"><div class="layer-lexicon"><p class="text-lexicon">Bâtiment dont la consommation énergétique au m² est très basse. Cette consommation peut aussi  être compensée par les apports de chaleur solaires ou émises par les apports internes (chaleur des  occupants, éclairage artificiel, les équipements électroniques, etc.). Ce terme peut aussi être utilisé pour un bâtiment bénéficiant du label de performance énergétique allemand Passivhaus ou qui réponde aux exigences de ce label.</p></div></li>
                        <li class="list-word list-full JS_item_toggler accordion-wrapper" data-toggler-group="lexiconC" data-toggler-itemid="<?php echo $i; ?>"><div class="layer-lexicon"><p class="text-lexicon">Bâtiment dont la consommation énergétique au m² est très basse. Cette consommation peut aussi  être compensée par les apports de chaleur solaires ou émises par les apports internes (chaleur des  occupants, éclairage artificiel, les équipements électroniques, etc.). Ce terme peut aussi être utilisé pour un bâtiment bénéficiant du label de performance énergétique allemand Passivhaus ou qui réponde aux exigences de ce label.</p></div></li>
                        <?php
                    }
                }
                ?>

            </ul>

        </div>
    </div>

</div>

<div class="header page">
    <div class="header__menu">
        <ul class="main-menu">
            <li class="items first title">
                <a class="not" href="/">
                <img src="images/logo-echinghen.png" alt="Logo">Echinghen</a>
            </li>
            <span class="push-left"></span>
                        <li class="items active">
                            <a href="#news">Actualités</a>
                        </li>
                        <li class="items">
                            <a href="agenda"<?php if($_SERVER['PHP_SELF'] == 'agenda') {echo 'class="active"';} else { }?>>Agenda</a>
                        </li>
                        <li class="items">
                            <a href="infos-pratiques"<?php if($_SERVER['PHP_SELF'] == 'infos-pratiques.php') {echo 'class="active"';} else { }?>>Infos pratiques</a>
                        </li>
                        <li class="items">
                            <a href="locations"<?php if($_SERVER['PHP_SELF'] == 'agenda.php') {echo 'class="active"';} else { }?>>Location de salles</a>
                        </li>
                        <li class="items">
                            <a href="administratif"<?php if($_SERVER['PHP_SELF'] == 'administratif.php') {echo 'class="active"';} else { }?>>Administratif</a>
                        </li>
                        <li class="items">
                            <a href="vie-sociale"<?php if($_SERVER['PHP_SELF'] == 'vie-sociale.php') {echo 'class="active"';} else { }?>>Vie sociale</a>
                        </li>
                        <li class="items">
                            <a href="le-village"<?php if($_SERVER['PHP_SELF'] == 'le-village.php') {echo 'class="active"';} else { }?>>Le village</a>
                        </li>
                        <?php
                        if(isset($_SESSION['id'])) {
                            echo '<li class="items">
                            <a href="admin/dashboard.php">Administration</a>
                            </li>';
                        }
                        ?>
                    </ul>
                    <?php require 'Menu_mobile.php'; ?>
                </div>
</div>
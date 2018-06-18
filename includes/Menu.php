<div class="header page">
    <div class="header__menu">
        <ul class="main-menu">
            <li class="items first title">
                <a class="not" href="./">
                <img src="images/logo-echinghen.png" alt="Logo">Echinghen</a>
            </li>
            <span class="push-left"></span>
                        <li class="items">
                            <a href="agenda">Agenda</a>
                        </li>
                        <li class="items">
                            <a href="infos-pratiques">Informations pratiques</a>
                        </li>
                        <li class="items">
                            <a href="locations-de-salles">Location de salles</a>
                        </li>
                        <li class="items">
                            <a href="administratif">Administratif</a>
                        </li>
                        <li class="items">
                            <a href="vie-sociale">Vie sociale</a>
                        </li>
                        <li class="items">
                            <a href="le-village">Le village</a>
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
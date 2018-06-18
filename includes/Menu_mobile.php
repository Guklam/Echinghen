<div class="container-menu-mobile">
    <div class="button_container" id="toggle">
        <span class="top"></span>
        <span class="middle"></span>
        <span class="bottom"></span>
    </div>
    <div class="overlay" id="overlay">
        <nav class="overlay-menu">
            <ul>
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
            echo '
            <li class="items">
                <a href="admin/dashboard.php">Administration</a>
            </li>';
            }
            else {}
            ?>
            </ul>
        </nav>
    </div>
</div>
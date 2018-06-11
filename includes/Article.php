<div class="carousel-cell">
    <div class="background" style="background: linear-gradient(rgba(0, 0, 0, 0.30), rgba(0, 0, 0, 0.45)), url(<?= $datas['image_article']; ?>);background-size: cover;"></div>
    <div class="text">
        <a class="title" target="_blank" href="#"><?= $datas['titre_article']; ?></a>
        <span class="texte-article"><?= $datas['contenu_article']; ?></span>
        <span class="date">Publié le <?php
        $date=$datas['date_publication'];
        $date = explode("-", $date);
        $newsdate=$date[2].'-'.$date[1].'-'.$date[0];
        echo $newsdate;
        ?></span>
        <a target="_blank" class="button suite" href="#">Lire la suite...</a>
    </div>
</div>
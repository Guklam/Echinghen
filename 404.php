<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Erreur 404</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <style>
        body {
            margin: 0px;
            padding: 0px;
        }

        .container-404 {
            height: 100vh;
            background: linear-gradient(rgba(71, 130, 255, 0.85), rgba(6, 57, 80, 0.67));
        }

        .container-404 .error-404 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            font-family: 'Montserrat';
            color: #ecf0f1;
        }

        .container-404 .error-404 .main-error {
            font-size: 9rem;
        }

        .container-404 .error-404 .text-error {
            font-size: 1.2rem;
        }

        .container-404 .error-404 .text-error a {
            color: #2c3e50;
        }

        .container-404 .arrow-back {
            padding: 10px;
            color: white;
            font-size: 2.2rem;
        }

        .container-404 .arrow-back i {
            cursor: pointer;
        }
        .container-404 a {
            cursor: pointer;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="container-404">
    <div class="error-404">
        <div class="main-error">404</div>
        <div class="text-error">
            <p>La page que vous rechercher à été déplacé ou n'existe plus.</p>
            <a onclick="window.history.back()">Retour à la page d'accueil</a>
        </div>
    </div>
    <div class="arrow-back">
        <i onclick="window.history.back()" class="fas fa-arrow-left"></i>
    </div>
</div>
</body>
</html>
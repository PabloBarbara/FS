<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title><?= $titre ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="js/Sommaire.js" defer></script>
</head>

<body>

    <div class="wrapper"></div>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-primary">
        <div class="container">
            <a class="navbar-brand" href="?route=accueil">Accueil</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="?route=manifeste"> Le Manifeste </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> Billets </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
                            <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
                            <li><a class="dropdown-item" href="#"> Submenu item 3 </a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="?route=nous"> Qui sommes-nous? </a></li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="?route=rejoindre"> Nous rejoindre </a></li>
                    <li class="nav-item"><a class="nav-link" href="https://discord.gg/F73BZyN" target="_blank"> Le discord <img src="img/discord.png" class="discord" alt=""></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"> Faire un don ! </a></li>

                </ul>
            </div>
        </div>
    </nav>

    <section class="pages">
        <div class="container-fluid">
            <?= $contenu ?>
        </div>
    </section>

    <footer>
        <div id="iconesFooter"><a href="https://twitter.com/ForceSolidaire" target="_blank"><i class="fab fa-twitter" id="twitter"></i></a><i class="fab fa-instagram" id="instagram"></i><i class="fab fa-facebook" id="facebook"></i>

        </div>
    </footer>

</body>

</html>
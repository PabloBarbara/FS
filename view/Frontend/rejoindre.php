<?php $this->titre = "Nous Rejoindre"; ?>

<!-- Contenu de la div Center -->
<div class="container-pages">
    <div class="rejoindre">
        <h1 class="center">Nous Rejoindre</h1>
        <img src="img/soulignement.png" alt="" class="soulignement">
        <p>La cotisation annuelle a été fixé à 10 euros. La cotisation minimale est la même pour tout le monde mais vous êtes invités à donner plus si vous le souhaitez.</p>
        <form method="post" action="index.php?route=ajoutMessage">
            <input type="text" id="Nom" name="Nom" placeholder="Nom*" required><br><br>
            <input type="text" id="Prénom" name="Prénom" placeholder="Prénom*" required><br><br>
            <input type="mail" id="Mail" name="Mail" placeholder="Mail*" required><br><br>
            <input type="tel" id="Téléphone" name="Téléphone" placeholder="Téléphone""><br><br>
            <input type="number" id="Département" name="Departement" placeholder="Département*" required><br><br>
            <input class="btn btn-primary" type="submit" id="rejoindre" value="Rejoindre" id="submit" name="submit">
        </form>
    </div>
</div>
<?php include('includes/header.php'); ?>

<div class="blog-header">
    <h1 class="blog-title">Laravel - Partie 2</h1>
    <p class="lead blog-description">Préparation des controllers et de la base de données</p>
</div>

<div class="row">

    <div class="col-sm-8 blog-main">

        <div id="auth">
            <h2>Rendu final</h2>

            <p>Par binômes, vous réaliserez une version plus complète du blog réalisé en suivant les exercices du cours.
                : <br>
                Vous devrez travailler via <strong>GitHub</strong>, le lien du repository sera à envoyer par mail</p>

            <ul>
                <li><strong>À l'adresse :</strong> reyno.willy@gmail.com</li>
                <li><strong>Objet :</strong> IIM-2020-A2-WEB1-Nom1-Nom2</li>
                <li><strong>Date de rendu :</strong> Dimanche 19 Février à 23h59 dernier délais.</li>
                <li><strong>Les retards seront pénalisés.</strong></li>
            </ul>


            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Consignes</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>Système de commentaires fonctionnel (2,5 points)</li>
                        <em>Voir les commentaires d'un article, les publier/modifier/supprimer</em>
                        <br>
                        <br>
                        <li>Upload de photo dans le formulaire de création de l'article (3 points)</li>
                        <em>La photo devra être affichée sur le site.</em>
                        <br>
                        <br>
                        <li>Possibilité de partager un article sur les réseaux sociaux (2 points)</li>
                        <br>
                        <li>Système de likes d'articles (2 points)</li>
                        <br>
                        <li>Page d'administration (3 points)</li>
                        <em>Accessible uniquement à certains utilisateurs via un middleware.</em>
                        <em>Possibilité d'y supprimer les articles et les commentaires</em>
                        <br>
                        <br>
                        <li>Design et fautes d'orthographe (4 points)</li>
                        <br>
                        <li>Formulaire de contact (2,5 points)</li>
                        <em>(Stocké en BDD, pas besoin d'envoyer un mail)</em>
                    </ul>

                    <p>Pensez à faire des seeders pour que l'intervenant puisse avoir du contenu en base de données !</p>

                </div>
            </div>

            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">Bonus</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>Messagerie entre membres (5 points)</li>
                    </ul>
                </div>
            </div>

        </div>


    </div><!-- /.blog-main -->

    <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
        <div data-spy="affix">

            <?php include('includes/sidebar.php'); ?>

        </div>
    </div><!-- /.blog-sidebar -->

</div><!-- /.row -->



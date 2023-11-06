<?php

namespace routes;

use controllers\ClientController;
use controllers\ProduitController;
use controllers\SampleWebController;
use routes\base\Route;
use utils\Template;

class Web
{
    function __construct()
    {
        $main = new SampleWebController();
        $client = new ClientController();
        $produit = new ProduitController();

        // Appel la méthode « home » dans le contrôleur $main.
        Route::Add('/', [$client, 'liste']);
        Route::Add('/rechercher', [$client, 'rechercher']);
        Route::Add('/client/{id}', [$client, 'fiche']);

        Route::Add('/commander/{id}', [$produit, 'commander']);
        Route::Add('/ajoutCommande/{id}', [$produit, 'ajoutCommande']);

        Route::Add('/adresse/{id}', [$client, 'adresse']);
        Route::Add('/ajoutAdresse/{id}', [$client, 'ajoutAdresse']);
        Route::Add('/suppAdresse/{idAdresse}/{idClient}', [$client, 'suppAdresse']);

        Route::Add('/contact/{id}', [$client, 'contact']);
        Route::Add('/ajoutContact/{id}', [$client, 'ajoutContact']);
        Route::Add('/suppContact/{idContact}/{idClient}', [$client, 'suppContact']);

        // Appel la fonction inline dans le routeur.
        // Utile pour du code très simple, où un tes, l'utilisation d'un contrôleur est préférable.
        Route::Add('/about', function () {
            return Template::render('views/global/about.php');
        });

        //        Exemple de limitation d'accès à une page en fonction de la SESSION.
        //        if (SessionHelpers::isLogin()) {
        //            Route::Add('/logout', [$main, 'home']);
        //        }
    }
}


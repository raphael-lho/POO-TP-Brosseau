<?php
namespace controllers;

use controllers\base\WebController;
use models\ProduitsModele;
use models\ClientsModele;
use utils\Template;

class ProduitController extends WebController
{
    private $produitModele;
    private $clientModele;

    function __construct()
    {
        $this->produitModele = new ProduitsModele;
        $this->clientModele = new clientsModele;
    }

    public function commander($id = "")
    {
        $clients = $this->clientModele->getByClientId($id);
        $produits = $this->produitModele->lesProduits();
        return Template::render(
            "views/liste/commander.php",
            array("produits" => $produits, "clients" => $clients)
        );
    }

    public function ajoutCommande($id = "")
    {
        
        $produits = $this->produitModele->affecterProduit($_POST["produit"], $id);
        return $this->redirect("/client/$id");
    }
}
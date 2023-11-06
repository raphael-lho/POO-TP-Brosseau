<?php

namespace models\classes;

use models\ClientsModele;

class Contact
{
    private string $idcontact;
    private string $idclient;
    private string $numero;
    private string $email;
    private string $nom;
    private ClientsModele $clientModele;

    public function __construct(){
        $this->clientModele = new ClientsModele();
    }

    public function leClient(): Client
    {
        return $this->clientModele->getByClientId($this->idclient);
    }

    public function getId(): string
    {
        return $this->idcontact;
    }

    public function setId(string $id): void
    {
        $this->idcontact = $id;
    }

    public function getIdClient(): string
    {
        return $this->idclient;
    }

    public function setIdClient(string $idclient): void
    {
        $this->idclient = $idclient;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): void
    {
        $this->numero = $numero;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }
}
<?php
namespace models;

use models\base\SQL;
use models\classes\Contact;

class ContactModele extends SQL
{
    public function __construct()
    {
        parent::__construct('contact', 'idcontact');
    }

    /**
     * Liste les contacts d'un client
     * @param string $idclient
     * @return Contact[]
     */
    public function lesContactsClient(string $idclient): array
    {
        $query = "SELECT * FROM contact WHERE idclient = ?";
        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([$idclient]);
        return $stmt->fetchAll(\PDO::FETCH_CLASS, Contact::class);
    }

    /**
     * Ajoute un contact en base pour le client $clientId
     * @param Contact $unContact
     * @return string
     */
    public function creerContactClient(Contact $unContact): string
    {
        $query = "INSERT INTO contact (idcontact, idclient, numero, email, nom) VALUE (NULL, ?, ?, ?, ?)";
        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([$unContact->getIdClient(), $unContact->getNumero(), $unContact->getEmail(), $unContact->getNom()]);
        return $this->getPdo()->lastInsertId();
    }

    public function suppContactClient(string $id)
    {
        $query = "DELETE FROM contact WHERE idcontact = ?";
        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([$id]);
    }
}
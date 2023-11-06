<div class="mx-20">
    <div class=" relative sm:rounded-lg ">
        <div class="card-body font-bold">
            Client / <?= $clients->getNom() ?> / Information
        </div>
    </div>
    <br>
    <div class=" relative sm:rounded-lg ">
        <h2 class="font-bold mt-2 ml-2">Données générales</h2>
        <br>
        <div class="grid grid-cols-2 gap-8">
            <div class=" relative sm:rounded-lg shadow-md">
                <h2 class="mt-2 ml-2 font-bold">Nom</h2>
                <p class="mt-2 ml-2 mb-2"><?= $clients->getNom() ?></p>
            </div>
            <div class=" relative sm:rounded-lg shadow-md">
                <h2 class="mt-2 ml-2 font-bold">Prénom</h2>
                <p class="mt-2 ml-2 mb-2"><?= $clients->getPrenom() ?></p>
            </div>
            <div class=" relative sm:rounded-lg shadow-md">
                <h2 class="mt-2 ml-2 font-bold">Téléphone</h2>
                <p class="mt-2 ml-2 mb-2"><?= $clients->getTelephone() ?></p>
            </div>
            <div class=" relative sm:rounded-lg shadow-md">
                <h2 class="mt-2 ml-2 font-bold">Email</h2>
                <p class="mt-2 ml-2 mb-2"><?= $clients->getEmail() ?></p>
            </div>
        </div>
    </div>
    <br><br>
    <div class=" relative sm:rounded-lg ">
        <div class="card-body font-bold">
            Les produits
        </div>
    </div>
    <br>
    <div class="shadow-md relative overflow-x-auto sm:rounded-lg ">
        <div class="card-body">
            <table class="w-full text-sm text-left">
                <tr>
                    <th class="px-6 py-3">Id</th>
                    <th class="px-6 py-3">Nom</th>
                    <th class="px-6 py-3">Description</th>
                    <th class="px-6 py-3">Prix</th>
                    <th class="py-3"><form action="/commander/<?= $clients->getId()?>"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">+ Commander</button></form></th>
                </tr>
                <?php 
                foreach ($clients->lesProduits() as $leProduit) { ?>
                    <tr>
                        <th class="px-6 py-3"> <?= $leProduit->getId(); ?> </th>
                        <th class="px-6 py-3"> <?= $leProduit->getNom(); ?> </th>
                        <th class="px-6 py-3"> <?php $chaine = $leProduit->getDescription();

                                if (strlen($chaine) > 10) {
                                    $chaine = substr($chaine, 0, 20).' ...';
                                }

                                echo $chaine; ?> </th>
                        <th> <?= $leProduit->getPrix(); ?> </th>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
    <br><br>
    <div class="shadow-md relative sm:rounded-lg ">
        <div class="card-body font-bold">
            Les adresses
        </div>
    </div>
    <br>
    <div class=" relative overflow-x-auto sm:rounded-lg ">
        <div class="card-body">
            <table class="w-full text-sm text-left">
                <tr>
                    <th class="px-6 py-3">Nom</th>
                    <th class="px-6 py-3">Rue</th>
                    <th class="px-6 py-3">Code Postal</th>
                    <th class="px-6 py-3">Ville</th>
                    <th class="px-6 py-3"><form action="/adresse/<?= $clients->getId()?>"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">+ Ajouter</button></form></th>
                </tr>
                <?php foreach ($clients->lesAdresses() as $lAdresse) { ?>
                    <tr>
                        <th class="px-6 py-3"> <?= $lAdresse->getNom(); ?> </th>
                        <th class="px-6 py-3"> <?= $lAdresse->getRue(); ?> </th>
                        <th class="px-6 py-3"> <?= $lAdresse->getCodePostal(); ?></th>
                        <th class="px-6 py-3"> <?= $lAdresse->getVille(); ?> </th>
                        <th class="px-6 py-3"> <a href="/suppAdresse/<?=$lAdresse->getId()?>/<?= $clients->getId()?>" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Supprimer</a></th>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
    <br><br>
    <div class=" relative sm:rounded-lg ">
        <div class="card-body font-bold">
            Les contacts
        </div>
    </div>
    <br>
    <div class=" relative overflow-x-auto sm:rounded-lg ">
        <div class="card-body">
            <table class="w-full text-sm text-left">
                <tr>
                    <th class="px-6 py-3">Nom contact</th>
                    <th class="px-6 py-3">Numéro</th>
                    <th class="px-6 py-3">Email</th>
                    <th class="px-6 py-3"><form action="/contact/<?= $clients->getId()?>"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">+ Ajouter</button></form></th>
                </tr>
                <?php foreach ($clients->lesContacts() as $LeContact) { ?>
                    <tr >
                        <th class="px-6 py-3"> <?= $LeContact->getNom(); ?> </th>
                        <th class="px-6 py-3"> <?= $LeContact->getNumero(); ?> </th>
                        <th class="px-6 py-3"> <?= $LeContact->getEmail(); ?></th>
                        <th class="px-6 py-3"> <a href="/suppContact/<?=$LeContact->getId()?>/<?= $clients->getId()?>" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Supprimer</a></th>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
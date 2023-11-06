<div class="card">
    <div class="card-body">
        <form action="/rechercher" method="post">   
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div style="margin-left: 40%; margin-right: 40%" class="sm:rounded-lg shadow-md">
                <input type="search" name="text" placeholder="Rechercher" required>
                <button type="submit">Rechercher</button>
            </div>
        </form>
    </div>
</div>
<br>
<div class="shadow-md relative overflow-x-auto sm:rounded-lg">
</div>
<br>
<div class="relative sm:rounded-lg shadow-md">
    <table class="w-full text-sm text-left text-gray-700 dark:text-gray-600">
        <tr>
            <th class="px-6 py-3">Id</th>
            <th class="px-6 py-3">Nom Prénom</th>
            <th class="px-6 py-3">email</th>
            <th class="px-6 py-3">Téléphone</th>
        </tr>
            <?php
                foreach ($clients as $leClient) {
                    echo '<tr>';
                    echo '<td class="px-6 py-2">' . $leClient->getId().'</td>';
                    echo '<td class="px-6 py-2">' . $leClient->getNom().' '. $leClient->getPrenom().'</td>';
                    echo '<td class="px-6 py-2">' . $leClient->getEmail().'</td>';
                    echo '<td class="px-6 py-2">' . $leClient->getTelephone().'</td>';
                    echo '<td class="px-0 py-2"> <a href=/client/'.$leClient->getId().'>Fiche</a> </td>';
                    echo '</tr>';
                }
            ?>
    </table>
    <?php
    if($page!=-1){ ?>
        <a href=?page=<?=$page-1?>><-Page précédente</a>
        <a href=?page=<?=$page+1?> class="absolute bottom-0 right-0">Page suivante-></a>
    <?php } ?>
    
</div>
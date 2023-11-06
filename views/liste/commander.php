<div class="w-full max-w-lg mt-10 ml-96">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="/ajoutCommande/<?= $clients->getId()?>" method="POST">
        <div class="inline-block relative w-64">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="produit">
                Produit :
            </label>
            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="produit">
                <?php
                foreach ($produits as $lePorduit) {
                    echo '<option value="' . $lePorduit->getId() . '">' . $lePorduit->getNom() . ' ' . $lePorduit->getPrix() . '€</option>';
                }
                ?>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 9">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
            </div>
        </div>
        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Commander
            </button>
        </div>
    </form>
</div>
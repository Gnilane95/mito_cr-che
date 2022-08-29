<?php
$title = "Accueil";
include ('partials/_header.php');

?>
<nav class="mb-28">
    <div class="relative">
        <img src="img/hero.jpg" alt="" class="w-screen h-screen ">
    </div>
    <div class="flex justify-between absolute top-0 bg-white w-full px-28 py-7">
        <div>
            <p class="font-bold text-lg">m<span class="text-red-500">i</span>to<span class="text-red-500">.</span><span class="italic">Crèche</span></p>
        </div>
        <div>
            <ul class="flex space-x-10 font-semibold">
                <li><a href="index.php">Home</a></li>
                <li><a href="backoffice.php">Back-office</a></li>
            </ul>
        </div>
    </div>
</nav>
<main>
    <section class="mb-28 flex justify-center space-x-20 mx-72 ">
        <div>
            <img src="img/jerry-wang-RwCP91RwZeM-unsplash.jpg" alt="" class="max-w-sm rounded-2xl shadow-lg">
        </div>
        <div>
            <h2 class="text-2xl text-red-500 font-black pb-5">Qui sommes nous ?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum consectetur praesentium voluptatem assumenda, dolor maiores dignissimos perspiciatis eum quasi officia dicta asperiores deleniti soluta. Inventore ratione delectus modi amet enim? Laboriosam accusantium dolore veniam quaerat deleniti totam possimus impedit ab enim incidunt iste voluptatum, eos architecto necessitatibus, eveniet, doloribus delectus! Doloribus natus dicta at, fugiat recusandae illo nemo.</p>
        </div>
    </section>
    <section class="mb-28 py-28 px-72 bg-gray-100">
        <h2 class="text-2xl text-center font-black pb-10">Pourquoi choisir Mito-Crèche ?</h2>
        <div class="grid grid-cols-3 text-center">
            <div>
                <h3 class="font-semibold text-lg text-red-500">Eveil</h3>
                <p class="font-semibold px-10 py-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam odio corporis eligendi dolore beatae quae.</p>
                <img src="img/eveiller.png" alt="" class="w-16 ml-32">
            </div>
            <div>
                <h3 class="font-semibold text-lg text-red-500">Sécurité</h3>
                <p class="font-semibold px-10 py-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam odio corporis eligendi dolore beatae quae.</p>
                <img src="img/agent-de-securite.png" alt="" class="w-16 ml-32">
            </div>
            <div>
                <h3 class="font-semibold text-lg text-red-500">Sérénité</h3>
                <p class="font-semibold px-10 py-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam odio corporis eligendi dolore beatae quae.</p>
                <img src="img/calme.png" alt="" class="w-16 ml-32">
            </div>
        </div>
    </section>
    <section class="mb-28 mx-72 flex justify-between">
        <div>
            <h2 class="text-2xl text-red-500 font-black pb-5 text-center">Horaires d'ouverture</h2>
            <p class="">
                <ul class="list-disc">
                    <li>Lundi et mardi : 07h30mn - 19h00mn</li>
                    <li>Mercredi : 07h30mn - 14h30mn</li>
                    <li>Samedi : 09h00mn - 14h30mn</li>
                </ul>
            </p>
        </div>
        <div>
            <h2 class="text-2xl text-red-500 font-black pb-5 text-center">Informations utiles</h2>
            <p>
                <ul>
                    <li>Adresse : 14 rue de l'Argonne, 76800 Saint-Etienne-du-Rouvray</li>
                    <li>Téléphone : 02 35 69 86 47</li>
                    <li>Email : mito_crèche@gmail.com</li>
                </ul>
            </p>
        </div>
    </section>
    <section class=" py-28 px-10 bg-gray-100">
        <div class="flex">
            <img src="img/alaric-sim-0N4UJja6jEU-unsplash.jpg" alt="" class="w-72">
            <img src="img/ana-klipper-t4B_JcUofvY-unsplash.jpg" alt="" class="w-72">
            <img src="img/andrew-seaman-0DDsnK0YKVU-unsplash.jpg" alt="" class="w-72">
            <img src="img/erika-fletcher-YfNWGrQI3a4-unsplash (1).jpg" alt="" class="w-72">
            <img src="img/gianluca-carenza-oq6-bzJ8yK4-unsplash (1).jpg" alt="" class="w-72">
        </div>
        <div class="flex">
            <img src="img/jelleke-vanooteghem-Aqd30KmCc3g-unsplash.jpg" alt="" class="w-72 h-52">
            <img src="img/jeremy-mcknight-MjggScWrwug-unsplash.jpg" alt="" class="w-72 h-52">
            <img src="img/jerry-wang-RwCP91RwZeM-unsplash.jpg" alt="" class="w-72 h-52">
            <img src="img/kelly-sikkema-JRVxgAkzIsM-unsplash.jpg" alt="" class="w-72 h-52">
            <img src="img/la-rel-easter-KuCGlBXjH_o-unsplash.jpg" alt="" class="w-72 h-52">
        </div>
        <div class="flex">
            <img src="img/luis-arias-ayH7wwVOtc0-unsplash.jpg" alt="" class="w-72 h-60">
            <img src="img/markus-spiske-OO89_95aUC0-unsplash.jpg" alt="" class="w-72 h-60">
            <img src="img/ryan-fields-Xz7MMD5tZwA-unsplash.jpg" alt="" class="w-72 h-60">
            <img src="img/sandy-millar-nuS2GDpCDoI-unsplash.jpg" alt="" class="w-72 h-60">
            <img src="img/tanaphong-toochinda-GagC07wVvck-unsplash.jpg" alt="" class="w-72 h-60">
        </div>
    </section>
</main>


<?php
include ('partials/_footer.php');
?>
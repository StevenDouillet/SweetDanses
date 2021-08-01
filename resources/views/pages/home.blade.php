@extends('layouts.app')

@section('content')

<div class="header-banner">
    <p class="light-text">Sweet Dances, association créée en juillet 2011.</p>
    <h1>Son but, vous apprendre à danser dans une ambiance super conviviale.</h1>
    <p class="light-text">Oubliez le stress de la journée, venez vous défouler et retrouver vos camarades danseurs.</p>
    <a href="/danses" class="sw-button">Découvrir nos danses</a>
</div>

<div class="organisation">
    <h2>Notre organisation</h2>
    <p>Une équipe de bénévoles actifs œuvre pour vous</p>
    <ul>
        <li>Présidence : machin</li>
        <li>Finance : machin</li>
        <li>Secrétariat : machin</li>
    </ul>
    <p>Et des membres actifs au combien importants dans notre vie associative !</p>
</div>

<div class="container mx-auto teachers">
    <p>Une équipe d’enseignants pour vous satisfaire</p>
    <div class="flex flex-wrap">
        <div class="md:w-1/2 lg:w-1/3 py-4 px-4" >
            <div class=" ">
                <a>
                    <div class="bg-white relative shadow p-2 rounded-lg text-gray-800 hover:shadow-lg">
                        <img src="https://www.fizzer.com/wp-content/uploads/champ-tulipes-pays-bas-scaled.jpg" class="h-32 rounded-lg w-full object-cover">
                        <div class="flex justify-center">
                            <img src="https://resize-elle.ladmedia.fr/r/625,,forcex/crop/625,625,center-middle,forcex,ffffff/img/var/plain_site/storage/images/people/la-vie-des-people/news/catherine-deneuve-de-retour-sur-les-ecrans-elle-est-toujours-aussi-vive-3923603/94764856-1-fre-FR/Catherine-Deneuve-de-retour-sur-les-ecrans-Elle-est-toujours-aussi-vive.jpg" class="rounded-full -mt-6 border-4 object-center object-cover border-white mr-2 h-16 w-16">
                        </div>
                        <div class="py-2 px-2">
                            <div class=" font-bold font-title text-center">Christine</div>

                            <div class="text-sm font-light text-center my-2">Danses en ligne</div>
                        </div>
                    </div>
                </a>

            </div>
        </div>

        <div class="md:w-1/2 lg:w-1/3 py-4 px-4">
            <div class=" ">
                <a>
                    <div class="bg-white relative shadow p-2 rounded-lg text-gray-800 hover:shadow-lg">
                        <img src="https://shotkit.com/wp-content/uploads/2020/08/night-landscape-photography-featured.jpg" class="h-32 rounded-lg w-full object-cover">
                        <div class="flex justify-center">
                            <img src="https://resize-elle.ladmedia.fr/rcrop/796,1024/img/var/plain_site/storage/images/societe/news/francois-hollande-le-president-ne-peut-pas-y-arriver-seul-3890081/94019018-1-fre-FR/Francois-Hollande-Le-president-ne-peut-pas-y-arriver-seul.jpg" class="rounded-full -mt-6 border-4 object-center object-cover border-white mr-2 h-16 w-16">
                        </div>
                        <div class="py-2 px-2">
                            <div class=" font-bold font-title text-center">Alexis</div>

                            <div class="text-sm font-light text-center my-2">Danses de société, Salsa et Rock</div>
                        </div>
                    </div>
                </a>

            </div>
        </div>

        <div class="md:w-1/2 lg:w-1/3 py-4 px-4">
            <div class=" ">
                <a>
                    <div class="bg-white relative shadow p-2 rounded-lg text-gray-800 hover:shadow-lg">
                        <img src="https://wallpapercave.com/wp/wp2033056.png" class="h-32 rounded-lg w-full object-cover">
                        <div class="flex justify-center">
                            <img src="data:image/jpeg;base64,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" class="rounded-full -mt-6 border-4 object-center object-cover border-white mr-2 h-16 w-16">
                        </div>
                        <div class="py-2 px-2">
                            <div class=" font-bold font-title text-center">Inconnu</div>

                            <div class="text-sm font-light text-center my-2">Bachata</div>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>
</div>
@endsection

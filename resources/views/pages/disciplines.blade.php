@extends('layouts.app')

@section('content')

<div class="container mx-auto my-5">
    <div class="relative rounded-lg flex flex-col md:flex-row items-center md:shadow-xl md:h-72 mx-2 mt-10">

        <div class="z-0 order-1 md:order-2 relative w-full md:w-2/5 h-80 md:h-full overflow-hidden rounded-lg md:rounded-none md:rounded-r-lg">
            <div class="absolute inset-0 w-full h-full object-fill object-center bg-cover bg-bottom" style="background-image: url( https://blog.globusjourneys.com/wp-content/uploads/2020/09/Argentina-III-The-God-of-Tango.jpg ); background-blend-mode: multiply;"></div>
            <div class="md:hidden absolute inset-0 h-full p-6 pb-6 flex flex-col-reverse justify-start items-start bg-gradient-to-b from-transparent via-transparent to-gray-900">
                <h3 class="w-full font-bold text-2xl text-white leading-tight mb-2">Danses de Société</h3>
                <h4 class="w-full text-xl text-gray-100 leading-tight">La Danse de Société est accessible à tous, elle favorise la convivialité, le relationnel, le lien social</h4>
            </div>
            <svg class="hidden md:block absolute inset-y-0 h-full w-24 fill-current text-white -ml-12" viewBox="0 0 100 100" preserveAspectRatio="none">
                <polygon points="50,0 100,0 50,100 0,100" />
            </svg>
        </div>

        <div class="z-10 order-2 md:order-1 w-full h-full md:w-3/5 flex items-center -mt-6 md:mt-0">
            <div class="p-8 md:pr-18 md:pl-14 md:py-12 mx-2 md:mx-0 h-full bg-white rounded-lg md:rounded-none md:rounded-l-lg shadow-xl md:shadow-none">
                <h3 class="hidden md:block font-bold text-2xl text-gray-700">Danses de Société</h3>
                <p class="text-gray-600 text-justify mt-5">
                    Nous retrouvons sous ce terme de danses de société : Valse viennoise, Valse anglaise, Tango,
                    Chachacha, Rumba, Paso Doble, Quick step
                    La danse de société vous permettra de travailler votre tenue corporelle, d’exprimer vos émotions et vous
                    sentir vous envoler sur les pistes de danse.
                </p>
            </div>
        </div>
    </div>
    <div class="relative rounded-lg flex flex-col md:flex-row items-center md:shadow-xl md:h-72 mx-2 mt-10">

        <div class="z-0 order-1 md:order-2 relative w-full md:w-2/5 h-80 md:h-full overflow-hidden rounded-lg md:rounded-none md:rounded-r-lg">
            <div class="absolute inset-0 w-full h-full object-fill object-center bg-cover bg-bottom" style="background-image: url( https://ecitybeat.com/wp-content/uploads/2018/03/Rockn.jpg ); background-blend-mode: multiply;"></div>
            <div class="md:hidden absolute inset-0 h-full p-6 pb-6 flex flex-col-reverse justify-start items-start bg-gradient-to-b from-transparent via-transparent to-gray-900">
                <h3 class="w-full font-bold text-2xl text-white leading-tight mb-2">Rock’n’roll</h3>
                <h4 class="w-full text-xl text-gray-100 leading-tight">La Danse de Société est accessible à tous, elle favorise la convivialité, le relationnel, le lien social</h4>
            </div>
            <svg class="hidden md:block absolute inset-y-0 h-full w-24 fill-current text-white -ml-12" viewBox="0 0 100 100" preserveAspectRatio="none">
                <polygon points="50,0 100,0 50,100 0,100" />
            </svg>
        </div>

        <div class="z-10 order-2 md:order-1 w-full h-full md:w-3/5 flex items-center -mt-6 md:mt-0">
            <div class="p-8 md:pr-18 md:pl-14 md:py-12 mx-2 md:mx-0 h-full bg-white rounded-lg md:rounded-none md:rounded-l-lg shadow-xl md:shadow-none">
                <h3 class="hidden md:block font-bold text-2xl text-gray-700">Rock’n’roll</h3>
                <p class="text-gray-600 text-justify mt-5">
                    Cette danse est très connue dans le monde depuis de nombreuses années et ne se démode pas.
                    Différents styles existent : rock à 4 temps, 6 temps, rock sauté, rock acrobatique, en social ou en compétition,
                    il y en a pour tout le monde. Venez vous déchainer sur des rythmes variés, vous allez travailler votre cardio,
                    le rock est un sport à part entière.
                </p>
            </div>
        </div>
    </div>
    <div class="relative rounded-lg flex flex-col md:flex-row items-center md:shadow-xl md:h-72 mx-2 mt-10">

        <div class="z-0 order-1 md:order-2 relative w-full md:w-2/5 h-80 md:h-full overflow-hidden rounded-lg md:rounded-none md:rounded-r-lg">
            <div class="absolute inset-0 w-full h-full object-fill object-center bg-cover bg-bottom" style="background-image: url( https://images.rtl.fr/~c/2000v2000/rtl/www/1295082-un-festival-de-musique-country-aux-etats-unis-californie.jpg ); background-blend-mode: multiply;"></div>
            <div class="md:hidden absolute inset-0 h-full p-6 pb-6 flex flex-col-reverse justify-start items-start bg-gradient-to-b from-transparent via-transparent to-gray-900">
                <h3 class="w-full font-bold text-2xl text-white leading-tight mb-2">Danse en ligne et Country</h3>
            </div>
            <svg class="hidden md:block absolute inset-y-0 h-full w-24 fill-current text-white -ml-12" viewBox="0 0 100 100" preserveAspectRatio="none">
                <polygon points="50,0 100,0 50,100 0,100" />
            </svg>
        </div>

        <div class="z-10 order-2 md:order-1 w-full h-full md:w-3/5 flex items-center -mt-6 md:mt-0">
            <div class="p-8 md:pr-18 md:pl-14 md:py-12 mx-2 md:mx-0 h-full bg-white rounded-lg md:rounded-none md:rounded-l-lg shadow-xl md:shadow-none">
                <h3 class="hidden md:block font-bold text-2xl text-gray-700">Danse en ligne et Country</h3>
                <p class="text-gray-600 text-justify mt-5">
                    La danse en ligne est conviviale et accessible à tous. Elle nous entraîne sur des rythmes variés - par
                    exemple le meringue, la country, le Chacha, le West Coast, le disco, la bachata, le rock ….
                    La particularité de cette danse est qu'elle peut se danser en solo, en couple, en team (équipe), ...
                    Cours très convivial, joyeux, animé. Venez rejoindre un cours de danse en ligne, vous ne serez pas déçu.
                </p>
            </div>
        </div>
    </div>
    <div class="relative rounded-lg flex flex-col md:flex-row items-center md:shadow-xl md:h-72 mx-2 mt-10">

        <div class="z-0 order-1 md:order-2 relative w-full md:w-2/5 h-80 md:h-full overflow-hidden rounded-lg md:rounded-none md:rounded-r-lg">
            <div class="absolute inset-0 w-full h-full object-fill object-center bg-cover bg-bottom" style="background-image: url( https://www.terdav.com/Content/img/Produits/produit/CUB/563635.ori.jpg ); background-blend-mode: multiply;"></div>
            <div class="md:hidden absolute inset-0 h-full p-6 pb-6 flex flex-col-reverse justify-start items-start bg-gradient-to-b from-transparent via-transparent to-gray-900">
                <h3 class="w-full font-bold text-2xl text-white leading-tight mb-2">Salsa cubaine</h3>
            </div>
            <svg class="hidden md:block absolute inset-y-0 h-full w-24 fill-current text-white -ml-12" viewBox="0 0 100 100" preserveAspectRatio="none">
                <polygon points="50,0 100,0 50,100 0,100" />
            </svg>
        </div>

        <div class="z-10 order-2 md:order-1 w-full h-full md:w-3/5 flex items-center -mt-6 md:mt-0">
            <div class="p-8 md:pr-18 md:pl-14 md:py-12 mx-2 md:mx-0 h-full bg-white rounded-lg md:rounded-none md:rounded-l-lg shadow-xl md:shadow-none">
                <h3 class="hidden md:block font-bold text-2xl text-gray-700">Salsa cubaine</h3>
                <p class="text-gray-600 text-justify mt-5">
                    La salsa(qui signifie littéralement “sauce” en espagnol, mais aussi “charme”,
                    “piquant” au sens figuré) fait référence à un genre musical et à
                    une danse aux racines cubaines.
                    La salsa est une danse improvisée constituée de pas de base, que l’on danse
                    généralement à deux et où l’homme guide traditionnellement la femme. La
                    salsa peut aussi se pratiquer seul, ou à plusieurs : en ligne, à plusieurs
                    couples (rueda).
                </p>
            </div>
        </div>
    </div>
    <div class="relative rounded-lg flex flex-col md:flex-row items-center md:shadow-xl md:h-72 mx-2 mt-10">

        <div class="z-0 order-1 md:order-2 relative w-full md:w-2/5 h-80 md:h-full overflow-hidden rounded-lg md:rounded-none md:rounded-r-lg">
            <div class="absolute inset-0 w-full h-full object-fill object-center bg-cover bg-bottom" style="background-image: url( /images/disciplines/bachata_danse.jpg ); background-blend-mode: multiply;"></div>
            <div class="md:hidden absolute inset-0 h-full p-6 pb-6 flex flex-col-reverse justify-start items-start bg-gradient-to-b from-transparent via-transparent to-gray-900">
                <h3 class="w-full font-bold text-2xl text-white leading-tight mb-2">Bachata</h3>
            </div>
            <svg class="hidden md:block absolute inset-y-0 h-full w-24 fill-current text-white -ml-12" viewBox="0 0 100 100" preserveAspectRatio="none">
                <polygon points="50,0 100,0 50,100 0,100" />
            </svg>
        </div>

        <div class="z-10 order-2 md:order-1 w-full h-full md:w-3/5 flex items-center -mt-6 md:mt-0">
            <div class="p-8 md:pr-18 md:pl-14 md:py-12 mx-2 md:mx-0 h-full bg-white rounded-lg md:rounded-none md:rounded-l-lg shadow-xl md:shadow-none">
                <h3 class="hidden md:block font-bold text-2xl text-gray-700">Bachata</h3>
                <p class="text-gray-600 text-justify mt-5">
                    Depuis les années 80, la musique latine type bachata est diffusée sur les radios et la danse est apparue par la suite.
                    Elle est sur une base de 8 temps et les couples peuvent évoluer en jouant avec la musique et faire parler leur corps.
                    C'est une danse qui a des variantes, fusion, sensuelle, ...
                    A Sweet'danses, vous apprendrez principalement la bachata fusion avec un aperçu des autres possibilités
                    en fin de première année et surtout en intermédiaire.
                </p>
            </div>
        </div>
    </div>
    <div class="relative rounded-lg flex flex-col md:flex-row items-center md:shadow-xl md:h-72 mx-2 mt-10">

        <div class="z-0 order-1 md:order-2 relative w-full md:w-2/5 h-80 md:h-full overflow-hidden rounded-lg md:rounded-none md:rounded-r-lg">
            <div class="absolute inset-0 w-full h-full object-fill object-center bg-cover bg-bottom" style="background-image: url( /images/fond_tango-argentin.jpg ); background-blend-mode: multiply;"></div>
            <div class="md:hidden absolute inset-0 h-full p-6 pb-6 flex flex-col-reverse justify-start items-start bg-gradient-to-b from-transparent via-transparent to-gray-900">
                <h3 class="w-full font-bold text-2xl text-white leading-tight mb-2">Tango Argentin</h3>
            </div>
            <svg class="hidden md:block absolute inset-y-0 h-full w-24 fill-current text-white -ml-12" viewBox="0 0 100 100" preserveAspectRatio="none">
                <polygon points="50,0 100,0 50,100 0,100" />
            </svg>
        </div>

        <div class="z-10 order-2 md:order-1 w-full h-full md:w-3/5 flex items-center -mt-6 md:mt-0">
            <div class="p-8 md:pr-18 md:pl-14 md:py-12 mx-2 md:mx-0 h-full bg-white rounded-lg md:rounded-none md:rounded-l-lg shadow-xl md:shadow-none">
                <h3 class="hidden md:block font-bold text-2xl text-gray-700">Tango Argentin</h3>
                <p class="text-gray-600 text-justify mt-5">
                    Le tango est une danse de couple, d’improvisation, sensuelle et complexe, avec des règles et des codes. Il n'y a pas de figures mais plutôt des éléments techniques qui portent des noms, et une technique qu'il faut apprendre afin de pouvoir danser au gré de l'interprétation et de façon fluide par la suite, en compagnie du partenaire. Quelques mots suffisent à illustrer le propos: abanico, gancho, boleo, sentada, corridita, traspie, finta, aguja, lapiz, ochos, caminata, base cruzada, ocho cortado, punteo, barrida, bicicleta, enlazado, enrosque…
                </p>
            </div>
        </div>
    </div>
    <div class="relative rounded-lg flex flex-col md:flex-row items-center md:shadow-xl md:h-72 mx-2 mt-10">

        <div class="z-0 order-1 md:order-2 relative w-full md:w-2/5 h-80 md:h-full overflow-hidden rounded-lg md:rounded-none md:rounded-r-lg">
            <div class="absolute inset-0 w-full h-full object-fill object-center bg-cover bg-bottom" style="background-image: url( /images/disciplines/kizomba_danse.jpg ); background-blend-mode: multiply;"></div>
            <div class="md:hidden absolute inset-0 h-full p-6 pb-6 flex flex-col-reverse justify-start items-start bg-gradient-to-b from-transparent via-transparent to-gray-900">
                <h3 class="w-full font-bold text-2xl text-white leading-tight mb-2">Kizomba</h3>
            </div>
            <svg class="hidden md:block absolute inset-y-0 h-full w-24 fill-current text-white -ml-12" viewBox="0 0 100 100" preserveAspectRatio="none">
                <polygon points="50,0 100,0 50,100 0,100" />
            </svg>
        </div>

        <div class="z-10 order-2 md:order-1 w-full h-full md:w-3/5 flex items-center -mt-6 md:mt-0">
            <div class="p-8 md:pr-18 md:pl-14 md:py-12 mx-2 md:mx-0 h-full bg-white rounded-lg md:rounded-none md:rounded-l-lg shadow-xl md:shadow-none">
                <h3 class="hidden md:block font-bold text-2xl text-gray-700">Kizomba</h3>
                <p class="text-gray-600 text-justify mt-5">
                    Danse très sensuelle, la musique et la danse viennent d'Angola, il s'agit d'un dérivé de la Semba.
                    La musique est relativement lente et il y a un véritable jeu entre le cavalier et la cavalière et la musique.
                    Il faut se lancer, c'est une danse très agréable et la portée de tous.
                </p>
            </div>
        </div>
    </div>
</div>

@endsection

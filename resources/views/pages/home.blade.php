@extends('layouts.app')

@section('content')

<div class="header-banner">
    <p class="light-text">Sweet'Danses, association de Sérézin du Rhône créée en juillet 2011.</p>
    <h1>Son but, vous apprendre à danser dans une ambiance super conviviale.</h1>
    <p class="light-text">Oubliez le stress de la journée, venez vous défouler et retrouver vos camarades danseurs.</p>
    <a href="/danses" class="sw-button">Découvrir nos danses</a>
</div>

<div class="organisation">
    <h2>Notre organisation</h2>
    <p>Une équipe de bénévoles actifs œuvre pour vous</p>
    <ul>
        <li>Présidente : Christine</li>
        <li>Trésorière : Coralie</li>
        <li>Secrétaire : Ghyslaine</li>
    </ul>
    <p>Et des membres actifs au combien importants dans notre vie associative !</p>
</div>

<div class="container mx-auto teachers mt-20">
    <p>Une équipe d’enseignants pour vous satisfaire</p>
    <div class="flex flex-wrap">

        <div class="md:w-1/2 lg:w-1/3 py-4 px-4">
            <div class=" ">
                <a>
                    <div class="bg-white relative shadow p-2 rounded-lg text-gray-800 hover:shadow-lg">
                        <img src="/images/fond_alexis.jpg" class="h-32 rounded-lg w-full object-cover">
                        <div class="flex justify-center">
                            <img src="/images/alexis.png" class="rounded-full -mt-6 border-4 object-center object-cover border-white mr-2 h-16 w-16">
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
                        <img src="/images/fond_bachata.jpg" class="h-32 rounded-lg w-full object-cover">
                        <div class="flex justify-center">
                            <img src="/images/Marvin.jpg" class="rounded-full -mt-6 border-4 object-center object-cover border-white mr-2 h-16 w-16">
                        </div>
                        <div class="py-2 px-2">
                            <div class=" font-bold font-title text-center">Marvin</div>

                            <div class="text-sm font-light text-center my-2">Salsa & Bachata</div>
                        </div>
                    </div>
                </a>

            </div>
        </div>

        <div class="md:w-1/2 lg:w-1/3 py-4 px-4">
            <div class=" ">
                <a>
                    <div class="bg-white relative shadow p-2 rounded-lg text-gray-800 hover:shadow-lg">
                        <img src="/images/fond_christine.jpg" class="h-32 rounded-lg w-full object-cover">
                        <div class="flex justify-center">
                            <img src="/images/christine.jpg" class="rounded-full -mt-6 border-4 object-center object-cover border-white mr-2 h-16 w-16">
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
                        <img src="/images/fond_tango-argentin.jpg" class="h-32 rounded-lg w-full object-cover">
                        <div class="flex justify-center">
                            <img src="/images/Djamel.jpg" class="rounded-full -mt-6 border-4 object-center object-cover border-white mr-2 h-16 w-16">
                        </div>
                        <div class="py-2 px-2">
                            <div class=" font-bold font-title text-center">Djamel</div>

                            <div class="text-sm font-light text-center my-2">Tango Argentin</div>
                        </div>
                    </div>
                </a>

            </div>
        </div>

        <div class="md:w-1/2 lg:w-1/3 py-4 px-4">
            <div class=" ">
                <a>
                    <div class="bg-white relative shadow p-2 rounded-lg text-gray-800 hover:shadow-lg">
                        <img src="/images/fond_stephen.jpg" class="h-32 rounded-lg w-full object-cover">
                        <div class="flex justify-center">
                            <img src="/images/userrandom.png" class="rounded-full -mt-6 border-4 object-center object-cover border-white mr-2 h-16 w-16">
                        </div>
                        <div class="py-2 px-2">
                            <div class=" font-bold font-title text-center">   </div>

                            <div class="text-sm font-light text-center my-2">Kizomba</div>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>
</div>

<div class="text-lg font-semibold no-underline text-header text-center m-20">
    <img src="/images/ffd.png" alt="logo de la fédération française de danse" height="70" width="70" style="display: inline-block">
    <span style="display: inline-block">
        <span class="logo-color-2">Sweet'Danses est une association rattachée à la fédération française de danse</span>
    </span>
</div>

@endsection

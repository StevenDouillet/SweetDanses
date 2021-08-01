@extends('layouts.app')

@section('content')

<div class="container mx-auto prices-info-container">
    <p>Vous pouvez directement vous inscrire en suivant les instructions sur le lien suivant : </p>
    <a href="https://forms.gle/uqeaeeHNUsC3RNDTA">https://forms.gle/uqeaeeHNUsC3RNDTA</a>
</div>

<div class="flex flex-col items-center justify-center mt-14 space-y-8 lg:flex-row lg:items-stretch lg:space-x-8 lg:space-y-0">
    <section class="flex flex-col w-full max-w-sm p-12 space-y-6 bg-white rounded-lg shadow-md">
        <!-- Price -->
        <div class="flex-shrink-0">
            <div class="text-3xl font-medium tracking-tight text-center">199 euros*</div>
            <div class="text-gray-400 text-center">pour l'année entière</div>
        </div>

        <!--  -->
        <div class="flex-shrink-0 pb-6 space-y-2 border-b">
            <h2 class="text-2xl font-normal">Tarif individuel</h2>
        </div>

        <!-- Features -->
        <ul class="flex-1 space-y-4">
            <li class="flex items-start">
                <span class="ml-3 text-base font-medium">269€ pour deux danses*</span>
            </li>
            <li class="flex items-start">
                <span class="ml-3 text-base font-medium">Puis 30€ par cours supplémentaire</span>
            </li>
        </ul>

        <!-- Button -->
        <div class="flex-shrink-0 pt-4 text-center">
            <a href="#" class="small-sw-button">Demander un essai gratuit</a>
        </div>
    </section>
    <section class="flex flex-col w-full max-w-sm p-12 space-y-6 bg-white rounded-lg shadow-md">
        <!-- Price -->
        <div class="flex-shrink-0">
            <div class="text-3xl font-medium tracking-tight text-center">378 euros*</div>
            <div class="text-gray-400 text-center">pour l'année entière</div>
        </div>

        <!--  -->
        <div class="flex-shrink-0 pb-6 space-y-2 border-b">
            <h2 class="text-2xl font-normal">Tarif couple</h2>
        </div>

        <!-- Features -->
        <ul class="flex-1 space-y-4">
            <li class="flex items-start">
                <span class="ml-3 text-base font-medium">523€ pour deux danses*</span>
            </li>
            <li class="flex items-start">
                <span class="ml-3 text-base font-medium">Puis 50€ par cours supplémentaire</span>
            </li>
        </ul>

        <!-- Button -->
        <div class="flex-shrink-0 pt-4 text-center">
            <a href="#" class="small-sw-button">Demander un essai gratuit</a>
        </div>
    </section>
</div>

<div class="container mx-auto prices-asterix-container">
    <p>*Prix comprenant 10€ de cotisation à l'association et 19€ de cotisation FFD</p>
</div>

@endsection

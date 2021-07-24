@extends('layouts.app')

@section('content')

<div class="flex flex-col items-center justify-center mt-16 space-y-8 lg:flex-row lg:items-stretch lg:space-x-8 lg:space-y-0">
    <section class="flex flex-col w-full max-w-sm p-12 space-y-6 bg-white rounded-lg shadow-md">
        <!-- Price -->
        <div class="flex-shrink-0">
            <div class="text-3xl font-medium tracking-tight">199 euros</div>
            <div class="text-gray-400">pour l'année entière</div>
        </div>

        <!--  -->
        <div class="flex-shrink-0 pb-6 space-y-2 border-b">
            <h2 class="text-2xl font-normal">Tarif individuel</h2>
        </div>

        <!-- Features -->
        <ul class="flex-1 space-y-4">
            <li class="flex items-start">
                <span class="ml-3 text-base font-medium">269€ pour deux danses</span>
            </li>
            <li class="flex items-start">
                <span class="ml-3 text-base font-medium">Ensuite 30€ par cours supplémentaires</span>
            </li>
            <li class="flex items-start">
                <span class="ml-3 text-base font-medium">Prévoir 19€ de cotisation FFD</span>
            </li>
        </ul>

        <!-- Button -->
        <div class="flex-shrink-0 pt-4">
            <button
                class="p-5 inline-flex items-center justify-center w-full max-w-xs px-4 py-2 rounded-full text-gray-100 bgc-pink">Demander un essai gratuit</button>
        </div>
    </section>
    <section class="flex flex-col w-full max-w-sm p-12 space-y-6 bg-white rounded-lg shadow-md">
        <!-- Price -->
        <div class="flex-shrink-0">
            <div class="text-3xl font-medium tracking-tight">378 euros</div>
            <div class="text-gray-400">pour l'année entière</div>
        </div>

        <!--  -->
        <div class="flex-shrink-0 pb-6 space-y-2 border-b">
            <h2 class="text-2xl font-normal">Tarif couple</h2>
        </div>

        <!-- Features -->
        <ul class="flex-1 space-y-4">
            <li class="flex items-start">
                <span class="ml-3 text-base font-medium">523€ pour deux danses</span>
            </li>
            <li class="flex items-start">
                <span class="ml-3 text-base font-medium">Ensuite 50€ par cours supplémentaires</span>
            </li>
            <li class="flex items-start">
                <span class="ml-3 text-base font-medium">Prévoir 38€ de cotisation FFD</span>
            </li>
        </ul>

        <!-- Button -->
        <div class="flex-shrink-0 pt-4">
            <button
                class="p-5 inline-flex items-center justify-center w-full max-w-xs px-4 py-2 rounded-full text-gray-100 bgc-pink">Demander un essai gratuit</button>
        </div>
    </section>
</div>

@endsection

{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
 --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="alert alert-info">
            Bienvenue {{ Auth::user()->name }}, vous êtes connecté.
        </div>
        <p>Commencez par ajouter votre ou vos véhicules.</p>
        <a href="#" class="btn btn-primary">Ajouter un véhicule</a>
    </div>
@endsection

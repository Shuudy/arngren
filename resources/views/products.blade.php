@extends('layouts.app')

@section('body')
<x-navbar/>
<div class="page-main">    

    <div class="flex">

        <div class="categories">
            <span>Catégories</span>
            <a href="#" class="categorie">Catégorie 1</a>
            <a href="#" class="categorie">Catégorie 2</a>
            <a href="#" class="categorie">Catégorie 3</a>
        </div>
        <div class="page-right">
            <h1>Nos produits</h1>
            <div class="products">

                @for($i = 0; $i < 10; $i++)
                <div class="product">

                    <a class="product-image" href="{{ route('product') }}">
                        <img src="https://www.kompressor-bike.com/wp-content/uploads/2020/09/velo-vtt.png" alt="">
                    </a>
                    <div class="product-infos">
                        <div class="product-title">
                            Un produit de test
                        </div>
                        <div class="product-price">
                            24.99 €
                        </div>
                        <a class="button" href="{{ route('product') }}">En savoir plus</a>
                    </div>

                </div>
                @endfor                
            </div>
            <div class="paginations">
                <a href="#" class="paginations-page">Précédent</a>
                <a href="#" class="paginations-page active">1</a>
                <a href="#" class="paginations-page">2</a>
                <a href="#" class="paginations-page">3</a>
                <a href="#" class="paginations-page">Suivant</a>
            </div>

        </div>        
    </div>
    
</div>
@endsection
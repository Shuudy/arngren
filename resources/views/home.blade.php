@extends('layouts.app')

@section('body')
<x-navbar/>
<x-hero/>

<div class="section" id="about">
    <div class="section-content">
        <div class="section-left">
            <img src="https://akanea.com/wp-content/uploads/2023/04/exemple-entrepot-sous-douane.jpg" alt="">
        </div>

        <div class="section-right">
            <div class="section-title">Découvrez notre univers de produits</div>
            <div class="section-subtitle">Depuis 1988, nous nous engageons à fournir à nos clients une large gamme de produits de qualité, allant des vélos aux tondeuses, en passant par des voitures et des équipements divers. Chez ARNGREN, notre mission est de rendre vos projets accessibles et réussis.</div>
        </div>
    </div>
</div>

<div class="section-product">
    <div class="section-product-content">
        <div class="section-product-title">Nos produits les plus vendus</div>
        <div class="section-product-subtitle">Découvrez les meilleurs choix, une large sélection de produit, pour vos besoins les plus personnels</div>

        <div class="section-product-products products">
            @for($i = 0; $i < 4; $i++)
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

        <div class="section-product-button">
            <a href="{{ route('products') }}" class="button">Voir plus</a>
        </div>
    </div>
</div>
<x-footer absolute="no"/>
@endsection
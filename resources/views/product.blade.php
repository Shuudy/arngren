@extends('layouts.app')

@section('body')
<x-navbar/>

<div class="page-main">    

    <div class="flex flex-jc">     

        <div class="productd-image">
            <div class="productd-image-big">
                <img src="https://www.kompressor-bike.com/wp-content/uploads/2020/09/velo-vtt.png" alt="">
            </div>
            <div class="productd-image-smalls">
                @for($i = 0; $i < 4; $i++)
                <div class="productd-image-small">
                    <img src="https://www.kompressor-bike.com/wp-content/uploads/2020/09/velo-vtt.png" alt="">
                </div>
                @endfor
            </div>
        </div>

        <div class="productd-infos">
            
            <div class="productd-title">Un produit de test</div>
            <div class="productd-price">24.99 €</div>   

            <a href="#" class="button">Acheter l'article</a>

            <div class="productd-description">
                Un super produit de test
            </div>

        </div>

    </div>
    
</div>
<x-footer/>
@endsection
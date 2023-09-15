@extends('layouts.app')


@section('title', 'Accueil')

@section('content')

    <!-- Navbar -->
    <header id="accueil">
        <x-navbar></x-navbar>
    </header>


    <div class="">
      
<section id='section1'>
    <div class="container-fluid p-0">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-interval="2000" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="gradient-overlay"></div>
                    <img src="/medias/carousel1.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-flex justify-content-center align-items-center flex-column"  style="margin-bottom: 100px;">
                        <h1>Découvrez votre prochaine session de créativité</h1>
                        <p>Some representative placeholder content for the first slide.</p>
                        <form class="input-group w-50 mt-3">
                            <select class="form-select" aria-label="Catégorie">
                                <option value="toutes">Catégories</option>
                                <option value="cat1">Catégorie 1</option>
                                <option value="cat2">Catégorie 2</option>
                                <option value="cat3">Catégorie 3</option>
                            </select>
                            <button class="btn btn-danger" type="submit">Rechercher</button>
                        </form>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="gradient-overlay"></div>
                    <img src="/medias/carousel1.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption  d-flex justify-content-center align-items-center flex-column"  style="margin-bottom: 100px;">
                        <h1>Découvrez votre prochaine session de créativité</h1>
                        <p>Some representative placeholder content for the second slide.</p>
                        <form class="input-group w-50 mt-3">
                            <select class="form-select" aria-label="Catégorie">
                                <option value="toutes">Catégories</option>
                                <option value="cat1">Catégorie 1</option>
                                <option value="cat2">Catégorie 2</option>
                                <option value="cat3">Catégorie 3</option>
                            </select>
                            <button class="btn btn-danger" type="submit">Rechercher</button>
                        </form>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="gradient-overlay"></div>
                    <img src="/medias/carousel1.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption  d-flex justify-content-center align-items-center flex-column"  style="margin-bottom: 100px;">
                        <h1>Découvrez votre prochaine session de créativité</h1>
                        <p>Some representative placeholder content for the second slide.</p>
                        <form class="input-group w-50 mt-3">
                            <select class="form-select" aria-label="Catégorie">
                                <option value="toutes">Catégories</option>
                                <option value="cat1">Catégorie 1</option>
                                <option value="cat2">Catégorie 2</option>
                                <option value="cat3">Catégorie 3</option>
                            </select>
                            <button class="btn btn-danger" type="submit">Rechercher</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id='section2'>
    <div class="container-fluid p-5">
        <div class="row">
            <div class="col p-5 text-white">
                <h4>
                    Vous etes a la recherche des meilleurs couturiers?
                </h4>
                <h5>Passez a la vitesse superieure avec Tayeur Gestion</h5>
                <p>Decouvrez comment nous pouvons vous aidez a trouver les meilleurs tailleur sur la plateforme</p>
                <a class="btn btn-danger rounded-pill px-5" href="#" role="button">EN SAVOIR PLUS</a>

            </div>
        </div>
    </div>
</section>

<section id="section3"  class='bg-light'>
<div class="container pt-5">
    <p class='fw-bold'>Tous les items</p>
    <h4 class='fw-light'>Nos ateliers de <span class='fw-bold'>couture</span></h4>
    <div class="row">
        <div class="col-4">
<div class='bg-white rounded-3 mt-3 shadow'>
<div class='p-4 pb-0'>
<select class="form-select border-0 shadow-none" aria-label="Default select example">
  <option selected>Filtres</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
</div>
<hr>
<div class="p-4 pt-0">
<p  class='fw-bold'>Affiner par</p>
<p  class='text-secondary'>Catégorie</p>
<div class="form-check mb-3">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label fw-bold d-flex justify-content-between" for="defaultCheck1">
    Taille Basse <span class='text-end'>155</span>
</label>
</div>
<div class="form-check mb-3">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label fw-bold d-flex justify-content-between" for="defaultCheck1">
    Robe <span class='text-end'>70</span>
</label>
</div>
<div class="form-check mb-3">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label fw-bold d-flex justify-content-between" for="defaultCheck1">
    Grand Boubou Femme  <span class='text-end'>486</span>
</label>
</div>
<div class="form-check mb-3">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label fw-bold d-flex justify-content-between" for="defaultCheck1">
    Grand Boubou Homme <span class='text-end'>75</span>
</label>
</div>
<div class="form-check mb-3">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label fw-bold d-flex justify-content-between" for="defaultCheck1">
    Costume Africain <span class='text-end'>197</span>
</label>
</div>
<div class="form-check mb-3">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label fw-bold d-flex justify-content-between" for="defaultCheck1">
    Costume <span class='text-end'>200</span>
</label>
</div>
<p  class='text-secondary mt-4 border-bottom'>Atelier</p>
<div class="form-check mb-3">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label fw-bold d-flex justify-content-between" for="defaultCheck1">
    6 Point 9 <span class='text-end'>27</span>
</label>
</div>
<div class="form-check mb-3">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label fw-bold d-flex justify-content-between" for="defaultCheck1">
    Fallou Galass Couture <span class='text-end'>36</span>
</label>
</div>
<div class="form-check mb-3">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label fw-bold d-flex justify-content-between" for="defaultCheck1">
    Djiby Couture <span class='text-end'>78</span>
</label>
</div>
<div class="form-check mb-3">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label fw-bold d-flex justify-content-between" for="defaultCheck1">
    Djolof Art <span class='text-end'>84</span>
</label>
</div>
<div class="form-check mb-3">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label fw-bold d-flex justify-content-between" for="defaultCheck1">
    Bamba Couture <span class='text-end'>62</span>
</label>
</div>
<div class="form-check mb-3">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label fw-bold d-flex justify-content-between" for="defaultCheck1">
    Made In Bouaba <span class='text-end'>36</span>
</label>
</div>
<div class="form-check mb-3">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label fw-bold d-flex justify-content-between" for="defaultCheck1">
    Senegal Couture <span class='text-end'>36</span>
</label>
</div>
<div class="form-check mb-3">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label fw-bold d-flex justify-content-between" for="defaultCheck1">
    Heritage Couture <span class='text-end'>103</span>
</label>
</div>
</div>
</div>
        </div>
        <div class="col-8">
           
            <select class="form-select bg-light mt-5 mb-3 border-0 shadow-none text-end" aria-label="Default select example">
  <option selected>Trier par les plus pertinents</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select> 
<div class="row">
                <div class="col mb-4">
                <x-card></x-card>
                </div>
                <div class="col mb-4">
                <x-card></x-card>
                </div>
                <div class="col mb-4">
                <x-card></x-card>
                </div>
            </div>
<div class="row mt-4">
                <div class="col mb-4">
                <x-card></x-card>
                </div>
                <div class="col mb-4">
                <x-card></x-card>
                </div>
                <div class="col mb-4">
                <x-card></x-card>
                </div>
            </div>
<div class="row mt-4">
                <div class="col mb-4">
                <x-card></x-card>
                </div>
                <div class="col mb-4">
                <x-card></x-card>
                </div>
                <div class="col mb-4">
                <x-card></x-card>
                </div>
            </div>
<div class="row mt-4">
                <div class="col mb-4">
                <x-card></x-card>
                </div>
                <div class="col mb-4">
                <x-card></x-card>
                </div>
                <div class="col mb-4">
                <x-card></x-card>
                </div>
            </div>
<div class="row mt-4">
                <div class="col mb-4">
                <x-card></x-card>
                </div>
                <div class="col mb-4">
                <x-card></x-card>
                </div>
                <div class="col mb-4">
                <x-card></x-card>
                </div>
            </div>
<div class="row mt-4 mb-5">
                <div class="col mb-4">
                <x-card></x-card>
                </div>
                <div class="col mb-4">
                <x-card></x-card>
                </div>
                <div class="col mb-4">
                <x-card></x-card>
                </div>
            </div>
            <div class="container d-flex justify-content-center align-items-center">
<x-pagination></x-pagination>
</div>
            </div>
            
        </div>
        
    </div>
    
</div>

</section>


<x-footer></x-footer>



<style>
    .gradient-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(rgba(255, 0, 0, 0.4), rgba(255, 0, 0, 0.4)) !important;
}

#section2 {
    background-image: linear-gradient(to right, rgba(0, 0, 0), transparent), url('/medias/img.png');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
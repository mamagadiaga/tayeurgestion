@extends('layouts.app')


@section('title', 'Accueil')

@section('content')

    <!-- Navbar -->
    <header id="produits">
        <x-navbar></x-navbar>
    </header>


<section id="section3"  class='bg-light mt-5'>
<div class="container mt-5 pt-5">
    <p class='fw-bold mt-5'>Tous les items</p>
    <h4 class='fw-light'>Nos <span class='fw-bold'>Produits</span></h4>
    <div class="row">
    <div class="col-md-4">
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
        <div class="col-md-8">
           
            <select class="form-select bg-light mt-5 mb-3 border-0 shadow-none text-end" aria-label="Default select example">
  <option selected>Trier par les plus pertinents</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select> 
<div class="row mt-4">
                <div class="col mb-4">
                <x-card2 image="/medias/card-image.png" title="Taille Haute" img="/medias/6.9.png"></x-card2>
                </div>
                <div class="col mb-4">
                <x-card2 image="/medias/card-image (1).png" title="Grand Boubou" img="/medias/snc.png"></x-card2>
                </div>
                <div class="col mb-4">
                <x-card2 image="/medias/cardimage.png" title="Taille Basse" img="/medias/heritage-couture.png"></x-card2>
                </div>
            </div>
<div class="row mt-4">
<div class="col mb-4">
<x-card2 image="/medias/card-image (1).png" title="Grand Boubou" img="/medias/snc.png"></x-card2>
                </div>
                <div class="col mb-4">
                <x-card2 image="/medias/cardimage.png" title="Taille Basse" img="/medias/heritage-couture.png"></x-card2>
                </div>
                <div class="col mb-4">
                <x-card2 image="/medias/card-image.png" title="Taille Haute" img="/medias/6.9.png"></x-card2>
                </div>
            </div>
            <div class="row">
                <div class="col mb-4">
                <x-card2 image="/medias/card-image.png" title="Taille Haute" img="/medias/6.9.png"></x-card2>
                </div>
                <div class="col mb-4">
                <x-card2 image="/medias/card-image (1).png" title="Grand Boubou" img="/medias/snc.png"></x-card2>
                </div>
                <div class="col mb-4">
                <x-card2 image="/medias/cardimage.png" title="Taille Basse" img="/medias/heritage-couture.png"></x-card2>
                </div>
            </div>
<div class="row mt-4">
<div class="col mb-4">
<x-card2 image="/medias/card-image (1).png" title="Grand Boubou" img="/medias/snc.png"></x-card2>
                </div>
                <div class="col mb-4">
                <x-card2 image="/medias/cardimage.png" title="Taille Basse" img="/medias/heritage-couture.png"></x-card2>
                </div>
                <div class="col mb-4">
                <x-card2 image="/medias/card-image.png" title="Taille Haute" img="/medias/6.9.png"></x-card2>
                </div>
            </div>
            <div class="row mt-4">
<div class="col mb-4">
<x-card2 image="/medias/card-image (1).png" title="Grand Boubou" img="/medias/snc.png"></x-card2>
                </div>
                <div class="col mb-4">
                <x-card2 image="/medias/cardimage.png" title="Taille Basse" img="/medias/heritage-couture.png"></x-card2>
                </div>
                <div class="col mb-4">
                <x-card2 image="/medias/card-image.png" title="Taille Haute" img="/medias/6.9.png"></x-card2>
                </div>
            </div>
            <div class="row">
                <div class="col mb-4">
                <x-card2 image="/medias/card-image.png" title="Taille Haute" img="/medias/6.9.png"></x-card2>
                </div>
                <div class="col mb-4">
                <x-card2 image="/medias/card-image (1).png" title="Grand Boubou" img="/medias/snc.png"></x-card2>
                </div>
                <div class="col mb-4">
                <x-card2 image="/medias/cardimage.png" title="Taille Basse" img="/medias/heritage-couture.png"></x-card2>
                </div>
            </div>
<div class="row mt-4">
<div class="col mb-4">
<x-card2 image="/medias/card-image (1).png" title="Grand Boubou" img="/medias/snc.png"></x-card2>
                </div>
                <div class="col mb-4">
                <x-card2 image="/medias/cardimage.png" title="Taille Basse" img="/medias/heritage-couture.png"></x-card2>
                </div>
                <div class="col mb-4">
                <x-card2 image="/medias/card-image.png" title="Taille Haute" img="/medias/6.9.png"></x-card2>
                </div>
            </div>
            <div class="row mt-4">
<div class="col mb-4">
<x-card2 image="/medias/card-image (1).png" title="Grand Boubou" img="/medias/snc.png"></x-card2>
                </div>
                <div class="col mb-4">
                <x-card2 image="/medias/cardimage.png" title="Taille Basse" img="/medias/heritage-couture.png"></x-card2>
                </div>
                <div class="col mb-4">
                <x-card2 image="/medias/card-image.png" title="Taille Haute" img="/medias/6.9.png"></x-card2>
                </div>
            </div>
            <div class="row">
                <div class="col mb-4">
                <x-card2 image="/medias/card-image.png" title="Taille Haute" img="/medias/6.9.png"></x-card2>
                </div>
                <div class="col mb-4">
                <x-card2 image="/medias/card-image (1).png" title="Grand Boubou" img="/medias/snc.png"></x-card2>
                </div>
                <div class="col mb-4">
                <x-card2 image="/medias/cardimage.png" title="Taille Basse" img="/medias/heritage-couture.png"></x-card2>
                </div>
            </div>
<div class="row mt-4">
<div class="col mb-4">
<x-card2 image="/medias/card-image (1).png" title="Grand Boubou" img="/medias/snc.png"></x-card2>
                </div>
                <div class="col mb-4">
                <x-card2 image="/medias/cardimage.png" title="Taille Basse" img="/medias/heritage-couture.png"></x-card2>
                </div>
                <div class="col mb-4">
                <x-card2 image="/medias/card-image.png" title="Taille Haute" img="/medias/6.9.png"></x-card2>
                </div>
            </div>
            <div class="row mt-4">
<div class="col mb-4">
<x-card2 image="/medias/card-image (1).png" title="Grand Boubou" img="/medias/snc.png"></x-card2>
                </div>
                <div class="col mb-4">
                <x-card2 image="/medias/cardimage.png" title="Taille Basse" img="/medias/heritage-couture.png"></x-card2>
                </div>
                <div class="col mb-4">
                <x-card2 image="/medias/card-image.png" title="Taille Haute" img="/medias/6.9.png"></x-card2>
                </div>
            </div>
            <div class="row">
                <div class="col mb-4">
                <x-card2 image="/medias/card-image.png" title="Taille Haute" img="/medias/6.9.png"></x-card2>
                </div>
                <div class="col mb-4">
                <x-card2 image="/medias/card-image (1).png" title="Grand Boubou" img="/medias/snc.png"></x-card2>
                </div>
                <div class="col mb-4">
                <x-card2 image="/medias/cardimage.png" title="Taille Basse" img="/medias/heritage-couture.png"></x-card2>
                </div>
            </div>
<div class="row mt-4">
<div class="col mb-4">
<x-card2 image="/medias/card-image (1).png" title="Grand Boubou" img="/medias/snc.png"></x-card2>
                </div>
                <div class="col mb-4">
                <x-card2 image="/medias/cardimage.png" title="Taille Basse" img="/medias/heritage-couture.png"></x-card2>
                </div>
                <div class="col mb-4">
                <x-card2 image="/medias/card-image.png" title="Taille Haute" img="/medias/6.9.png"></x-card2>
                </div>
            </div>
            <div class="row mt-4">
<div class="col mb-4">
<x-card2 image="/medias/card-image (1).png" title="Grand Boubou" img="/medias/snc.png"></x-card2>
                </div>
                <div class="col mb-4">
                <x-card2 image="/medias/cardimage.png" title="Taille Basse" img="/medias/heritage-couture.png"></x-card2>
                </div>
                <div class="col mb-4">
                <x-card2 image="/medias/card-image.png" title="Taille Haute" img="/medias/6.9.png"></x-card2>
                </div>
            </div>
            <div class="row">
                <div class="col mb-4">
                <x-card2 image="/medias/card-image.png" title="Taille Haute" img="/medias/6.9.png"></x-card2>
                </div>
                <div class="col mb-4">
                <x-card2 image="/medias/card-image (1).png" title="Grand Boubou" img="/medias/snc.png"></x-card2>
                </div>
                <div class="col mb-4">
                <x-card2 image="/medias/cardimage.png" title="Taille Basse" img="/medias/heritage-couture.png"></x-card2>
                </div>
            </div>
<div class="row mt-4">
<div class="col mb-4">
<x-card2 image="/medias/card-image (1).png" title="Grand Boubou" img="/medias/snc.png"></x-card2>
                </div>
                <div class="col mb-4">
                <x-card2 image="/medias/cardimage.png" title="Taille Basse" img="/medias/heritage-couture.png"></x-card2>
                </div>
                <div class="col mb-4">
                <x-card2 image="/medias/card-image.png" title="Taille Haute" img="/medias/6.9.png"></x-card2>
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

    </div>
</body>
</html>

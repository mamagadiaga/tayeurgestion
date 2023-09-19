<?php
use App\View\Components\Card;
?>

<a href="{{ route('detailsA') }}" class='text-decoration-none text-dark'> 
<div class="card  shadow border-0 rounded-3">
  <img src="{{ $attributes['image'] }}" class="w-100" height="150px">
  <div class="card-body">
  <p class="fw-bold d-flex align-items-center justify-content-between">
    <span>{{ $attributes['title'] }}</span>
    <span class="d-flex fw-light align-items-center">5 
    <i class="fa-solid fa-star text-warning"></i>
    <i class="fa-solid fa-star text-warning"></i>
    <i class="fa-solid fa-star text-warning"></i>
    <i class="fa-solid fa-star text-warning"></i>
    <i class="fa-solid fa-star text-warning"></i>
</span>
</p>
<p class="d-flex align-items-center justify-content-between">
    <span>1 avis</span>
    <span class="d-flex align-items-center">
        <button class="btn btn-success rounded-pill me-2"><i class="fab fa-whatsapp"></i></button>
        <button class="btn btn-danger rounded-pill me-2"><i class="fas fa-phone"></i></button>
        <button class="btn btn-danger rounded-pill"><i class="fas fa-comment"></i></button>
    </span>
</p>

  </div>
</div>
</a>
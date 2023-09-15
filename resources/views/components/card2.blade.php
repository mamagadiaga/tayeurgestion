<?php
use App\View\Components\Card2;
?>



<a href="{{ route('detailsP') }}" class='text-decoration-none text-dark'> 
<div class="card shadow border-0 rounded-3">
  <div class="card-bg" style="background-image: url('/medias/cardimage.png');"></div>
  <div class="card-icon bg-white d-flex justify-content-center align-items-center">
  <img src="/medias/6.9.png" class="w-100" alt="...">
</div>
<label class="text-white p-2 bg-black d-flex justify-content-between">
    Taille Basse <span class='text-end text-secondary'>Hier 23:50</span>
</label>
    <div class="d-flex align-items-center mt-3">
      <button class="btn btn-transparent text-danger"><i class="fa-regular fa-heart"></i> 20k</button>
      <button class="btn btn-transparent text-danger"><i class="fa-solid fa-share-nodes"></i> 34</button>
      <button class="btn btn-transparent text-danger"><i class="fa-solid fa-comment-dots"></i> 576</button>
    </div>
</div>
</a>

<style>
    .card {
  position: relative;
  overflow: hidden;
}

.card-bg {
  width: 100%;
  height: 250px;
  background-size: cover;
  background-position: center;
}

.card-icon {
  position: absolute;
  top: 10px;
  left: 10px;
  background-color: rgba(0, 0, 0, 0.7);
  color: white;
  padding: 5px;
  border-radius: 50%;
  width: 50px;
  height:50px;
}


</style>
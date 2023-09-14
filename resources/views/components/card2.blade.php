<?php
use App\View\Components\Card2;
?>

<div class="card border-0 rounded-3">
  <div class="card-bg" style="background-image: url('/medias/62.png');"></div>
  <div class="card-icon">
    <i class="fas fa-camera"></i>
  </div>
  <div class="card-body">
    <p class="fw-bold">6 Point 9</p>
    <div class="card-rating">
      <i class="fa-solid fa-star text-warning"></i>
      <i class="fa-solid fa-star text-warning"></i>
      <i class="fa-solid fa-star text-warning"></i>
      <i class="fa-solid fa-star text-warning"></i>
      <i class="fa-solid fa-star text-warning"></i>
    </div>
    <p class="text-muted">1 avis</p>
    <div class="card-actions">
      <button class="btn btn-success rounded-pill"><i class="fab fa-whatsapp"></i></button>
      <button class="btn btn-danger rounded-pill"><i class="fas fa-phone"></i></button>
      <button class="btn btn-danger rounded-pill"><i class="fas fa-comment"></i></button>
    </div>
  </div>
</div>


<style>
    .card {
  position: relative;
  overflow: hidden;
  max-width: 300px; /* Ajustez la largeur maximale selon vos besoins */
}

.card-bg {
  width: 100%;
  height: 200px; /* Ajustez la hauteur de l'image de fond */
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
}


.card-rating {
  color: gold; /* Couleur des étoiles */
  margin-bottom: 10px;
}

.card-actions {
  display: flex;
  justify-content: space-between;
}

</style>
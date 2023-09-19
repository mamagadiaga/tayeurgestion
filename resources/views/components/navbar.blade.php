<?php
use App\View\Components\Navbar;
?>




<nav class="navbar navbar-expand-lg navbar-white bg-white fixed-top shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="/medias/LeftColumn.png" alt="Logo" width="100" height="" />
        </a>        
        <button class="shadow-none navbar-toggler"
         type="button"
          data-bs-toggle="collapse" 
          data-bs-target="#navbarNav" 
          aria-controls="navbarNav" 
          aria-expanded="false"
           aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link text-black fw-bold" href="/">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black fw-bold" href="/ateliers">Ateliers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black fw-bold" href="/produits">Produits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black fw-bold" href="/a-propos">À propos de nous</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black fw-bold" href="/contact">Contact</a>
                </li>
            </ul>
            <div class="d-flex log">
        <a class="btn btn-danger btn1 me-3 rounded-pill" href="#" role="button">PRENDRE PARTENAIRE</a>
        <a class="btn btn-transparent btn2 px-5 border-danger rounded-pill text-danger" href="#" role="button">S'IDENTIFIER</a>
        </div>
    </div>
</nav>

<style>
    .btn1:hover{
        background-color: transparent; 
        border: 1px solid #E83538;
        color: #E83538;
    }
    .btn2:hover{
        background-color: #E83538; 
        color: #fff !important;
    }
    .nav-link:hover{
        color: #E83538 !important;
    }
    @media (max-width:366px) {
        .log{
           justify-content: space-between;
        }
    }
    @media (max-width:350px) {
        .log{
            flex-flow: row wrap;
        }
        .btn1{
            margin-bottom: 10px;
        }
    }
</style>
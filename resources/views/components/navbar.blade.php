<?php
use App\View\Components\Navbar;
?>




<nav class="navbar navbar-expand-lg navbar-white bg-white fixed-top shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="/medias/LeftColumn.png" alt="Logo" width="100" height="" />
        </a>
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
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
            <div class=" d-flex my-2 my-lg-0">
                <a class="btn btn-danger rounded-pill me-3" href="#" role="button">DEVENIR PARTENAIRE</a>
                <a class="btn btn-transparent border-danger px-3 text-danger rounded-pill me-3 " href="#" role="button">S'IDENTIFIER</a>
            </div>
        </div>
    </div>
</nav>
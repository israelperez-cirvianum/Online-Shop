<?php
    $text = $_SESSION['text'];
?>


<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark" style="font-family: 'Times New Roman', Times, serif;"> <ul class="navbar-nav d-flex flex-row w-100">
    <!-- Productos -->
    <li class="nav-item dropdown flex-fill text-start position-relative">
        <a class="nav-link dropdown-toggle text-light"
           href="#"
           role="button"
           data-bs-toggle="dropdown"
           aria-expanded="false">
            <?= $text['products']; ?>
        </a>

        <ul class="dropdown-menu dropdown-menu-center position-absolute bg-white">
            <li>
                <a class="dropdown-item text-dark" href="#">aux</a>
            </li>
            <li>
                <a class="dropdown-item text-dark" href="#">aux</a>
            </li>
            <li>
                <a class="dropdown-item text-dark" href="#">aux</a>
            </li>
        </ul>
    </li>

    <!-- Biblioteca -->
    <li class="nav-item dropdown flex-fill text-start position-relative">
        <a class="nav-link dropdown-toggle text-light"
           href="#"
           role="button"
           data-bs-toggle="dropdown"
           aria-expanded="false">
            <?= $text['library']; ?>
        </a>

        <ul class="dropdown-menu dropdown-menu-center position-absolute bg-white">
            <li>
                <a class="dropdown-item text-dark" href="#">aux</a>
            </li>
            <li>
                <a class="dropdown-item text-dark" href="#">aux</a>
            </li>
            <li>
                <a class="dropdown-item text-dark" href="#">aux</a>
            </li>
        </ul>
    </li>

    <!-- Cartas -->
    <li class="nav-item dropdown flex-fill text-start position-relative">
        <a class="nav-link dropdown-toggle text-light"
           href="#"
           role="button"
           data-bs-toggle="dropdown"
           aria-expanded="false">
            <?= $text['cards']; ?>
        </a>

        <ul class="dropdown-menu dropdown-menu-center position-absolute bg-white">
            <li>
                <a class="dropdown-item text-dark" href="#">aux</a>
            </li>
            <li>
                <a class="dropdown-item text-dark" href="#">aux</a>
            </li>
            <li>
                <a class="dropdown-item text-dark" href="#">aux</a>
            </li>
        </ul>
    </li>

    <!-- Carrito -->
    <li class="nav-item dropdown flex-fill text-start position-relative">
        <a class="nav-link dropdown-toggle text-light"
           href="#"
           role="button"
           data-bs-toggle="dropdown"
           aria-expanded="false">
            <?= $text['shopping_cart']; ?>
        </a>

        <ul class="dropdown-menu dropdown-menu-center position-absolute bg-white">
            <li>
                <a class="dropdown-item text-dark" href="#">aux</a>
            </li>
            <li>
                <a class="dropdown-item text-dark" href="#">aux</a>
            </li>
            <li>
                <a class="dropdown-item text-dark" href="#">aux</a>
            </li>
        </ul>
    </li>

</ul>

</nav>

<?php
    $text = $_SESSION['text'];
?>

<nav class="navbar bg-dark border-bottom border-body"
     data-bs-theme="dark"
     style="font-family: 'Times New Roman', Times, serif;">

    <div class="container-fluid p-0">

        <div class="d-flex w-100 align-items-center">

            <!-- NAVEGACIÓN -->
            <div class="d-flex flex-grow-1">

                <!-- Productos -->
                <div class="dropdown flex-fill">

                    <a class="nav-link dropdown-toggle text-light d-flex align-items-center w-100 h-100 px-3"
                       href="#"
                       role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">

                        <?= $text['products']; ?>

                    </a>

                    <ul class="dropdown-menu bg-dark border border-light">
                        <li>
                            <a class="dropdown-item text-light" href="#">aux</a>
                        </li>
                        <li>
                            <a class="dropdown-item text-light" href="#">aux</a>
                        </li>
                        <li>
                            <a class="dropdown-item text-light" href="#">aux</a>
                        </li>
                    </ul>

                </div>


                <!-- Biblioteca -->
                <div class="dropdown flex-fill">

                    <a class="nav-link dropdown-toggle text-light d-flex align-items-center w-100 h-100 px-3"
                       href="#"
                       role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">

                        <?= $text['library']; ?>

                    </a>

                    <ul class="dropdown-menu bg-dark border border-light">
                        <li>
                            <a class="dropdown-item text-light" href="#">aux</a>
                        </li>
                        <li>
                            <a class="dropdown-item text-light" href="#">aux</a>
                        </li>
                        <li>
                            <a class="dropdown-item text-light" href="#">aux</a>
                        </li>
                    </ul>

                </div>


                <!-- Cartas -->
                <div class="dropdown flex-fill">

                    <a class="nav-link dropdown-toggle text-light d-flex align-items-center w-100 h-100 px-3"
                       href="#"
                       role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">

                        <?= $text['cards']; ?>

                    </a>

                    <ul class="dropdown-menu bg-dark border border-light">
                        <li>
                            <a class="dropdown-item text-light" href="#">aux</a>
                        </li>
                        <li>
                            <a class="dropdown-item text-light" href="#">aux</a>
                        </li>
                        <li>
                            <a class="dropdown-item text-light" href="#">aux</a>
                        </li>
                    </ul>

                </div>


                <!-- Carrito -->
                <div class="dropdown flex-fill">

                    <a class="nav-link dropdown-toggle text-light d-flex align-items-center w-100 h-100 px-3"
                       href="#"
                       role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">

                        <?= $text['shopping_cart']; ?>

                    </a>

                    <ul class="dropdown-menu bg-dark border border-light">
                        <li>
                            <a class="dropdown-item text-light" href="#">aux</a>
                        </li>
                        <li>
                            <a class="dropdown-item text-light" href="#">aux</a>
                        </li>
                        <li>
                            <a class="dropdown-item text-light" href="#">aux</a>
                        </li>
                    </ul>

                </div>

            </div>


            <!-- PERFIL -->
            <div class="dropdown flex-shrink-0 me-2">

                <a class="nav-link dropdown-toggle text-light d-flex align-items-center justify-content-center px-3"
                   href="#"
                   role="button"
                   data-bs-toggle="dropdown"
                   aria-expanded="false">

                    <img src="<?= $_SESSION['profile_picture'] ?>"
                         alt="<?= $_SESSION['actual_user']['name'] ?>"
                         class="rounded-circle object-fit-cover"
                         width="50"
                         height="50">

                </a>

                <ul class="dropdown-menu dropdown-menu-end bg-dark border border-light">

                    <li>
                        <a class="dropdown-item text-light" href="./user_settings.php"><?= $text['settings'] ?></a>
                    </li>

                    <li>
                        <a class="dropdown-item text-light" href="#"><?= $text['logout'] ?></a>
                    </li>

                    <li>
                        <a class="dropdown-item text-light" href="#">aux</a>
                    </li>

                </ul>

            </div>

        </div>

    </div>

</nav>


<style>

    .dropdown-menu .dropdown-item:hover {
        background-color: #343a40;
        color: white;
    }

</style>

<nav class="navbar default-layout col-lg-12 col-12 p-0 d-flex align-items-top flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start bg-success">
        <div class="me-3">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                <span class="icon-menu"></span>
            </button>
        </div>
        <div>
            <a class="navbar-brand brand-logo" href="index.php">
                <img src="images/logo_blanc.png" alt="logod">
            </a>
            <a class="navbar-brand brand-logo-mini" href="index.php">
                <img src="images/logo_blanc.png" alt="logo">
            </a>
        </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-top">
        <ul class="navbar-nav">
            <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                <h1 class="welcome-text">Soyez le bienvenu, <span class="text-black fw-bold"><?= $_SESSION["user"]["nomP"] ?></span></h1>

            </li>
        </ul>
    </div>
</nav>
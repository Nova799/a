<nav class="navbar default-layout col-lg-12 col-12 p-0 d-flex align-items-top flex-row" id="lapt">
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
            <li class="col-12 fw-bolder nav-item font-weight-semibold d-none d-lg-block ms-0">
                <h1 class="welcome-text">Soyez le bienvenu, <span class="text-black fw-bold">
                        <?= $_SESSION["user"]["nomP"] ?>
                    </span></h1>

            </li>
        </ul>
    </div>
</nav>

<nav class="navbar default-layout col-lg-12 col-12 p-0 d-flex align-items-top flex-row bg-success d-none" id="mobile">
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
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start bg-success">
        <h2 class="btn-menu"><span class="mdi mdi-menu text-white pointer"></span></h2>
    </div>
</nav>
<div class="fictif-menu d-none"
    style="width:100%;position:fixed;height:100%;background:#198757;z-index:9999999999;opacity:0.85;">
    <nav class="menu rounded mx-auto bg-success">
    <ul class="nav d-block">
        <li class="col-12 fw-bolder nav-item active">
            <a class="nav-link" href="./">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="col-12 fw-bolder nav-item">
            <a class="nav-link collapsed" data-bs-toggle="collapse" href="#abon" aria-expanded="false"
                aria-controls="abon">
                <i class="menu-icon mdi mdi-clipboard-account-outline"></i>
                <span class="menu-title">ABONNÉS</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="abon" style>
                <ul class="nav flex-column sub-menu">
                    <li class="col-12 fw-bolder nav-item"><a class="nav-link" href="addAbon.php">Ajouter un contact</a></li>
                    <li class="col-12 fw-bolder nav-item"><a class="nav-link" href="importAbon.php">Importer des abonnés</a></li>
                    <li class="col-12 fw-bolder nav-item"><a class="nav-link" href="newsletter.php">Liste de diffusion</a></li>
                    <li class="col-12 fw-bolder nav-item"><a class="nav-link" href="campagne.php">Campagne</a></li>
                </ul>
            </div>
        </li>
        <li class="col-12 fw-bolder nav-item">
            <a class="nav-link collapsed" data-bs-toggle="collapse" href="#form" aria-expanded="false"
                aria-controls="form">
                <i class="menu-icon mdi mdi-book-open-outline"></i>
                <span class="menu-title">FORMATIONS</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form" style>
                <ul class="nav flex-column sub-menu">
                    <li class="col-12 fw-bolder nav-item"><a class="nav-link" href="addFormation.php">Ajouter une formation</a></li>
                </ul>
            </div>
        </li>
        <li class="col-12 fw-bolder nav-item">
            <a class="nav-link collapsed" data-bs-toggle="collapse" href="#mailing" aria-expanded="false"
                aria-controls="mailing">
                <i class="menu-icon mdi mdi-mailbox-outline"></i>
                <span class="menu-title">MESSAGERIE</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="mailing" style>
                <ul class="nav flex-column sub-menu">
                    <li class="col-12 fw-bolder nav-item"><a class="nav-link" href="./msgerie.php?id=0">Messagerie express</a></li>
                    <li class="col-12 fw-bolder nav-item"><a class="nav-link" href="./historique.php">Historique des mails</a></li>
                </ul>
            </div>
        </li>
        <li class="col-12 fw-bolder nav-item d-none">
            <a class="nav-link collapsed" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false"
                aria-controls="form-elements">
                <i class="menu-icon mdi mdi-card-text-outline"></i>
                <span class="menu-title">NOS SECTIONS</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements" style>
                <ul class="nav flex-column sub-menu">
                    <li class="col-12 fw-bolder nav-item"><a class="nav-link" href="addFormation.php">Ajouter une formation</a></li>
                    <li class="col-12 fw-bolder nav-item"><a class="nav-link" href="addUser.php">Ajouter un utilisateur</a></li>
                    <li class="col-12 fw-bolder nav-item"><a class="nav-link" href="addAbon.php">Ajouter un abonné</a></li>
                    <li class="col-12 fw-bolder nav-item"><a class="nav-link" href="newsletter.php">Liste de diffusion</a></li>
                    <li class="col-12 fw-bolder nav-item"><a class="nav-link" href="./msgerie.php">Messagerie express</a></li>
                    <li class="col-12 fw-bolder nav-item"><a class="nav-link" href="./historique.php">Historique des mails</a></li>
                    <li class="col-12 fw-bolder nav-item"><a class="nav-link" href="campagne.php">Campagne</a></li>
                    <li class="col-12 fw-bolder nav-item d-none"><a class="nav-link " href="pages/forms/basic_elements.html">Nos
                            newletters</a></li>
                </ul>
            </div>
        </li>
        <hr class="text-white">
        <li class="col-12 fw-bolder nav-item">
            <a class="nav-link collapsed" data-bs-toggle="collapse" href="#admin" aria-expanded="false"
                aria-controls="admin">
                <i class="menu-icon mdi mdi-security"></i>
                <span class="menu-title">ADMINISTRATION</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="admin" style>
                <ul class="nav flex-column sub-menu">
                    <li class="col-12 fw-bolder nav-item"><a class="nav-link" href="addUser.php">Ajouter un utilisateur</a></li>
                    <li class="col-12 fw-bolder nav-item"><a class="nav-link" href="agenda.php">Agenda</a></li>
                </ul>
            </div>
        </li>
        <hr class="text-white">
        <li class="col-12 fw-bolder nav-item">
            <a class="nav-link" href="./logout.php">
                <i class="mdi mdi-power menu-icon"></i>
                <span class="menu-title">Déconnexion</span>
            </a>
        </li>
        <li class="col-12 fw-bolder nav-item d-none">
            <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <i class="menu-icon mdi mdi-chart-line"></i>
                <span class="menu-title">Charts</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                    <li class="col-12 fw-bolder nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
                </ul>
            </div>
        </li>

        <li class="col-12 fw-bolder nav-item d-none">
            <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                <i class="menu-icon mdi mdi-layers-outline"></i>
                <span class="menu-title">Icons</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                    <li class="col-12 fw-bolder nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
                </ul>
            </div>
        </li>
    </ul>
    </nav>
</div>
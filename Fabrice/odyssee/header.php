<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> <!-- CDN icons Boostrap -->
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>
<body class="bg-body-secondary">

<header class="d-flex shadow-sm align-items-center bg-body-tertiary mb-5">
    <a href="index.html">
        <img src="assets/img/logo.png" alt="Logo Odyssée Collusion" class="logo ms-3">
    </a>
    <nav class="navbar navbar-expand-sm ms-auto me-auto">
        <ul class="navbar-nav nav-underline">
            <li class="nav-item">
                <a class="nav-link <?= $currentPage === 'dashboard' ? 'active' : '' ?>"  href="index.php">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $currentPage === 'users' ? 'active' : '' ?>"  href="users.php">Utilisateurs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $currentPage === 'cards' ? 'active' : '' ?>"  href="cards.php">Cartes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $currentPage === 'gameboards' ? 'active' : '' ?>"  href="gameboards.php">Plateaux</a>
            </li>
        </ul>
    </nav>

    <div class="me-3 text-end">
        <p class="mb-0">Nom Admin</p>
        <button type="button" class="btn p-0 fs-6 text-secondary">Log Out</button>
    </div>

</header>
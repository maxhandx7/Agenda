<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="Public/images/System/LOGO.svg" alt="..." height="72">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">
            <i class="fa fa-home menu-icon"></i>
            Home</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link" href="config.php">
            <i class="far fa-user-circle" aria-hidden="true"></i>
            Perfil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="agenda.php">
            <i class="fa fa-book menu-icon"></i>
            Agenda</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="contacts.php">
            <i class="fa fa-id-card menu-icon"></i>
            Contactos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="categories.php">
            <i class="fa fa-layer-group menu-icon"></i>
            Categorias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Controlador/Admin/logout.php">
            <i class="fa-solid fa-power-off"></i>
            Salir</a>
        </li>
      </ul>

      <form class="d-flex" action="busqueda.php" method="get" role="search">
        <input class="form-control me-2" name="srch" id="srch" type="search" placeholder="buscar" aria-label="Search">
        <button class="btn btn-outline-secondary" type="submit">buscar</button>
      </form>

    </div>
  </div>
</nav>
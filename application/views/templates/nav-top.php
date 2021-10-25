<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="<?= base_url() ?>home">Elleven Imóveis</a>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="<?= base_url() ?>login/logout">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Menu</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column">
					<li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>home">
              <span data-feather="file"></span>
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>listar">
              <span data-feather="file"></span>
              Listar
            </a>
          </li>
					<li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>cadastrar">
              <span data-feather="file"></span>
              Cadastrar
            </a>
          </li>
        </ul>
      </div>
    </nav>
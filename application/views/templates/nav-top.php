<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="<?= base_url() ?>home"> 
    <div class="logo">
      <img src="<?= base_url("assets/images/logo.png") ?>" class="img-fluid"></img>
    </div>
  </a>


<div style="display:flex; flex-direction: flex-end;">
  <div class="navbar-nav px-3 container">
      <div class="avatar">
        <img src="<?= base_url("assets/images/avatar.png") ?>" class="img-fluid"></img>
      </div>
      <span class="user"><?= $user ?></span>
      <a class="nav-link" href="<?= base_url() ?>login/logout">
        <i class="fas fa-sign-out-alt img-fluid" style="font-size: 2rem"></i>
      </a> 
  </div>
</div>

</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span style="margin-top: 8px">Menu</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column">
					<li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>home">
            <i class="fas fa-home fa-fw"></i>
              <span data-feather="file"></span>
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>listar">
            <i class="fas fa-clipboard-list fa-fw"></i>
              <span data-feather="file"></span>
              Listar
            </a>
          </li>
					<li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>cadastrar">
            <i class="fas fa-plus-square fa-fw"></i>
              <span data-feather="file"></span>
              Cadastrar
            </a>
          </li>
        </ul>
      </div>
    </nav>

<style>
  .logo {
    height: 40px;
    display : flex;
    padding: 25px;
    align-items: center;
    }

  .avatar {
    align-items: center;
    height: 50px;
    width: 50px;
    margin-right: 15px;
    border-radius: 100%;
    display: flex;
    justify-content: center;
    }

  .container {
   display: flex;
   flex-direction: row;
  }

  .user {
    margin-right: 20px;
    color: #FFF;
  }
</style>
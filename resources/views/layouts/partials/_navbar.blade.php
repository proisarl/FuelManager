<nav class="navbar navbar-expand navbar-light bg-white topbar mb-2 static-top shadow">
  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
      <i class="fa fa-bars"></i>
  </button>
  <form
      class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
      <div class="input-group">
          <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
              aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
              <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
              </button>
          </div>
      </div>
  </form>
  <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown no-arrow d-sm-none">
          <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-search fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
              aria-labelledby="searchDropdown">
              <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                      <input type="text" class="form-control bg-light border-0 small"
                          placeholder="Search for..." aria-label="Search"
                          aria-describedby="basic-addon2">
                      <div class="input-group-append">
                          <button class="btn btn-primary" type="button">
                              <i class="fas fa-search fa-sm"></i>
                          </button>
                      </div>
                  </div>
              </form>
          </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
          <i class="nav-link text-info" href="#">
              Poste : Station {{Auth::user()->affectation->poste->designation ?? ""}}
          </i>
      </li>

      <div class="topbar-divider d-none d-sm-block"></div>
      <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name}}</span>
              <img class="img-profile rounded-circle"
                  src="{{ url("/storage/telechargement.png")}}">
          </a>
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
              aria-labelledby="userDropdown">
              <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
              </a>
              <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Parametre
              </a>
              <div class="dropdown-divider"></div>
              @role("Administrateur") 
              <button class="dropdown-item" onclick="logout();">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Deconnexion
                </button>
                @endrole
              
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </div>
      </li>

  </ul>

</nav>
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-2">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    @role("OfficicierDirect") <a href="#" class="d-sm-inline-block btn btn-sm btn-danger shadow-sm " data-toggle="modal" data-target="#logoutModal"><i
            class="fas fa-user fa-sm text-white-50"></i> Remise-Reprise</a>
    @endrole
    </div>

  <livewire:remise-reprise>
  <!-- Content Row -->
  <livewire:layouts.menu-navbar>
 
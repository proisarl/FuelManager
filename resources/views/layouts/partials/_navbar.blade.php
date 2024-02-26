<header id="header" class="fixed-top header-inner-pages">
  <div class="container d-flex align-items-center">
    <a href="{{$company->nom_domaine ?? ''}}" class="logo me-auto"><img src="{{$company->logo ?? ''}}" alt="" class="img-fluid"></a>
    <h6 class="logo me-auto"><a href="{{$company->nom_domaine ?? ''}}"  style="font-size: 30px;" important>{{$company->titre ?? ''}}</a></h6>
    <!-- Uncomment below if you prefer to use an image logo -->
    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto " href="{{$company->nom_domaine ?? ''}}#hero">Accueil</a></li>
        <li><a class="nav-link scrollto" href="{{$company->nom_domaine ?? ''}}#about">A propos</a></li>
        <li><a class="nav-link scrollto" href="{{$company->nom_domaine ?? ''}}#services">Services</a></li>
        <li><a class="nav-link  active scrollto" href="{{$company->nom_domaine ?? ''}}#portfolio">Réalisations</a></li>
        <li><a class="nav-link scrollto" href="{{$company->nom_domaine ?? ''}}#team">L'&Eacute;quipe</a></li>
       <li><a class="nav-link scrollto" href="{{$company->nom_domaine ?? ''}}#contact">Contact</a></li>
        <li><a class="getstarted scrollto" href="{{$company->nom_domaine ?? ''}}#about">Allez-y</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
  </div>
</header>
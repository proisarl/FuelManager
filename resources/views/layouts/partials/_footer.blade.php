<footer id="footer">
 @livewire('vitrine.newsletters')
  {{-- <livewire:vitrine.newsletters/> --}}

  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-contact">
          <h3>{{$company->titre ?? ''}}</h3>
          <p>
            {{$adresse->quartier ?? ""}}<br>
            {{$adresse->commune ?? ""}}<br>
            {{$adresse->province ?? ""}}<br>
            {{$adresse->pays ?? ""}}<br><br>
            <strong>Phone:</strong> {{$company->phone ?? ''}}<br>
            <strong>Email:</strong> <a href="mailto:{{$company->email ?? ''}}">{{$company->email ?? ''}}</a><br>
          </p>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Liens</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="{{$company->nom_domaine ?? ''}}#hero">Accueil</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{$company->nom_domaine ?? ''}}#about">A propos</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{$company->nom_domaine ?? ''}}#services">Services</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{$company->nom_domaine ?? ''}}#portfolio">Réalisations</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{$company->nom_domaine ?? ''}}#team">Equipe</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{$company->nom_domaine ?? ''}}#Contact">Contact</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{$company->nom_domaine ?? ''}}#about">Allez-y</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Services</h4>
          <ul>
            @forelse ($services as $service)
              <li><i class="bx bx-chevron-right"></i> <a href="#services">{{$service->titre}}</a></li>
            @empty
            <li>Aucun service Pour l'instant</li>
            @endforelse
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Suivez nous sur</h4>
          <p>les médias sociaux en cliquant sur :</p>
          <div class="social-links mt-3">
            @empty(!$company)
              @foreach ($company->reseauxSociauxs as $reseauxSociaux)
              <a target="_blank" href="{{$reseauxSociaux->coordonnee ?? ''}}"><i class="{{$reseauxSociaux->class ?? ''}}"></i></a>
              @endforeach
            @endempty
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="container footer-bottom clearfix">
    <div class="copyright">
      &copy; Copyright <strong><span>{{$company->titre ?? ''}}</span></strong>. Tous droits réservés
    </div>
  </div>
</footer>
<!-- End Footer -->

<div id="preloader"></div>
<a href="http://wa.me/+243971609529" class="fixed-bottom col-1" style="font-size:250%;margin-left: 5%;"><i class="bx bxl-whatsapp"></i></a>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
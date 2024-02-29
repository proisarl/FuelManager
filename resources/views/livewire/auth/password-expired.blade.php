<div class="container">
    <div class="row justify-content-center">
        <div class="col-col-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    @if ($visibilite==false)
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="alert alert-success">
                                    <i class="fa fa-info"></i> Votre mot de passe a expiré, veuillez le changer.
                                </div>
                                <form class="user" wire:submit="change">
                                    <div class="form-group">
                                        <label class="form-label">Mot de passe actuel <i class="text-danger">*</i></label>
                                        <input type="password" wire:model="users.current_password" class="form-control"
                                            id="exampleInputEmail"
                                            placeholder="Mot de passe actuel" autofocus>
                                            @error('users.current_password')<small class="text-danger">{{ $message }}</small>@enderror
                                    </div>
                                    <div class="form-group">
                                       <label class="form-label">Nouveau Mot de passe <i class="text-danger">*</i></label>
                                        <input type="password" wire:model="users.password" class="form-control"
                                            id="exampleInputEmail"
                                            placeholder="Nouveau Mot de passe" autofocus>
                                            @error('users.password')<small class="text-danger">{{ $message }}</small>@enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Repeter le Nouveau Mot de passe <i class="text-danger">*</i></label>
                                        <input type="password" wire:model="users.password_confirmation"  class="form-control"
                                            id="exampleInputEmail"
                                            placeholder="Confirmer Le nouveau Mot de passe" autofocus>
                                            @error('users.password_confirmation')<small class="text-danger">{{ $message }}</small>@enderror
                                    </div>
                                    <button class="btn btn-primary btn-user btn-block">
                                        Confirmer
                                    </button>
                                </form>
                                <hr>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="card-password-info">
                                    <h6><i class="fa fa-info"></i> Le nouveau mot de passe doit contenir:</h6>
                                    <ul class="mt-4">
                                        <li>Minimum 8 charactères.</li>
                                        <li>Minimum 1 lettre minuscule et 1 lettre majuscule. <i>ex: Ab</i></li>
                                        <li>Minimum 1 chiffre. <i>ex: 123</i></li>
                                        <li>Minimum 1 symbole. <i>ex: @$#!-*</i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="alert alert-success">
                                    <a href="{{ url('home')}}" class="btn btn-success"><i class="bi bi-box-arrow-in-right"></i> Se connecter Maintenant</a>
                                    <i class="fa fa-info"></i> Le Changement de Mot de passe s'est Bien fait.
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

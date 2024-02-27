<div>
    <div wire:ignore.self class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Vous Etes Sur de Vouloir Faire La Remise Reprise?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                   <form wire:submit="releve">
                    {{-- <h1 x-text="count"></h1> --}}
                        <div>
                            <label for="">Selectionner Un Rélevant <span class="text-warning">*</span></label>
                            <select wire:model="remise.id" class="form-control">
                                <option value="">Select ......</option>
                                @foreach ($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>
                            @error('remise.id')<small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div x-show="$wire.remise['id'].length > 0">
                            <label for="">Son Mot de passe <span class="text-warning">*</span></label>
                            <input wire:model="remise.passwordRelevant" class="form-control" placeholder="*********************">
                            @error('remise.passwordRelevant')<small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div x-show="$wire.remise['id'].length > 0">
                            <label for="">Votre Mot de passe <span class="text-warning">*</span></label>
                            <input wire:model="remise.password" class="form-control" placeholder="*********************">
                            @error('remise.password')<small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="mt-2">
                            <label for="">Laisser Un Commentaire <span class="text-warning">*</span></label>
                            <textarea cols="30" wire:model="remise.commentaire" rows="3" class="form-control"></textarea>
                            @error('remise.commentaire')<small class="text-danger">{{$message}}</small>@enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                        <button class="btn btn-success btn-circle btn-lg"><i class="fas fa-check"></i></button>
                    </div>
                </form>
                {{-- <button x-on:click="count++">ddd</button> --}}
            </div>
        </div>
  </div>
</div>

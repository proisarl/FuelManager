<div x-data="{ pompes: @entangle('pompes') }">
    <form wire:submit="save">
        <div class="row justify-content-center">
            <div class="col-lg-6">                
                    @role("Administrateur")
                    <div class="mt-2">
                        <label class="text-label">Selectionner Un Officier <span class="text-warning">*</span></label>
                        <div class="input-group">
                            <select wire:model.live="consommation.affectation_id" class="form-control" x-on:change="$wire.userEmail">
                                <option value="">Select......</option>
                                @foreach ($officiers as $officier)
                                    <option value="{{$officier->affectation?->id}}">{{$officier->name}}</option>
                                @endforeach
                            </select>
                            @error('consommation.affectation_id')<small class="text-danger">{{$message}}</small>@enderror
                            <i class="input-group-text">Pompe N°</i>
                            <select class="form-control col-lg-2" wire:model.live="consommation.pompe_id">
                                <option value>Select....</option>
                                <template x-for="[key, value] of Object.entries(pompes)" :key="key">
                                    <option :value="key" x-text="value"></option>
                                </template>
                            </select>
                        </div>
                        @error('consommation.pompe_id')<small class="text-danger">{{$message}}</small>@enderror
                    </div>
                    @endrole
                <div class="mt-2">
                    <label class="text-label">Companie <span class="text-warning">*</span></label>
                    <div wire:ignore class="input-group">
                        <select class="form-control exemple">
                            <option selected class="text-muted">select...</option>
                            @foreach ($companies as $companie)
                                <option value="{{$companie->id}}">{{$companie->designation}}</option>
                            @endforeach
                        </select>
                    @role("OfficicierDirect")
                        <i class="input-group-text">Pompe N°</i>
                        <select class="form-control col-lg-2" wire:model.live="consommation.pompe_id">
                            <option value="">Select....</option>
                            @foreach ($touspompes as $touspompe)
                                <option value="{{$touspompe->id}}">{{$touspompe->designation}}</option>
                            @endforeach
                        </select>
                    @endrole
                        </div>
                    @error('consommation.companie_id')<small class="text-danger">{{$message}}</small>@enderror
                    @role("OfficicierDirect")
                        @error('consommation.pompe_id')<small class="text-danger">{{$message}}</small>@enderror
                    @endrole
                </div>
                <div class="mt-2" x-show="$wire.consommation['companie_id'] == 38">
                    <label class="text-label">Preciser La Companie<span class="text-warning">*</span></label>
                    <input type="text" class="form-control" wire:model="consommation.companie">
                    @error('consommation.companie')<small class="text-danger">{{$message}}</small>@enderror
                </div>
                <div class="mt-2">
                    <label class="text-label">Departement<span class="text-warning">*</span></label>
                    <input type="text" class="form-control" wire:model="consommation.department">
                    @error('consommation.department')<small class="text-danger">{{$message}}</small>@enderror
                </div>
                <div class="mt-2">
                    <label class="text-label">N° Plaque <span class="text-warning">*</span></label>
                    <input type="text" class="form-control" wire:model="consommation.plaque">
                    @error('consommation.plaque')<small class="text-danger">{{$message}}</small>@enderror
                </div>
                <div class="mt-2">
                    <label class="text-label">Type Engin <span class="text-warning">*</span></label>
                    <select class="form-control" wire:model="consommation.type_vehicule_id">
                        <option value="">Select....</option>
                        @foreach ($typeVehicules as $typeVehicule)
                            <option value="{{$typeVehicule->id}}">{{$typeVehicule->type}}</option>
                        @endforeach
                    </select>
                    @error('consommation.type_vehicule_id')<small class="text-danger">{{$message}}</small>@enderror
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mt-2">
                    <label class="text-label">Km d'Engin <span class="text-warning">*</span></label>
                    <div class="input-group">
                        <input type="text" class="form-control" wire:model="consommation.index">
                        <i class="input-group-text">Cochez si HS<input type="checkbox" wire:model="hs" ></i>
                    </div>
                    @error('consommation.index')<small class="text-danger">{{$message}}</small>@enderror
                </div>
                <div class="mt-2">
                    <label class="text-label">Index de Depart <span class="text-warning">*</span></label>
                    <input type="number" class="form-control" wire:model.lazy="consommation.indexdepart">
                    @error('consommation.indexdepart')<small class="text-danger">{{$message}}</small>@enderror
                </div>
                <div class="mt-2">
                    <label class="text-label">Littres Consommés <span class="text-warning">*</span></label>
                    <input type="number" class="form-control" wire:model.lazy="consommation.littre">
                    @error('consommation.littre')<small class="text-danger">{{$message}}</small>@enderror
                </div>
                <div class="mt-2">
                    <label class="text-label">Index de Cloture <span class="text-warning">*</span></label>
                    <input type="number" class="form-control" wire:model="consommation.indexcloture">
                    @error('consommation.indexcloture')<small class="text-danger">{{$message}}</small>@enderror
                </div>
                <div class="mt-2">
                    <label class="text-label">Nom Du Chauffeur <span class="text-warning">*</span></label>
                    <input type="text" class="form-control" wire:model="consommation.chauffeur">
                    @error('consommation.chauffeur')<small class="text-danger">{{$message}}</small>@enderror
                </div>
                <div class="mt-2">
                    <label class="text-label">Nom Pompiste<span class="text-warning">*</span></label>
                    <input type="text" class="form-control" wire:model="consommation.pompiste">
                    @error('consommation.pompiste')<small class="text-danger">{{$message}}</small>@enderror
                </div>
            </div>
            <div class="mt-lg-3">
                <button class="btn btn-success btn-circle btn-lg">
                    <i class="fas fa-check"></i>
                </button> 
            </div>  
        </div>
    </form>
    @push('scripts')
    <script>
       $(document).ready(function (){
          $('.exemple').select2();
              $('.exemple').on('change', function (e) {
                  var selectedOption = e.target.value;
                  var consommation = @this.get('consommation') || [];
                  consommation['companie_id'] = selectedOption;
                  @this.set('selectedValue', consommation);
          });
        });
    </script>
    @endpush
</div>

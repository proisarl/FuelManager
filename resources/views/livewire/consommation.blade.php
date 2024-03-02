<div>
    <form wire:submit="save">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="mt-2">
                    <label class="text-label">Companie <span class="text-warning">*</span></label>
                    <input type="text" wire:model="consommation.companie" class="form-control">
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
                    <input type="text" class="form-control" wire:model="consommation.engin">
                    @error('consommation.engin')<small class="text-danger">{{$message}}</small>@enderror
                </div>
                <div class="mt-2">
                    <label class="text-label">Km d'Engin <span class="text-warning">*</span></label>
                    <input type="text" class="form-control" wire:model="consommation.index">
                    @error('consommation.index')<small class="text-danger">{{$message}}</small>@enderror
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mt-2">
                    <label class="text-label">Index de Depart <span class="text-warning">*</span></label>
                    <input type="number" class="form-control" wire:model="consommation.indexdepart">
                    @error('consommation.indexdepart')<small class="text-danger">{{$message}}</small>@enderror
                </div>
                <div class="mt-2">
                    <label class="text-label">Littres Consommés <span class="text-warning">*</span></label>
                    <input type="number" class="form-control" wire:model="consommation.littre">
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
</div>

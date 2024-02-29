<div>
    <form wire:submit="save">
        <div class="row">
            <div class="col-lg-6">
                <div class="mt-2">
                    <label class="text-label">Nom Du Chauffeur <span class="text-warning">*</span></label>
                    <input type="text" class="form-control" wire:model="consommation.chauffeur">
                    @error('consommation.chauffeur')<small class="text-danger">{{$message}}</small>@enderror
                </div>
                <div class="mt-2">
                    <label class="text-label">N° Plaque <span class="text-warning">*</span></label>
                    <input type="text" class="form-control" wire:model="consommation.plaque">
                    @error('consommation.plaque')<small class="text-danger">{{$message}}</small>@enderror
                </div>
                <div class="mt-2">
                    <label class="text-label">Companie <span class="text-warning">*</span></label>
                    <select class="form-control" wire:model="consommation.companie">
                        <option value="">Selectionner..... </option>
                        <option>KAMOA</option>
                        <option>Autre</option>
                    </select>
                    @error('consommation.companie')<small class="text-danger">{{$message}}</small>@enderror
                </div>
                <div class="mt-2">
                    <label class="text-label">Littres Consommés <span class="text-warning">*</span></label>
                    <input type="text" class="form-control" wire:model="consommation.littre">
                    @error('consommation.littre')<small class="text-danger">{{$message}}</small>@enderror
                </div>
                <div class="mt-2">
                    <label class="text-label">Index Fin <span class="text-warning">*</span></label>
                    <input type="text" class="form-control" wire:model="consommation.index">
                    @error('consommation.index')<small class="text-danger">{{$message}}</small>@enderror
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="mt-lg-5">
                    <button class="btn btn-success btn-circle btn-lg">
                        <i class="fas fa-check"></i>
                    </button> 
                </div>  
            </div>
        </div>
    </form>
</div>

<div>
    <h4 class="text-center">Ajouter une Pompe</h4>
    <hr>
    <form wire:submit="savePompe">
        <div class="mt-2">
            <label for="">Designation de la Pompe</label>
            <input type="text" class="form-control" wire:model="pompe.designation">
            @error('pompe.designation')<small class="text-danger">{{$message}}</small>@enderror
        </div>
        <div class="mt-2">
            <label for="">Quantité Disponible</label>
            <input type="text" class="form-control" wire:model="pompe.quantite">
            @error('pompe.quantite')<small class="text-danger">{{$message}}</small>@enderror
        </div>
        <div class="mt-2">
            <label for="">Station de la pompe</label>
            <select class="form-control" wire:model="pompe.poste_id">
                <option value="">Select.....</option>
                @foreach ($postes as $poste)
                    <option value="{{$poste->id}}">{{$poste->designation}}</option>
                @endforeach
            </select>
            @error('pompe.poste_id')<small class="text-danger">{{$message}}</small>@enderror
        </div>
        <button class="btn btn-primary btn-user btn-block mt-2">
            Créer
        </button>
    </form>
</div>
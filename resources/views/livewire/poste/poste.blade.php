<div>
    <h4 class="text-center">Ajouter une nouvelle station</h4>
    <hr>
    <form wire:submit="save">
        <div class="mt-2">
            <label for="">Designation de la Station</label>
            <input type="text" class="form-control" wire:model="poste.designation">
            @error('poste.designation')<small class="text-danger">{{$message}}</small>@enderror
        </div>
        <button class="btn btn-primary btn-user btn-block mt-2">
            Créer
        </button>
    </form>
</div>
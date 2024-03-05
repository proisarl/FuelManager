<div class="row" x-data="{ affichage : 0}">
    <div class="col-lg-4">
        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" x-on:click="affichage = 3" class="btn btn-primary"><i class="fa fa-plus"></i> Station</button>
            <button type="button" x-on:click="affichage = 6" class="btn btn-danger"><i class="fa fa-plus-circle"></i> Pompe</button>
        </div>
        <div x-show="affichage ==  6">
            <x-pompe></x-pompe>
        </div>
        <div x-show="affichage == 3">
            <livewire:poste.poste>
        </div>
    </div>
    <div class="col col-8">
        <livewire:pompe-liste/>  
    </div>
</div>
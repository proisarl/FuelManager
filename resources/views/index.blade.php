@extends('layouts.global-layouts')
@section('contenu')  
        
<form action="">
    <div class="row">
        <div class="col-lg-6">
            <div class="mt-2">
                <label class="text-label">Nom Du Chauffeur</label>
                <input type="text" class="form-control">
            </div>
            <div class="mt-2">
                <label class="text-label">N° Plaque</label>
                <input type="text" class="form-control">
            </div>
            <div class="mt-2">
                <label class="text-label">Companie</label>
                <select name="" class="form-control">
                    <option value="">Selectionner .....</option>
                    <option>KAMOA</option>
                    <option>Sous-Traitance</option>
                </select>
            </div>
            <div class="mt-2">
                <label class="text-label">Littres Consommés</label>
                <input type="text" class="form-control">
            </div>
            <div class="mt-2">
                <label class="text-label">Index Fin</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-lg-6 mt-lg-5 text-center justify-content-xl-center">
            <button class="btn btn-success btn-circle btn-lg">
                <i class="fas fa-check"></i>
            </button>   
        </div>
    </div>
</form>
        
@endsection
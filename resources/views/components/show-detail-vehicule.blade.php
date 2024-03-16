@extends('layouts.global-layouts')
@section('contenu')  
<div class="modal-body overflow-auto">
    <table class="table table-hover table-bordered table-sm table-responsive-sm">
     <thead>
         <tr>
             <td>Companie</td>
             <td>Qté Livrée</td>
             <td>Kilometre</td>
             <td>Categorie</td>
             <td>Cons. Normale</td>
             <td>Chauffeur</td>
             <td>Pompiste</td>
             <td>Garde</td>
             <td>Station</td>
             <td>Date d'encodage</td>
         </tr>
     </thead>
     <tbody>
        
        <i class="d-none">{{$nombredefois=1}}</i>
        <i class="d-none">{{$kilometreNormal=1}}</i>
         @if ($vehicule !="")
             @foreach ($vehicule as $itemVehicule)
             @if ($nombredefois > 1)
                @if ($itemVehicule->index < $kilometreNormal)
                <tr class="alert alert-danger"> 
                @else
                <tr> 
                @endif
            @endif
                 <td><small>{{$itemVehicule->companie}}</small></td>
                 <td><small>{{$itemVehicule->littre}}L</small></td>
                 <td><small>{{$itemVehicule->index}}</small></td>
                 <td><small>{{substr($itemVehicule->typeVehicule?->type,0,15)}}</small></td>
                     @if ($itemVehicule->typeVehicule?->indice=="km")
                     <td><small>{{floatval($itemVehicule->littre)}} * {{ floatval($itemVehicule->typeVehicule?->consommation)}} + {{floatval($itemVehicule->index)}} = {{(floatval($itemVehicule->littre) * floatval($itemVehicule->typeVehicule?->consommation)) + floatval($itemVehicule->index)}}</small></td>
                     @elseif($itemVehicule->typeVehicule?->indice=="hr")
                     <td><small>{{floatval($itemVehicule->littre)}} : {{ floatval($itemVehicule->typeVehicule?->consommation)}} + {{floatval($itemVehicule->index)}} = {{(floatval($itemVehicule->littre) / floatval($itemVehicule->typeVehicule?->consommation)) + floatval($itemVehicule->index)}} </small></td>
                     @else
                     <td class="alert alert-warning"><small>Un FUT </small></td>
                     @endif
                 {{-- @else
                 <td><small></small></td>
                 @endif --}}
                 
                 <td><small>{{$itemVehicule->chauffeur}}</small></td>
                 <td><small>{{$itemVehicule->pompiste}}</small></td>
                 <td><small>{{$itemVehicule->affectation->user->name}}</small></td>
                 <td><small>{{$itemVehicule->affectation->poste->designation}}</small></td>
                 <td><small>{{$itemVehicule->created_at->format("d/m/y H:i")}}</small></td>
             </tr>
             @if ($itemVehicule->typeVehicule?->indice=="km")
                <i class="d-none">{{$kilometreNormal=(floatval($itemVehicule->littre) * floatval($itemVehicule->typeVehicule?->consommation)) + floatval($itemVehicule->index)}}</i>    
            @elseif($itemVehicule->typeVehicule?->indice=="hr")
                <i class="d-none">{{$kilometreNormal=(floatval($itemVehicule->littre) / floatval($itemVehicule->typeVehicule?->consommation)) + floatval($itemVehicule->index)}}</i>
            @endif
             <i class="d-none">{{$nombredefois++}}</i>
             @endforeach
         @endif
     </tbody>
    </table>
 </div>
@endsection
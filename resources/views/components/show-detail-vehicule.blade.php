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
             <td colspan="2">Cons. Normale <br> cons # Over</td>
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
        <i class="d-none">{{$oldindex=1}}</i>
         @if ($vehicule !="")
             @foreach ($vehicule as $itemVehicule)
             @if ($nombredefois > 1)
                @if ($itemVehicule->typeVehicule?->indice=="km")
                    {{-- initialisation des over consumption --}}
                    <i class="d-none">{{$kilometreOver=floatval($itemVehicule->littre)- round((floatval($itemVehicule->index) - $oldindex) / floatval($itemVehicule->typeVehicule?->consommation),1)}}</i>
                    @if ($kilometreOver > 6)
                        <tr class="alert alert-danger"> 
                    @elseif ($kilometreOver < 0)
                        <tr> 
                    @else 
                        <tr>
                    @endif
                @elseif ($itemVehicule->typeVehicule?->indice=="hr")
                        {{-- initialisation des over consumption --}}
                    <i class="d-none">{{$kilometreOver=round(((floatval($itemVehicule->index) - $oldindex) * floatval($itemVehicule->typeVehicule?->consommation))- floatval($itemVehicule->littre),2)}}</i>
                    @if ($kilometreOver > 12)
                        <tr class="alert alert-warning"> 
                        @elseif ($kilometreOver < 0)
                            <tr> 
                        @else 
                            <tr>
                        @endif
                    @endif
            @endif
                 <td><small>{{$itemVehicule->companie}}</small></td>
                 <td><small>{{$itemVehicule->littre}}L</small></td>
                 <td><small>{{$itemVehicule->index}}</small></td>
                 <td><small>{{substr($itemVehicule->typeVehicule?->type,0,15)}}</small></td>
                    @if ($nombredefois > 1)
                        @if ($itemVehicule->typeVehicule?->indice=="km")
                        <td><small>{{(floatval($itemVehicule->index) - $oldindex)}} / {{floatval($itemVehicule->typeVehicule?->consommation)}} = {{round((floatval($itemVehicule->index) - $oldindex) / floatval($itemVehicule->typeVehicule?->consommation),1)}} </small></td>
                        <td><small>{{$kilometreOver}} L </small></td>
                        @elseif($itemVehicule->typeVehicule?->indice=="hr")
                        <td><small>{{round((floatval($itemVehicule->index) - $oldindex),1)}} * {{$itemVehicule->typeVehicule?->consommation}} = {{round((floatval($itemVehicule->index) - $oldindex) * floatval($itemVehicule->typeVehicule?->consommation),1)}} </small></td>
                        <td><small>{{$kilometreOver}} L </small></td>
                        @else
                        <td class="alert alert-warning" colspan="2"><small>Un FUT </small></td>
                        @endif
                    @else
                    <td colspan="2"><small> Consommation Initiale</small></td>    
                    @endif
                 <td><small>{{$itemVehicule->chauffeur}}</small></td>
                 <td><small>{{$itemVehicule->pompiste}}</small></td>
                 <td><small>{{$itemVehicule->affectation->user->name}}</small></td>
                 <td><small>{{$itemVehicule->affectation->poste->designation}}</small></td>
                 <td><small>{{$itemVehicule->created_at->format("d/m/y H:i")}}</small></td>
             </tr>
             <i class="d-none">{{$nombredefois++}}</i>
             <i class="d-none">{{$oldindex=$itemVehicule->index}}</i>
             @endforeach
         @endif
     </tbody>
    </table>
 </div>
@endsection
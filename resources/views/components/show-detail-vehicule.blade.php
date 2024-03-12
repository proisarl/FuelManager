<div>
        <div wire:ignore.self class="modal fade" id="showVehicule" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Voici le detail</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body overflow-auto">
                       <table class="table table-hover table-bordered table-sm table-responsive-sm">
                        <thead>
                            <tr>
                                <td>Companie</td>
                                <td>Qté Livrée</td>
                                <td>Kilometre</td>
                                <td>Categorie</td>
                                <td>Normal</td>
                                <td>Chauffeur</td>
                                <td>Pompiste</td>
                                <td>Date</td>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($vehicule !="")
                                <i class="d-none">{{$nombredefois=1}}</i>
                                @foreach ($vehicule as $itemVehicule)
                                <tr>
                                    <td><small>{{$itemVehicule->companie}}</small></td>
                                    <td><small>{{$itemVehicule->littre}}L</small></td>
                                    <td><small>{{$itemVehicule->index}}</small></td>
                                    <td><small>{{substr($itemVehicule->typeVehicule?->type,0,15)}}</small></td>
                                    @if ($nombredefois > 1)
                                        @if ($itemVehicule->typeVehicule?->indice=="km")
                                        <td><small>{{floatval($itemVehicule->littre)}} * {{ floatval($itemVehicule->typeVehicule?->consommation)}} + {{floatval($itemVehicule->index)}} = {{(floatval($itemVehicule->littre) * floatval($itemVehicule->typeVehicule?->consommation)) + floatval($itemVehicule->index)}}</small></td>
                                        @elseif($itemVehicule->typeVehicule?->indice=="hr")
                                        <td><small>{{floatval($itemVehicule->littre)}} : {{ floatval($itemVehicule->typeVehicule?->consommation)}} + {{floatval($itemVehicule->index)}} = {{(floatval($itemVehicule->littre) / floatval($itemVehicule->typeVehicule?->consommation)) + floatval($itemVehicule->index)}} </small></td>
                                        @endif
                                    @else
                                    <td><small></small></td>
                                    @endif
                                    
                                    <td><small>{{$itemVehicule->chauffeur}}</small></td>
                                    <td><small>{{$itemVehicule->pompiste}}</small></td>
                                    <td><small>{{$itemVehicule->created_at->format("d/m/y H:i")}}</small></td>
                                </tr>
                                <i class="d-none">{{$nombredefois++}}</i>
                                @endforeach
                            @endif
                        </tbody>
                       </table>
                    </div>
            </div>
      </div>
    </div>
    
    {{--  --}}
</div>
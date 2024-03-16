<div>
    <div class="row">
        @foreach ($vehicules as $plaque => $vehicule)
            <div class="col-lg-4">
                <caption>{{$plaque}} <a class="badge bg-primary text-white" href="{{route("consommation.show",$plaque)}}"> Voir plus</a></caption>
                {{-- <caption>{{$plaque}} <button class="badge bg-primary" wire:click="showModal('{{$plaque}}')"> Voir plus</button></caption> --}}
                <table class="table table-bordered table-sm table-responsive-sm">
                    <thead>
                        <tr class="alert alert-info">
                            {{-- <th scope="col">Index Debut</th>
                            <th scope="col">Index FIn</th> --}}
                            <td><small>Qté. Livrée</small></td>
                            <td><small>Type v</small></td>
                            <td><small>Index</small></td>
                            <td><small>Date</small></td>
                            <td><small>Observation</small></td>
                        </tr>
                    </thead>
                    <tbody>
                        <i class="d-none">{{$nombredefois=1}}</i>
                        <i class="d-none">{{$kilometreNormal=0}}</i>
                        @foreach ($vehicule as $consommation)
                            <tr>
                                <td><small>{{$consommation->littre}}L</small></td>
                                <td><small>{{substr($consommation->typeVehicule?->type,0,8)}}</small></td>
                                <td><small>{{$consommation->index}}</small></td>
                                <td><small>{{$consommation->created_at->format("d/m/y H:i") ?? ""}}</small></td>
                                @if ($nombredefois > 1)
                                    @if ($consommation->index < $kilometreNormal)
                                        <td class="bg-danger"><small>Tentative de vole</small></td>  
                                    @else
                                        <td><small>NORMAL</small></td>  
                                    @endif
                                @else
                                <td><small>NORMAL</small></td>  
                                @endif
                                @if ($consommation->typeVehicule?->indice=="km")
                                    <i class="d-none">{{$kilometreNormal=(floatval($consommation->littre) * floatval($consommation->typeVehicule?->consommation)) + floatval($consommation->index)}}</i>    
                                @elseif($consommation->typeVehicule?->indice=="hr")
                                    <i class="d-none">{{$kilometreNormal=(floatval($consommation->littre) / floatval($consommation->typeVehicule?->consommation)) + floatval($consommation->index)}}</i>
                                @endif
                            </tr>
                            <i class="d-none">{{$nombredefois++}}</i>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endforeach
        {{-- <x-show-detail-vehicule :vehicule="$vehiculeObjet"></x-show-detail-vehicule> --}}
    </div>
</div>

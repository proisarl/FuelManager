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
                                <td>Index Debut</td>
                                <td>Index FIn</td>
                                <td>Quantite Livrée</td>
                                <td>Kilometre</td>
                                <td>Nom Engin</td>
                                <td>Chauffeur</td>
                                <td>Pompiste</td>
                                <td>Date</td>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($vehicule !="")
                                @foreach ($vehicule as $itemVehicule)
                                <tr>
                                    <td><small>{{$itemVehicule->companie}}L</small></td>
                                    <td><small>{{$itemVehicule->indexdepart}}L</small></td>
                                    <td><small>{{$itemVehicule->indexcloture}}L</small></td>
                                    <td><small>{{$itemVehicule->littre}}L</small></td>
                                    <td><small>{{$itemVehicule->engin}}</small></td>
                                    <td><small>{{$itemVehicule->index}}</small></td>
                                    <td><small>{{$itemVehicule->chauffeur}}</small></td>
                                    <td><small>{{$itemVehicule->pompiste}}</small></td>
                                    <td><small>{{$itemVehicule->created_at->format("d/m/y H:i")}}</small></td>
                                </tr>
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
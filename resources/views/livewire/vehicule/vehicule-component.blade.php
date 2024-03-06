<div>
    <div class="row">
        @foreach ($vehicules as $plaque => $vehicule)
            <div class="col-lg-4">
                <caption>{{$plaque}} <button class="badge bg-primary" x-on:click="$wire.showModal('{{$plaque}}')"> Voir plus</button></caption>
                <table class="table table-bordered table-sm table-responsive-sm">
                    <thead>
                        <tr class="alert alert-info">
                            {{-- <th scope="col">Index Debut</th>
                            <th scope="col">Index FIn</th> --}}
                            <td>Quantite Livrée</td>
                            <td>Kilometre</td>
                            <td>Nom Engin</td>
                            <td>Date</td>
                            <td>Observation</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vehicule as $consommation)
                            <tr>
                                {{-- <td><small>{{$consommation->indexdepart}}L</small></td>
                                <td><small>{{$consommation->indexcloture}}L</small></td> --}}
                                <td><small>{{$consommation->littre}}L</small></td>
                                <td><small>{{$consommation->engin}}</small></td>
                                <td><small>{{$consommation->index}}</small></td>
                                <td><small>{{$consommation->created_at->format("d/m/y H:i")}}</small></td>
                                <td><small>En attente</small></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endforeach
        <x-show-detail-vehicule :vehicule="$vehiculeObjet"></x-show-detail-vehicule>
    </div>
</div>

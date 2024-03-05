<div>
    <div class="row">
        @foreach ($vehicules as $plaque => $vehicule)
            <div class="col-lg-4">
                <caption>{{$plaque}} <span class="badge bg-success">Voir plus</span></caption>
                <table class="table table-bordered table-sm table-responsive-sm">
                    <thead>
                        <tr>
                            <th scope="col">Index Debut</th>
                            <th scope="col">Index FIn</th>
                            <th scope="col">Quantite Livrée</th>
                            <th scope="col">Kilometre</th>
                            <th scope="col">Date</th>
                            <th scope="col">Observation</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vehicule as $consommation)
                            <tr>
                                <td><small>{{$consommation->indexdepart}}L</small></td>
                                <td><small>{{$consommation->indexcloture}}L</small></td>
                                <td><small>{{$consommation->littre}}L</small></td>
                                <td><small>{{$consommation->index}}L</small></td>
                                <td><small>{{$consommation->created_at->format("d/m/y H:i")}}</small></td>
                                <td><small>En attente</small></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endforeach
    </div>
</div>

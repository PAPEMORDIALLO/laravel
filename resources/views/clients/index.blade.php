@include("layouts.app")

<div class="container-fluid page-body-wrapper">


    <div class="main-panel">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center mb-4">LA LISTE DES CLIENTS</h1>
                    @if (session("success"))
                        <alert class="alert alert-success">{{session("success")}}</alert>
                    @endif
                    <div class="d-flex justify-content-end mb-4">
                        <a class="btn btn-primary" href="{{ route('ajoutclient') }}" method="post">Ajouter</a>
                        <a class="btn btn-primary" href="{{ route('clientpdf') }}" method="post">PDF</a>

                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr class="table-danger">
                                <th>#</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Adresse</th>
                                <th>Téléphone</th>
                                <th>Sexe</th>
                                <th scope="col">OPTIONS</th>
                            </tr>
                            </thead>
                            <tbody class="table-primary">
                            @foreach($client as $c)
                                <tr>
                                    <td>{{ $c->id }}</td>
                                    <td>{{ $c->nom }}</td>
                                    <td>{{ $c->prenom }}</td>
                                    <td>{{ $c->adresse }}</td>
                                    <td>{{ $c->telephone }}</td>
                                    <td>{{ $c->sexe }}</td>
                                    <td>
                                        <form action="{{route("deleteclient",$c)}}" method="post" >
                                            @csrf
                                            @method("delete")
                                            <button class="btn btn-danger" type="submit">suprimer</button>
                                        </form>
                                        <a class="btn btn-primary" href="{{route("upclient",$c)}}">modefier</a>
                                        <a class="btn btn-primary" href="{{ route('clients.show', $c->id) }}" >show</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- Pagination -->
                    <div class="d-flex justify-content-center">
                        {{--                        {{ $cl->links() }}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@include("layouts.navbar")


@include("layouts.sidebar")

@section('content')

    <div class="row justify-content-center mt-3">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        Categories Clients
                    </div>
                    <div class="float-end">
                        <a href="{{ route('clients.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                    </div>
                </div>
                <div class="card-body">

                    <div class="row">
                        <label for="nom" class="col-md-4 col-form-label text-md-end text-start"><strong>Nom:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $client->nom }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Prenom:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $client->prenom }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="quantity" class="col-md-4 col-form-label text-md-end text-start"><strong>Adresse:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $client->adresse }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="price" class="col-md-4 col-form-label text-md-end text-start"><strong>Telephone:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $client->telephone }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Sexe:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $client->sexe }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

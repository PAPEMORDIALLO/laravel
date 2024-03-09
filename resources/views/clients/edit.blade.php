@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        Edit Client
                    </div>
                    <div class="float-end">
                        <a href="{{route('clients.index')}}" class="btn btn-primary btn-sm">&larr; Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('clients.update',$client->id)}}" method="post">
                        @csrf
                        @method("PUT")

                        <div class="mb-3 row">
                            <label for="nom" class="col-md-4 col-form-label text-md-end text-start">No,</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('nom') is-invalid @enderror" id="nom" name="nom" value="{{$client->nom}}">
                                @if ($errors->has('nom'))
                                    <span class="text-danger">{{ $errors->first('nom') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="name" class="col-md-4 col-form-label text-md-end text-start">Prenom</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('prenom') is-invalid @enderror" id="prenom" name="prenom" value="{{$client->prenom}}">
                                @if ($errors->has('prenom'))
                                    <span class="text-danger">{{ $errors->first('prenom') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="name" class="col-md-4 col-form-label text-md-end text-start">Numero</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('numero') is-invalid @enderror" id="numero" name="numero" value="{{$client->telephone}}">
                                @if ($errors->has('numero'))
                                    <span class="text-danger">{{ $errors->first('numero') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="name" class="col-md-4 col-form-label text-md-end text-start">Adresse</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('adresse') is-invalid @enderror" id="adresse" name="adresse" value="{{$client->adresse}}">
                                @if ($errors->has('adresse'))
                                    <span class="text-danger">{{ $errors->first('adresse') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="name" class="col-md-4 col-form-label text-md-end text-start">Sexe</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('sexe') is-invalid @enderror" id="sexe" name="sexe" value="{{$client->sexe}}">
                                @if ($errors->has('sexe'))
                                    <span class="text-danger">{{ $errors->first('sexe') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


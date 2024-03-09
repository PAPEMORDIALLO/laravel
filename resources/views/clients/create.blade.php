@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Navbar -->


            <!-- Sidebar -->


            <div class="col-md-9">
                <!-- Main Content -->
                <div class="card">
                    <div class="card-header">
                        <div class="float-start">
                            <h3> {{$cl->exists ?"MODIF":"AJOUT"}}  CLIENT</h3>
                        </div>
                        <div class="float-end">
                            <a href="{{ route('clients.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route($cl-> exists ? 'mjclient':'creeclient', $cl) }}" method="post">
                            @csrf
                            @method( $cl->exists ?"put":"post")

                            <div class="mb-3 row">
                                <label for="nom" class="col-md-3 col-form-label text-end">Nom</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('nom') is-invalid @enderror" id="nom" name="nom" value="{{$cl->nom}}"
                                    @error('nom')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="prenom" class="col-md-3 col-form-label text-end">Prénom</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('prenom') is-invalid @enderror" id="prenom" name="prenom" value="{{$cl->prenom}}">
                                    @error('prenom')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="adresse" class="col-md-3 col-form-label text-end">Adresse</label>
                                <div class="col-md-6">
                                    <textarea class="form-control @error('adresse') is-invalid @enderror" id="adresse" name="adresse">{{$cl->adresse}}</textarea>
                                    @error('adresse')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="telephone" class="col-md-3 col-form-label text-end">Telephone</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('telephone') is-invalid @enderror" id="telephone" name="telephone" value="{{$cl->telephone}}">
                                    @error('telephone')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="sexe" class="col-md-3 col-form-label text-end">Sexe</label>
                                <div class="col-md-6">
                                    <select name="sexe" id="sexe" class="form-control">
                                        <option value="">--Selectionner--</option>
                                        <option value="M">Masculin</option>
                                        <option value="F">Féminin</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col-md-6 offset-md-3">
                                    <button type="submit" class="btn btn-primary">{{$cl->exists ?"MODIFER":"AJOUTER"}} </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


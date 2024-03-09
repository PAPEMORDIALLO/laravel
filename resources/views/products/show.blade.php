@extends('layouts.app')

@section('content')
    @include("layouts.navbar")

    <div class="container-fluid page-body-wrapper">
        @include("layouts.sidebar")

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <div class="float-start">
                            Product Information
                        </div>
                        <div class="float-end">
                            <a href="{{ route('products.index') }}" class="btn btn-light btn-sm">&larr; Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mb-3 row">
                            <label for="image" class="col-md-4 col-form-label text-md-end text-start"><strong>Image:</strong></label>
                            <div class="col-md-6">
                                <img src="{{ asset('storage/images/'.$product->image) }}" class="img-thumbnail" alt="Product Image">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Nom:</strong></label>
                            <div class="col-md-6">
                                {{ $product->nom }}
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Description:</strong></label>
                            <div class="col-md-6">
                                {{ $product->description }}
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="prix" class="col-md-4 col-form-label text-md-end text-start"><strong>Prix:</strong></label>
                            <div class="col-md-6">
                                {{ $product->prix }}
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="quantite_stock" class="col-md-4 col-form-label text-md-end text-start"><strong>Quantité en stock:</strong></label>
                            <div class="col-md-6">
                                {{ $product->quantite_stock }}
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="categorie_id" class="col-md-4 col-form-label text-md-end text-start"><strong>Catégorie:</strong></label>
                            <div class="col-md-6">
                                {{ $product->categorie_id }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

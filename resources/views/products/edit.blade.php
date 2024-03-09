
@include("layouts.app")

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        Edit Product
                    </div>
                    <div class="float-end">
                        <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('products.update', $product->id) }}" method="post">
                        @csrf
                        @method("PUT")

                        <div class="mb-3 row">
                            <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('nom') is-invalid @enderror" id="nom" name="nom" value="{{ $product->nom }}">
                                @if ($errors->has('nom'))
                                    <span class="text-danger">{{ $errors->first('nom') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('prix') is-invalid @enderror" id="prix" name="prix" value="{{ $product->prix }}">
                                @if ($errors->has('prix'))
                                    <span class="text-danger">{{ $errors->first('prix') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="description" class="col-md-4 col-form-label text-md-end text-start">Description</label>
                            <div class="col-md-6">
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ $product->description }}</textarea>
                                @if ($errors->has('description'))
                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="name" class="col-md-4 col-form-label text-md-end text-start">Quantite_Stock</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('quantite_stock') is-invalid @enderror" id="quantite_stock" name="quantite_stock" value="{{ $product->quantite_stock}}">
                                @if ($errors->has('quantite_stock'))
                                    <span class="text-danger">{{ $errors->first('quantite_stock') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="categorie_id" class="col-md-4 col-form-label text-md-end text-start">categorie_id</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('categorie_id') is-invalid @enderror" id="categorie_id" name="categorie_id" value="{{ $product->categorie_id }}">
                                @if ($errors->has('categorie_id'))
                                    <span class="text-danger">{{ $errors->first('categorie_id') }}</span>
                                @endif
                            </div>

                            <div class="mb-3 row">
                                <label for="image" class="col-md-4 col-form-label text-md-end text-start">Image</label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" value="{{ old('image') }}">
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                                <img src="{{ asset('storage/images/'.$product->image) }}" style="height: 50px; width: 100px">
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

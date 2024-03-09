@include("layouts.app")

<div class="container-fluid page-body-wrapper">


    <div class="main-panel">
        <div class="col-lg-12">
            <div class="card">
                <div class="card">
                    <div class="card-header">Product List</div>
                    <div class="card-body">
                        @can('create-product')
                            <a href="{{ route('products.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New Product</a>
                            <a href="{{ route('prodruitexcel') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Excel</a>
                        @endcan
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">Photo</th>
                                <th scope="col">S#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Prix</th>
                                <th scope="col">Description</th>
                                <th scope="col">Quantite_Stock</th>

                                <th scope="col">Categorie</th>

                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($products as $product)
                                <tr>

                                    <th>
                                        @if($product->image)
                                            <img src="{{ asset('storage/images/'.$product->image) }}" style="height: 50px; width: 100px" alt="">
                                        @else
                                            <span>no image</span>
                                        @endif
                                    </th>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $product->nom }}</td>
                                    <td>{{ $product->prix }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->quantite_stock }}</td>
                                    <td>{{$product->category->nom}}

                                    </td>
                                    <td>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')

                                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>

                                            @can('edit-product')
                                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                                            @endcan

                                            @can('delete-product')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this product?');"><i class="bi bi-trash"></i> Delete</button>
                                            @endcan
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <td colspan="4">
                        <span class="text-danger">
                            <strong>No Product Found!</strong>
                        </span>
                                </td>
                            @endforelse
                            </tbody>
                        </table>

                        {{ $products->links() }}

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

{{--@include()--}}

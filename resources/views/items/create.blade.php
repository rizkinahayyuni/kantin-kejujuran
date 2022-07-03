@extends('layouts.app')

@section('content')
    @include('sweetalert::alert')
    <div class="content">
        <div class="container">
            {{-- <h2 class="mb-2 pt-4">Add New Item</h2> --}}
            <div class="row pt-4">
                <div class="col-md-6">
                    <a href="{{ url()->previous() }}" style="color: inherit;">
                        <p>
                            < Back</p>
                    </a>
                    <img src="../../dist/img/add-item.png" class="product-image" alt="Product Image">
                </div>
                <div class="col-md-6">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Add New Item</h3>
                        </div>
                        <form action="{{ route('items.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label for="image">Image(URL)</label>
                                    <input type="text" class="form-control" name="image" placeholder="Image">
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rp </span>
                                        </div>
                                        <input type="number" name="price" class="form-control" placeholder="Price">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="desc">Description</label>
                                    <input type="text" class="form-control" name="desc" placeholder="Description">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

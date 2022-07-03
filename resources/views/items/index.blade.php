@extends('layouts.app')

@section('content')
@include('sweetalert::alert')
    <div class="content">
        <div class="container">
            <h2 class="mb-2 pt-4">Items</h2>
            <a href="{{ route('items.create') }}" class="btn btn btn-primary mb-2">
                <i class="fas fa-plus"></i> Add Items
            </a>
            <div class="row mt-4">
                @foreach ($items as $item)
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon" style="display:inline-block;">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle" src="{{ $item->image }}"
                                        alt="User profile picture">
                                </div>
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">
                                    <h5><b>{{ $item->name }}</b></h5>
                                </span>
                                <span class="info-box-number">Rp {{ $item->price }}</span>
                                <span class="info-box-text">{{ $item->desc }}</span>
                                @auth
                                <form action="{{ route('items.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <span class="info-box-text">
                                        <button type="submit" class="btn btn-sm btn-success btn-block">
                                            <i class="fas fa-cart-plus"></i> Add to Cart
                                        </button>
                                    </span>
                                </form>
                                @endauth
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

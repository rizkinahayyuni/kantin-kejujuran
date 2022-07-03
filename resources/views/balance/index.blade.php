@extends('layouts.app')

@section('content')
    @include('sweetalert::alert')
    <div class="content">
        <div class="container">
            <h2 class="mb-2 pt-4">Balance</h2>
            <div class="row mt-4">
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            @foreach ($balances as $balance)
                                <h3>Rp {{ $balance->balance }}</h3>
                            @endforeach
                            <p>Total Balance</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-card"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box">
                        <div class="inner">
                            <p>Add Balance</p>
                            <form action="{{ url('/balance/add-balance') }}" method="POST">
                                @csrf
                                <div class="input-group mb-3 col-9">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp </span>
                                    </div>
                                    <input type="number" name="balance" class="form-control" placeholder="Add Balance">
                                    <span class="input-group-append">
                                        <button type="submit" class="btn btn-success btn-flat">Add</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <div class="icon">
                            <i class="ion ion-plus-round"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box">
                        <div class="inner">
                            <p>Reduce Balance</p>
                            <form action="{{ url('/balance/reduce-balance') }}" method="POST">
                                @csrf
                                <div class="input-group mb-3 col-9">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp </span>
                                    </div>
                                    <input type="number" name="balance" class="form-control" placeholder="Reduce Balance">
                                    <span class="input-group-append">
                                        <button type="submit" class="btn btn-danger btn-flat">Reduce</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <div class="icon">
                            <i class="ion ion-minus-round"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                            <h3 class="d-inline-block d-sm-none">Kantin Kejujuran</h3>
                            <div class="col-12">
                                <img src="../../dist/img/home.png" class="product-image" alt="Product Image">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <h3 class="my-3">Kantin Kejujuran</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur
                                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                anim id
                                est laborum.
                            </p>

                            <hr>

                            <div class="mt-4">
                                <a href="{{ url('/items') }}">
                                    <div class="btn btn-primary">
                                        <i class="fas fa-cart-plus fa-lg mr-2"></i>
                                        Show Product
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

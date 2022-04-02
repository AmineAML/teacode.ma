@extends('layout.page-content')

@section('page-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @if (\Session::has('success'))
                    <div>
                        <p>{{ \Session::get('success') }}</p>
                    </div><br />
                @endif
                @if (\Session::has('failure'))
                    <div>
                        <p>{{ \Session::get('failure') }}</p>
                    </div><br />
                @endif
                <form method="post" action="/newsletter">
                    @csrf
                    <div class="row d-flex justify-content-center align-items-center rows">
                        <div class="col-10 offset-1">
                            <div class="_card">
                                <div class="text-center">
                                    <span class="d-block mt-3">Subscribe to our newsletter in order not to miss new arrivals <br> promotions and discounts of our store</span>
                                    <div class="mx-5">
                                        <div class="input-group mb-3 mt-4">
                                            <input type="email" class="form-control" placeholder="Enter email"
                                                name="email"
                                                aria-label="Recipient's username" aria-describedby="button-addon2">
                                            <button class="btn btn-success border-rad" type="submit"
                                                id="button-addon2">Subscribe</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

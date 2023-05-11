@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
Simply called Living Duck
                    </div>
                    <div class="card-body">
                You do not Have to register or login you can simply<br>
                <a href="{{route('virtual-pet-duck.index')}}" class="btn btn-primary">Visit the Duck</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


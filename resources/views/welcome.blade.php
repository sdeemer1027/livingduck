@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-10">

                <div class="card">
                    <div class="card-header">
                        Info
                    </div>
                    <div class="card-body">
                        if you register and login cool  <BR>
                        if you choose not to you can play along "Click the Visit Duck Button"<BR>
                        Or you can login with<BR>
                        email : demo@demo.com<BR>
                        password : password<BR>
                    </div>
                </div>
            </div>


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


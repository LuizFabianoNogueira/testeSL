@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Bem vindo ao admin
                </div>

                <ul>
                    <li> <a href="admin/countries"> Paises </a> </li>
                </ul>

                <ul>
                    <li> <a href="admin/states/30"> Estados do Brasil </a> </li>
                </ul>

            </div>

        </div>
    </div>
</div>
@endsection

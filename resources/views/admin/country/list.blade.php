@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de paises</div>

                <div class="panel-body">
                    <ul class="list-group">
                        @foreach ($countries as $country)
                            <li class="list-group-item">
                            <span class="badge" style="float: left; margin-right: 10px;">{{ $country->id }}</span>
                             
                            {{ $country->name }} - {{ $country->iso }} 
                            @if ($country->active == true)
                                <span class='label label-success' style="float: right;">Ativo</span>
                            @else
                                <span class="label label-warning" style="float: right;">Inativo</span>
                            @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection

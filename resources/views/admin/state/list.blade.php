@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de estados do {{ $country->name }}</div>

                <div class="panel-body">
                    <ul class="list-group">
                        @foreach ($states as $state)
                            <li class="list-group-item">
                            <span class="badge" style="float: left; margin-right: 10px;">{{ $state->id }}</span>
                             
                            {{ $state->name }} - {{ $state->uf }} 


                            <span class="label label-info" style="float: right; margin-left: 20px;"> 
                                <a href="{{ url('admin/cities') }}/{{ $state->id }}"> 
                                    Cidades 
                                </a>
                            </span>

                            @if ($state->active == true)
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
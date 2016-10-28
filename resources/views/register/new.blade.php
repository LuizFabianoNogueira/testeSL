@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastro de Clientes</div>

                <div class="panel-body">

                    {!! Form::open(['route' => 'cadastro.save', 'class' => 'form-horizontal']) !!}

                        <div class="form-group">
                            {!! Form::label('cpf_cnpj', 'CPF/CNPJ', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('cpf_cnpj', '', ['class' => 'form-control']) !!}
                                @if ($errors->has('cpf_cnpj'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cpf_cnpj') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('name', 'Nome', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('name', '', ['class' => 'form-control']) !!}
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('last_name', 'Sobrenome', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('last_name', '', ['class' => 'form-control']) !!}
                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('sex', 'Sexo', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::radio('sex', 'M', ['class' => 'form-control']) !!} Maculino
                                {!! Form::radio('sex', 'F', ['class' => 'form-control']) !!} Feminino
                                @if ($errors->has('sex'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sex') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('date_of_birth', 'Data de nascimento', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::date('date_of_birth', \Carbon\Carbon::now()) !!}
                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        @if (env('RE_CAP_ACTIVE') == 1)
                        <script src='https://www.google.com/recaptcha/api.js'></script>
                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-6">
                                <div class="g-recaptcha" data-sitekey="{{ env('RE_CAP_SITE') }}"></div>
                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        @endif

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::submit('Salvar e Contiar...', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<!-- <div class="fons_navbar">
  <img id="logo" src="imatges/navbar.jpg" alt="Fons negre navbar"/>
</div> -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
          <div class="path-location"><p><a href="/"> Home</a> » <a href="/nosaltres"> Nosaltres</a> » <b>Contact</b></p></div>
          <div class="titol">
            <h1>Contacte</h1>
            <hr/>
          </div>
          <div class="contingut">
            @include('flash::message')
            <div class="formulari">
              {!! Form::open(array('url' => '/contact', 'files'=>true, 'method' => 'POST')) !!}

                <div class="form-group {{ $errors->has('tema') ? ' has-error' : '' }}">
                  <label for="name" class="control-label">Tema:</label>
                  {!! Form::text('tema', null, ['class' => 'form-control', 'id' => 'tema'], array('required' => 'required', 'autofocus' => 'autofocus')) !!}
                </div>

                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                  <label for="name" class="control-label">Email:</label>
                  {!! Form::email('email', null, ['class' => 'form-control', 'id' => 'tema'], array('required' => 'required')) !!}
                </div>

                <div class="form-group {{ $errors->has('comsulta') ? ' has-error' : '' }}">
                  <label for="name" class="control-label">Consulta:</label>
                  {!! Form::textarea('consulta', null, ['class' => 'form-control', 'id' => 'consulta', 'size' => '30x5']) !!}
                </div>

                <button type="submit" class="btn btn-success btn-lg btn-formulari">
                    Enviar
                </button>

              {!! Form::close() !!}
            </div>
          </div>

        </div>
    </div>
</div>

@endsection

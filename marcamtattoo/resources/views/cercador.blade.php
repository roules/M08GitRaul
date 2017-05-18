@extends('layouts.app')

@section('content')
<!-- <div class="fons_navbar">
  <img id="logo" src="imatges/navbar.jpg" alt="Fons negre navbar"/>
</div> -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
          <div class="titol">
            <h1>Cercador</h1>
            <hr/>
          </div>
          <div class="contingut">
            <div class="text-cercador"><p>A continuació pots inserir el que vols buscar a la nostre pàgina web: </p></div>
            <div class="col-md-6"><p><gcse:search></gcse:search></p></div>
          </div>

        </div>
    </div>
</div>

@endsection

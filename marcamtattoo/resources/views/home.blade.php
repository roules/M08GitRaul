@extends('layouts.app')

@section('content')
<!-- <div class="fons_navbar">
  <img id="logo" src="imatges/navbar.jpg" alt="Fons negre navbar"/>
</div> -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
          <div class="titol main-title">
            <h1>Marcam Tattoo</h1>
            <hr/>
          </div>
          <div class="contingut">
            <div id="thumbnail-preview-indicators" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#thumbnail-preview-indicators" data-slide-to="0" class="active">
                  <div class="thumbnail">
                    <img class="img-responsive" src="http://www.e8-estudio.com/wp-content/uploads/2015/11/Tatuadores-Colombianos-FW.jpg">
                  </div>
                </li>
                <li data-target="#thumbnail-preview-indicators" data-slide-to="1">
                <div class="thumbnail">
                    <img class="img-responsive" src="http://cdn3.upsocl.com/wp-content/uploads/2014/05/Captura-de-pantalla-2014-05-08-a-las-12.50.57.jpg">
                  </div>
                </li>
                <li data-target="#thumbnail-preview-indicators" data-slide-to="2">
                <div class="thumbnail">
                    <img class="img-responsive" src="http://static.tumblr.com/ce52053a378a32e279f729a2dd0f5b47/p4q6aos/fummut0y3/tumblr_static_1277856_552820201453251_375262910_o__2_.jpg">
                  </div>
                </li>
              </ol>
              <div class="carousel-inner">
                <div class="item slides active">
                  <div class="slide-1"></div>
                </div>
                <div class="item slides">
                  <div class="slide-2"></div>
                  <div class="container">
                    <div class="carousel-caption">
                    </div>
                  </div>
                </div>
                <div class="item slides">
                  <div class="slide-3"></div>
                  <div class="container">
                    <div class="carousel-caption">
                    </div>
                  </div>
                </div>
              </div>
              <a class="left carousel-control" href="#thumbnail-preview-indicators" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
              <a class="right carousel-control" href="#thumbnail-preview-indicators" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
          </div>
          <div class="info">
            <p>El propòsit de la marca és introduir l'originalitat i professionalitat al món dels tatuatges.</p>
            <p>L'idea amb la que treballa aquesta marca és aconseguir un disseny propi fet pels nostres professionals on el client pugui trobar la seva idea reflectida però de manera original.</p>
            <p>Un tatuatge és una marca a la teva pell que normalment representa alguna cosa, i com a tal no ens agrada trobar a algú amb aquesta marca idèntica a el nostre, és per això que va sorgir la proposta de crear una marca diferent.</p>
          </div>
        </div>
      </div>
  </div>
</div>


@endsection

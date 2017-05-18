@extends('layouts.app')

@section('content')
<!-- <div class="fons_navbar">
  <img id="logo" src="imatges/navbar.jpg" alt="Fons negre navbar"/>
</div> -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
          <div class="contingut">
            <div class="path-location"><p><a href="/"> Home</a> » <b>Tatuadors</b></p></div>
            <div class="titol">
              <h1>Tatuadors</h1>
              <hr/>
            </div>
            <div class="col-sm-10 col-sm-offset-1">
               <div class="col-md-4 col-sm-6">
                   <div class="card-container">
                       <div class="card">
                           <div class="front">
                               <div class="cover">
                                   <img src="http://www.hdimageson.com/wp-content/uploads/2016/05/beach-images-tumblr-300x188.jpg"/>
                               </div>
                               <div class="user">
                                   <img class="img-circle" src="https://image.spreadshirtmedia.net/image-server/v1/compositions/118618844/views/1,width=300,height=300,version=1484810225/gangster-sir-senor-gangster-camisetas-camiseta-premium-nino.jpg"/>
                               </div>
                               <div class="content">
                                   <div class="main">
                                       <h3 class="name">Raúl Sánchez</h3>
                                       <p class="profession">Tatuador</p>

                                       <p class="text-center">"20 anys. Tatuador de MarcamTattoo."</p>
                                   </div>
                               </div>
                           </div> <!-- end front panel -->
                           <div class="back">
                               <div class="header">
                                   <h5 class="motto">"Fiel a la perfecció!"</h5>
                               </div>
                               <div class="content">
                                   <div class="main">
                                       <h4 class="text-center">Informació sobre el tatuador</h4>
                                       <p class="text-center">5 anys d'experiència, màster en arts</p>
                                   </div>
                               </div>

                           </div> <!-- end back panel -->
                       </div> <!-- end card -->
                   </div> <!-- end card-container -->
               </div> <!-- end col-sm-3 -->
               </div> <!-- end col-sm-10 -->
               <div class="space-200"></div>
             </div>
        </div>
    </div>
</div>






@endsection

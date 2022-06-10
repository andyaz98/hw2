@extends("layouts.app")

@section('title', 'Home')
@section("subtitle","Le 5 migliori destinazioni europee")
    

@section("head")
<script src="{{url('Script%20js/external%20apis/constants.js')}}" defer></script>
<script src="{{url('Script%20js/external%20apis/pixabay.js')}}" defer></script>
<!--script src="{{url('Script%20js/external%20apis/amadeus.js')}}" defer></script-->

<script src="{{url('Script%20js/home.js')}}" defer></script>
<script src="{{url('Script%20js/add_to_favourites.js')}}" defer></script>

<link rel="Stylesheet" href="{{url('Stylesheets/home.css')}}" />

@endsection


    
@section("nav")
        <!--Flex Container NAV inizio-->
        <div>Home</div>
        <div>Partners</div>
        <div>Chi siamo</div>
        <div>
          @if(isset($username))
          <a href="{{url('home/account')}}">Area personale</a></div>
          @else
          <a href="{{url('login')}}">Effettua l'accesso</a></div>
          @endif
        </div>
        <!--Flex Container NAV fine-->
@endsection
    
        
@section("overlay_img")
        <div id="pin_img_container">
            <img id="pin_img" src="{{url('Images/loc.jpeg')}}" />
        </div>

        <div id="location_container">
            <div id="location">Sede di: CATANIA</div>
        </div>
@endsection

    
@section("section")
        <div class="paragraph" data-destination-number="1" data-destination="Vilnius" data-destination-location-code="VNO">
            <div class="title_p">
                <div class="title">
                   <em></em><span></span>
                </div>
               

             <div class="fav">
             @if(isset($username))
               <!--Se l utente ha fatto il login, può aggiungere il contenuto ai preferiti (richiesta asincrona)-->
               <a class='add_to_fav' data-destination='Vilnius' href='#'>Aggiungi ai preferiti</a>
               @else
               <!--Altrimenti andrà alla pagina di login-->
               <a class='no_login' href="{{url('login')}}">Aggiungi ai preferiti</a>
               @endif
             </div>

            </div>
            <div class="paragraph-content">
            
            </div>
            <div class="flights" data-destination-number="1" data-destination="Vilnius">Ricerca miglior prezzo...</div>


        </div>

        <img data-destination-number="1" data-destination="Vilnius"/>

        

        </div>

        <div class="paragraph" data-destination-number="2" data-destination="Tallinn" data-destination-location-code="TLL">
            <div class="title_p">
                <div class="title">
                   <em></em><span></span>
                </div>
                
             <div class="fav">
               @if(isset($username))
               <!--Se l utente ha fatto il login, può aggiungere il contenuto ai preferiti (richiesta asincrona)-->
               <a class='add_to_fav' data-destination='Tallinn' href='#'>Aggiungi ai preferiti</a>
               @else
               <!--Altrimenti andrà alla pagina di login-->
               <a class='no_login' href="{{url('login')}}">Aggiungi ai preferiti</a>
               @endif
             </div>
            
            </div>
            <div class="paragraph-content">
            
            </div>
            


            <div class="flights" data-destination-number="2" data-destination="Tallinn">Ricerca miglior prezzo...</div>

        </div>

        <img data-destination-number="2" data-destination="Tallinn" />

        

        </div>

        <div class="paragraph" data-destination-number="3" data-destination="Warsaw" data-destination-location-code="WAW">
            <div class="title_p">
                <div class="title">
                   <em></em><span></span>
                </div>
               

             <div class="fav">
              @if(isset($username))
               <!--Se l utente ha fatto il login, può aggiungere il contenuto ai preferiti (richiesta asincrona)-->
               <a class='add_to_fav' data-destination='Varsavia' href='#'>Aggiungi ai preferiti</a>
               @else
               <!--Altrimenti andrà alla pagina di login-->
               <a class='no_login' href="{{url('login')}}">Aggiungi ai preferiti</a>
               @endif
             </div>
            
            </div>
            <div class="paragraph-content">
            
            </div>
            

            <div class="flights" data-destination-number="3" data-destination="Warsaw">Ricerca miglior prezzo...</div>

        </div>

        <img data-destination-number="3" data-destination="Warsaw"/>

        

        </div>

        <div class="paragraph" data-destination-number="4" data-destination="Zadar" data-destination-location-code="ZAD">
            <div class="title_p">
                <div class="title">
                   <em></em><span></span>
                </div>
               

             <div class="fav">
             @if(isset($username))
               <!--Se l utente ha fatto il login, può aggiungere il contenuto ai preferiti (richiesta asincrona)-->
               <a class='add_to_fav' data-destination='Zara' href='#'>Aggiungi ai preferiti</a>
               @else
               <!--Altrimenti andrà alla pagina di login-->
               <a class='no_login' href="{{url('login')}}">Aggiungi ai preferiti</a>
               @endif
             </div>
            
            </div>
            <div class="paragraph-content">
            
            </div>
            

            <div class="flights" data-destination-number="4" data-destination="Zadar">Ricerca miglior prezzo...</div>

        </div>


        <img data-destination-number="4" data-destination="Zadar"/>

        

        </div>

        <div class="paragraph" data-destination-number="5" data-destination="Riga" data-destination-location-code="RIX">
            <div class="title_p">
                <div class="title">
                   <em></em><span></span>
                </div>
               

            <div class="fav">
            @if(isset($username))
               <!--Se l utente ha fatto il login, può aggiungere il contenuto ai preferiti (richiesta asincrona)-->
               <a class='add_to_fav' data-destination='Riga' href='#'>Aggiungi ai preferiti</a>
               @else
               <!--Altrimenti andrà alla pagina di login-->
               <a class='no_login' href="{{url('login')}}">Aggiungi ai preferiti</a>
               @endif
            </div>

            </div>
            <div class="paragraph-content">
            
            </div>
            


            <div class="flights" data-destination-number="5" data-destination="Riga">Ricerca miglior prezzo...</div>

        </div>

        <img data-destination-number="5" data-destination="Riga"/>

        

        </div>
@endsection



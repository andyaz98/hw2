@extends("layouts.app")

@section("title","Strumento di ricerca")
@section("subtitle","Strumento di ricerca")

@section("head")
    <link rel="Stylesheet" href="{{url('Stylesheets/search.css')}}">
    <script src="{{url('Script%20js/search.js')}}" defer></script>
@endsection




@section("nav")
<!--Flex Container NAV inizio-->
<div><a href="{{url('home')}}">Home</a></div>
<div><a href="{{url('home/account/favourites')}}">Preferiti</a></div>
<div><a href="{{url('home/account')}}">Area personale</a></div>
<div><a href="{{url('logout')}}">Logout</a></div>
@endsection




@section("overlay_img")
<div id="user_img_container">
            <img id="user_img" src="{{url('Images/user.jpeg')}}" />
        </div>

        <div id="user_container">
            <div id="user">
                Ciao {{$username}}!
            </div>
        </div>
@endsection



@section("section")
<div class="section-container">

<section class="search">

<form name="search_form" method="get">
        <div id="authentication">
            <div id="credentials">
                <label><div>Aeroporto di partenza</div><input type="text" name="departure"> </label>
                <label><div>Aeroporto di arrivo</div><input type="text" name="arrival"> </label>
                <div id="bottom">
                   <span><input type="checkbox" name="direct_flights" value="direct_flights" id="direct">Cerca voli multiscalo</span>
                   <input type="submit" name="Search" value="Cerca">
                </div>
            </div>
        </div> 
    </form>

</section>

<section class="results">

</section>

</div>
@endsection


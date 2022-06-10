@extends("layouts.app")

@section("title","Preferiti")
@section("subtitle","I TUOI PREFERITI")


@section("head")
    <link rel="Stylesheet" href="{{url('Stylesheets/favourites.css')}}">
    <script src='{{url("Script%20js/get_favourites.js")}}' defer></script>
@endsection




@section("nav")
<!--Flex Container NAV inizio-->
<div><a href="{{url('home')}}">Home</a></div>
<div><a href="{{url('home/account')}}">Area personale</a></div>
<div>Chi siamo</div>
<div><a href="{{url('logout')}}">Logout</a></div>
@endsection   

   

@section("overlay_img")
<div id="user_img_container">
            <img id="user_img" src='{{url("Images/user.jpeg")}}' />
        </div>

        <div id="user_container">
            <div id="user">
                Ciao {{$username}}!
            </div>
        </div>
@endsection

   

@section("section")
    <ul></ul>
@endsection   

    

    








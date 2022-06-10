@extends("layouts.app")



@section("title","Area Personale")

@section("head")
<link rel="Stylesheet" href="{{url('Stylesheets/account.css')}}">
@endsection
    





@section("nav")
        <!--Flex Container NAV inizio-->
        <div><a href="{{url('home')}}">Home</a></div>
        <div><a href="{{url('home/account/favourites')}}">Preferiti</a></div>
        <div><a href="{{url('home/account/search')}}">Cerca voli</a></div>
        <div><a href="{{url('logout')}}">Logout</a></div>
@endsection    

@section("subtitle","Area personale")






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
@endsection
    

    



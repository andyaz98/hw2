<!DOCTYPE html>
<html>

<head>
    <script src="{{url('Script%20js/login.js')}}" defer></script>
    <link rel="Stylesheet" href="{{url('Stylesheets/login.css')}}">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Palette+Mosaic&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>

<body>


    <form name="login_form" method="post">
        <div id="authentication">
            <div id="credentials">
                <input name="_token" type="hidden" value="{{$csrf_token}}">
                <label> Nome utente <input type="text" name="username" value="{{$old_username ?? ''}}"></label>
                <label> Password <input type="password" name="password"> </label>
                <div id="bottom">
                   <span><input type="checkbox" name="remember_user" value="remember_user">Resta collegato</span>
                   <input type="submit" name="LogIn" value="Login">
                </div>
               <div class="register"><div>Se non hai ancora un account</div><a href="{{url('signup')}}">registrati</a></div>
            </div>
           

        </div>

        
    </form>

    <!--Se entriamo qui, vuol dire che sono state immesse credenziali errate nel precedente tentativo di login-->
    @if(isset($old_username))
    <div class='wrong_login'>Credenziali errate</div>
    @endif

    <div class='no_username'>Username mancante!</div>
    <div class='no_password'>Password mancante!</div>


</body>

</html>
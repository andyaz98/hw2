<!DOCTYPE html>
<html>

<head>
    <script src="{{url('Script%20js/signup.js')}}" defer></script>
    <link rel="Stylesheet" href="{{url('Stylesheets/signup.css')}}">
    <title>Signup</title>
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

@if(isset($username))
   <!--Registrazione avvenuta-->
   <div class='success'>Registrazione avvenuta con successo!<a href="{{url('home/account')}}"> Vai all area personale</a></div>

@else
    <!--Se non sono presenti dati post, mostra il form-->
    <form name="login_form" method="post">
    <div id="authentication">
        <div id="credentials">
            <input name="_token" type="hidden" value="{{$csrf_token}}">
            <label> Nome utente <input type="text" name="username"> </label>
            <label> Password <input type="password" name="password"> </label>
            <div id="bottom">
               <input type="submit" name="LogIn" value="Registrati">
            </div>
           <div class="register"><div>Se sei già registrato</div><a href="{{url('login')}}">vai al login</a></div>
        </div>
       

    </div>

    
</form>
@endif



    <!--Questi div verranno mostrati se vengono riscontrati errori durante la validazione delle credenziali lato client-->
    <div class='hidden no_username'>Username mancante!</div>
    <div class='hidden no_password'>Password mancante!</div>
    <div class='hidden short_username'>L'username deve contenere almeno 4 caratteri!</div>
    <div class='hidden long_username'>L' username può contenere al massimo 10 caratteri!</div>
    <div class='hidden used_username'>Username già in uso!</div>
    <div class='hidden short_password'>La password deve contenere minimo 8 caratteri!</div>
    <div class='hidden pwd_username'>La password non può essere uguale all'username!</div>
    <div class='hidden pwd_upper'>La password deve contenere almeno una lettera maiuscola!</div>
    <div class='hidden pwd_special'>La password deve contenere almeno un carattere speciale!</div>

    

</body>

</html>
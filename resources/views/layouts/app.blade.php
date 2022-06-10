<!DOCTYPE html>
<html>

<head>
    <title>@yield("title")</title>

    @section("head")
   
    js scripts and stylesheets
   
    @show

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
   


    <nav>
      @section("nav")
      
      navbar content

      @show
    </nav>
        

    <header>

    


        <div id="overlay">
            <img id="background" src='{{url("Images/background.jpeg")}}' />
            <div id="layer"></div>

            <div id="title_container">
                <div id="title_1">Dream </div>
                <div id="title_2">Viaggi</div>
            </div>

            <div id="subtitle_container">
                <div id="subtitle">@yield("subtitle")</div>
            </div>

        </div>

        @section("overlay_img")

        Bottom overlay image
        
        @show



    </header>


    <section>

    @section("section")
        

    Page main section


    @show

    </section>

    <footer>
        <!--Flex Container FOOTER inizio-->

        <div>
            Andrea Azzaro O46001884
        </div>
    </footer>
    <!--Flex Container FOOTER fine-->




</body>


</html>
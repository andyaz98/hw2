
<?php
        session_start();

        $flights=array();

        $db_connection=mysqli_connect("localhost","root","","hw2") or die("Errore: ".mysqli_connect_error());
        $departure=mysqli_real_escape_string($db_connection,$_GET["departure"]);
        $arrival=mysqli_real_escape_string($db_connection,$_GET["arrival"]);
        $directOnly=$_GET["directOnly"];
        if($directOnly=="false"){
            $db_query="select dep.citta, arr.citta,v.compagnia,v.codice from aeroporto dep join decolla d on d.aeroporto=dep.codice join atterra at on at.volo=d.volo join aeroporto arr on at.aeroporto=arr.codice join volo v on d.volo=v.codice where dep.citta='".$departure."' and arr.citta='".$arrival."'";
        }
        else{
            $db_query="select dep.citta,scalo.citta,arr.citta,v.compagnia,v.codice from aeroporto dep join decolla d on d.aeroporto=dep.codice join atterra at on at.volo=d.volo join aeroporto scalo on scalo.codice=at.aeroporto join connette c on at.volo=c.volo join decolla dc on dc.volo=c.connessione join atterra ac on ac.volo=dc.volo join aeroporto arr on ac.aeroporto=arr.codice join volo v on d.volo=v.codice where dep.citta='".$departure."' and arr.citta='".$arrival."'";
        }
        $db_query_result=mysqli_query($db_connection,$db_query);

        while($db_row=mysqli_fetch_row($db_query_result)){

            //print_r($db_row);

            $flights[]=$db_row;
        }

        mysqli_free_result($db_query_result);
        mysqli_close($db_connection);

        echo json_encode($flights);
        
?>

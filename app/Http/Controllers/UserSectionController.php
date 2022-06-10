<?php

use Illuminate\Routing\Controller as BaseController;

class UserSectionController extends BaseController
{
    public function account(){

        if(session('user_id')!=null){
            $user=User::find(session("user_id"));
            return view("account")
               ->with("username",$user->username);
            }
            else{
                return redirect('home');
            }
    }
    
    public function favourites(){
        if(session('user_id')!=null){
            $user=User::find(session("user_id"));
            return view("favourites")
               ->with("username",$user->username);
            }
            else{
                return redirect('home');
            }
    }

    public function search(){
        if(session('user_id')!=null){
        $user=User::find(session("user_id"));
        return view("search")
           ->with("username",$user->username);
        }
        else{
            return redirect('home');
        }

    }

    public function searchForFlights($departure,$arrival,$direct){
        $json=Http::get("localhost/hw2/public/Script%20php/get_flights.php/?departure=".$departure."&arrival=".$arrival."&directOnly=".$direct);
        return($json);
    }


    //Non in uso in quanto non restituisce tutti i campi richiesti dalla select...

    /*public function searchForFlights($departure,$arrival,$direct){

        if($direct=='true'){
            $result=DB::select("SELECT dep.citta,arr.citta,v.compagnia,v.codice 
            FROM aeroporto dep 
            JOIN decolla d ON d.aeroporto=dep.codice 
            JOIN atterra att ON att.volo=d.volo 
            JOIN aeroporto arr ON att.aeroporto=arr.codice 
            JOIN volo v ON d.volo=v.codice 
            WHERE dep.citta=? AND arr.citta=?",[$departure,$arrival]);
    
            return($result);
        
        }

        else{
            $result=DB::select("SELECT dep.citta,scalo.citta,arr.citta,v.compagnia,v.codice 
            FROM aeroporto dep 
            JOIN decolla d ON d.aeroporto=dep.codice 
            JOIN atterra att ON att.volo=d.volo 
            JOIN aeroporto scalo ON scalo.codice=att.aeroporto 
            JOIN connette c ON att.volo=c.volo 
            JOIN decolla dc ON dc.volo=c.connessione 
            JOIN atterra ac ON ac.volo=dc.volo 
            JOIN aeroporto arr ON ac.aeroporto=arr.codice 
            JOIN volo v ON d.volo=v.codice 
            WHERE dep.citta=? AND arr.citta=?",[$departure,$arrival]);

            return($result);

        }
    
        }*/

        
    
}

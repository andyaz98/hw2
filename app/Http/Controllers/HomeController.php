<?php


use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    public function home(){
        if(session('user_id')!=null){
            $user=User::find(session("user_id"));
            return view("home")
               ->with("username",$user->username);
            }
            else{
                return view('home');
            }
    }
    public function getImages($query){

        $json=Http::get("https://pixabay.com/api",[
            'key'=>env("PIXABAY_API_KEY"),
            'image_type'=>'photo',
            'orientation'=>'horizontal',
            'category'=>'places',
            'q'=>$query
        ]);

        return($json);
    }

    /*public function getFlightsToken(){
        $token=Http::withHeaders([
            'Content-Type'=>'application/x-www-form-urlencoded',
            ])->post("https://test.api.amadeus.com/v1/security/oauth2/token",[
                'grant_type'=>'client_credentials',
                'client_id'=>env("AMADEUS_API_CLIENT_ID"),
                'client_secret'=>env("AMADEUS_API_CLIENT_SECRET"),
            ]);
        return($token);

    }*/

    public function getFlightsToken(){
        $token=Http::get("localhost/hw2/public/Script%20php/amadeus.php");
        return($token);
    }

    public function getHomeContent(){
        $json=Http::get("localhost/hw2/public/Script%20php/home_content.php");
        return($json);
    }
}

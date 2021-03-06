<?php

use Illuminate\Routing\Controller as BaseController;

class UserFavouritesController extends BaseController
{
    
    public function addToFavourites($fav_dest){
        $user=User::find(session("user_id"));
        $favourite=$user->favourites->where("favourite_dest",$fav_dest)->first();
        if(!isset($favourite)){
            $favourite=new Favourite;
            $favourite->favourite_dest=$fav_dest;
            $favourite->user_id=$user->id;
            $favourite->save();
            return($user->username." ha aggiunto ".$favourite->favourite_dest." ai preferiti!");
        }
        else{
            return($user->username." possiede già ".$fav_dest." tra i suoi preferiti!");
        }
    }

    public function getUserFavourites(){
        $user=User::find(session("user_id"));
        $favourites=$user->favourites;
        return($favourites);
    }

    public function removeFromFavourites($fav_dest){
        $user=User::find(session("user_id"));
        $favourite=$user->favourites->where("favourite_dest",$fav_dest)->first();
        $favourite->delete();
        return($user->username." ha eliminato ".$fav_dest." dai preferiti!");
    }
}

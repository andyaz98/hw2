<?php
use Illuminate\Database\Eloquent\Model;

class User extends Model{
    //Per non mostrare la password dell'utente salvata nel db
    protected $hidden=["password"];

    public function favourites(){
        //Ogni utente può avere tanti preferiti, la cui foreign key si trova nella colonna user_id
        return $this->hasMany("Favourite","user_id");
    }
    

}

?>

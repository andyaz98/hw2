<?php
use Illuminate\Database\Eloquent\Model;

class Favourite extends Model{
    
    public function user(){
        //Ogni preferito esistente, identificato dalla coppia di valori id e user_id, deve appartenere ad un solo utente
        return $this->belongsTo("User");
    }
    
}

?>

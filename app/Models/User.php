<?php
use Illuminate\Database\Eloquent\Model;

class User extends Model{
    //Per non mostrare la password dell'utente salvata nel db
    protected $hidden=["password"];
    

}

?>

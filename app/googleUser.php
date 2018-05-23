<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class googleUser extends Model
{
    //
    protected $table = 'googleuser';
    protected $primaryKey = 'id';


    function createUserGoogle($code,$token,$refreshToken,$type,$userId)
 {
     $userGogle = new googleUser;
     $userGogle->code = $code;
     $userGogle->token = $token;
     $userGogle->refreshToken = $refreshToken;
     $userGogle->type = $type;
     $userGogle->user_id =$userId;
     $userGogle->save();
 }

    function buscar()
 {
     $userGoogle = googleUser::where('id', 10)->get();

 }

}

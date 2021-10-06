<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserBlock;
use App\Models\UserFavorite;
use App\Models\UserConnection;
use App\Models\UserMessage;
use App\Models\UserNotification;
use App\Models\UserPicture;
use App\Models\UserHobby;
use App\Models\UserInterest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Auth;

class adminController extends Controller {

    function getUsers(){

        $userInfo = User::with("id" ,"first_name" , "last_name", "bio", "is_highlighted")->get()->toArray();
        return json_encode($userInfo);

    }







}

?>
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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Auth;

class UserController extends Controller{
	
	function highlighted(){
		$highlighted_users = User::where("is_highlighted", 1)->limit(6)->get()->toArray();
		return json_encode($highlighted_users);
	}

	function interest(){
		$user = Auth::user();
		$usersInterest = User::where("gender", $user->interested_in)->get()->toArray();
		return json_encode($usersInterest);
	}

	function register(Request $request){
		$user = new User;
		$user->user_type_id = $request->user_type_id;
		$user->first_name = $request->first_name;
		$user->last_name = $request->last_name;
		$user->email = $request->email;
		$user->password = Hash::make($request->password);
		$user->gender = $request->gender;
		$user->interested_in = $request->interested_in;
		$user->dob = $request->dob;
		$user->height = $request->height;
		$user->weight = $request->weight;
		$user->nationality = $request->nationality;
		$user->net_worth = $request->net_worth;
		$user->currency = $request->currency;
		$user->bio = $request->bio;
		$user->is_highlighted = $request->is_highlighted;
		$user->save();

		return json_encode("Hello");
	}
	
	function favorite($favorite){
		$user = Auth::user();
		$id = $user->id;

		$userFavorite = new UserFavorite;
		$userFavorite->from_user_id = $id;
		$userFavorite->to_user_id = $favorite;
		$userFavorite->save();

		$UserNotification = new UserNotification;
		$UserNotification->user_id = $favorite;
		$UserNotification->body = "Hey you! " .$user->first_name. " ".$user->last_name." tapped you";
		$UserNotification->is_read = 0;
		$UserNotification->save();

		$fav = UserFavorite::where('from_user_id', '=', $favorite)->where('from_user_id', '=', $favorite)->get()->toArray();
		if($fav){
			$UserConnection = new UserConnection;
			$UserConnection->user1_id = $id;
			$UserConnection->user2_id = $favorite;
			$UserConnection->save();

		$UserNotification = new UserNotification;
		$UserNotification->user_id = $favorite;
		$UserNotification->body = "you Found a match, " .$user->first_name. " ".$user->last_name." in your matches";
		$UserNotification->is_read = 0;
		$UserNotification->save();

		$c_user = User::where('id', $favorite)->get()->toArray();


		$UserNotification = new UserNotification;
		$UserNotification->user_id = $id;
		$UserNotification->body = "you Found a match, " .$c_user->first_name. " ".$c_user->last_name." in your matches";
		$UserNotification->is_read = 0;
		$UserNotification->save();
		}

		
		return json_encode("favorite");
	}

    function block($blocked){
        $user = Auth::user();
        $id = $user->id;

        $userBlock = new UserBlock;
        $userBlock->from_user_id = $id;
        $userBlock->to_user_id = $blocked;
        $userBlock->save();
        return json_encode("done");

    }

    function appPic($pic){

        $userPic = UserPicture::where('id', '=', $pic);
        $userPic->is_approved = true;
        $userPic->save();
        return json_encode("done");
    }

    function rejectPic($pic){

        $userPic = UserPicture::where('id', '=', $pic);
        $userPic->is_approved = false;
        $userPic->save();
        return json_encode("done");
    }

    function appMsg($msg){

        $userMessage = UserMessage::where('id', '=', $msg);
        $userMessage->is_approved = true;
        $userMessage->save();
        return json_encode("done");
    }

    function rejectMsg($msg){

        $userMessage = UserMessage::where('id', '=', $msg);
        $userMessage->is_approved = false;
        $userMessage->save();
        return json_encode("done");
    }

    function readMsg($msg){

        $userMessage = UserMessage::where('id', '=', $msg);
        $userMessage->is_read = true;
        $userMessage->save();
        return json_encode("done");
    }

    function makeHighlighted($id){

        $user = User::where("id", '=', $id);
        $user->is_highlighted = 1;
        $user->save();
        return json_encode("done");
    }

    function removeHighlighted($id){

        $user = User::where("id", '=', $id);
        $user->is_highlighted = 0;
        $user->save();
        return json_encode("done");
    }

    function editInfo($first_name, $last_name, $height, $weight, $net_worth, $currency, $bio ,$nationality, $email){
        $user = Auth::user();

        $user->first_name = $first_name;
        $user->last_name = $last_name;
        $user->email = $email;
        $user->height = $height;
        $user->weight = $weight;
        $user->nationality = $nationality;
        $user->net_worth = $net_worth;
        $user->currency = $currency;
        $user->bio = $bio;
        $user->save();

        return json_encode("done");
    }


	function test(){
		$user = Auth::user();
		$id = $user->id;
		return json_encode($id);
	}

}

?>
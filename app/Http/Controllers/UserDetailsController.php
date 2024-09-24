<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserDetails;

class UserDetailsController extends Controller
{
    function userDataView(){
        $user_data = UserDetails::get();
        return response()->json(['user_data' => $user_data]);
    }

    function userDataForm(Request $request){
        return view('user-form');
    }
    
    function userDataSubmit(Request $request){

        $insertUserData = new UserDetails;
        $insertUserData->first_name = $request['first_name'];
        $insertUserData->last_name = $request['last_name'];
        $insertUserData->email = $request['email'];
        $insertUserData->password = $request['password'];
        $insertUserData->gender = $request['gender'];
        $insertUserData->age = $request['age'];
        $insertUserData->save();

        return response()->json(['res' => 'User ['.$insertUserData->first_name.'] created successfully.']);
    }

    function userDelete($user_id){
        $id = UserDetails::find($user_id);
        if(!is_null($id)){
            $user_delete = $id->delete();
            return response()->json(['res' => 'User is deleted successfully.']);
        }else{
            return response()->json(['res' => 'User is not found.']);
        }

        return response()->json($id);
    }
}

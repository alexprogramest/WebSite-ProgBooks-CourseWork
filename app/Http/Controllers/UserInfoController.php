<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserInfoController extends Controller{
    
    public function getUserInfo(Request $req){
        $user_name = $req->input('user_name');
        $user_password = $req->input('user_password');
        $next_page = 'home';

        if ($user_name !== null && $user_password !== null) {
            $message_info = "Реєстрація пройшла успішно!";
            foreach (User::all() as $one_user) {
                if ($one_user->name == $user_name) {
                    if ($one_user->password == $user_password) {
                        $message_info = "Авторизація пройшла успішно!";
                        session([
                            'current_user_name' => $user_name,
                            'current_user_password' => $user_password,
                            'premium_user_type' => $one_user->premium_type_id
                        ]);
                    } else {
                        $message_info = "Помилка авторизації: не правильний пароль!";
                        $next_page = 'sign_in_or_sign_up';
                    }
                    return view($next_page, [
                        'whole_message_info' => $message_info
                    ]);
                }
            }
            $new_user = new User;
            $new_user->name = $user_name;
            $new_user->password = $user_password;

            $new_user->save();
            session([
                'current_user_name' => $user_name,
                'current_user_password' => $user_password
            ]);
            return view($next_page, [
                'whole_message_info' => $message_info
            ]);
        }
        return view($next_page, [
            'whole_message_info' => ""
        ]);
    }

    public function buyPremium(Request $req){
        $type_premium = $req->input('typeprem');
        session(['premium_user_type' => $type_premium]);
        User::where('name', '=', session('current_user_name'))->update(['premium_type_id' => $type_premium]);
        
    }
    
    public function cancelPremium(Request $req){
        session()->forget('premium_user_type');
        $the_current_user = User::where('name', '=', session('current_user_name'))->get();
        User::where('name', '=', session('current_user_name'))->update(['premium_type_id' => null]);
    }
}
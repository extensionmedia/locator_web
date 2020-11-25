<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller{

    public static function usersActivities(){
        $images = [
            'http://midone-vue.left4code.com/img/profile-14.04e928f6.jpg',
            'http://midone-vue.left4code.com/img/profile-11.b5ab9aac.jpg',
            'http://midone-vue.left4code.com/img/profile-6.29f8ba97.jpg',
            'http://midone-vue.left4code.com/img/profile-13.d46ecb73.jpg',
            'http://midone-vue.left4code.com/img/profile-8.550b132f.jpg'
        ];
        $users = [
            'Yassine EL MEFTOUHI',
            'Anas MARRAKCHI',
            'Fahd SEFFAR',
            'Souad BENAMAR',
            'Amina SAADIA'
        ];
        $all = [];
        $lorem = "Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.";
        $count_of_activities = rand (5, 16);
        for ($i=0; $i < $count_of_activities ; $i++) { 
            $random = rand (0, count($images)-1);

            array_push($all, [
                                    'profile_photo_path'        =>  $images[ $random ],
                                    'name'                      =>  $users[ $random ],
                                    'activity'                  =>  \substr($lorem,0,rand (20, \strlen($lorem))),
                                    'created_at'                =>  '15:42'
                            ]);
        }
        return $all;
    }

    public function edit($user){
        $user = [
            'profile_photo_path'            =>  'http://midone-vue.left4code.com/img/profile-14.04e928f6.jpg',
            'name'                          =>  'Yassine EL MEFTOUHI',
            'email'                         =>  'elmeftouhi@gmail.com',
            'telephone'                     =>  '+212661098984',
            'cin'                           =>  'LF19634',
            'user_profile'                  =>  'Administrateur',
            'entreprise_raison_sociale'     =>  'Locator SARL',
            'user_address'                  =>  'Lotissement DAR ALKHAIR, NR3, Rmilat - Martil',
            'is_gerant'                     =>  0,
            'status'                        =>  1
        ];

        $user_profiles = DB::table('user_profiles')->select('id', 'user_profile')->get();

        return view('user.edit')->with([
            'user'          =>  $user,
            'user_profiles' =>  $user_profiles
        ]);
    }
}

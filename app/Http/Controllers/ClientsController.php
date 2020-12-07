<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index(){
        return view('client.index', ['clients'=> $this->getClients() ]);
    }

    public function getClients(){
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
        $index = rand (0, count($images)-1);
        $clients = [];

        for ($i=0; $i < 50 ; $i++) { 
            $clients[] = [
                    'id'            =>  $i,
                    'name'          =>  $users[$index] . ' ' . $i,
                    'telephone'     =>  '+212661098984',
                    'email'         =>  'elmeftouhi@gmail.com',
                    'city'          =>  'Tetouan',
                    'cin'           =>  'LF19634',
                    'passport'      =>  '123456',
                    'photo'         =>  $images[$index],
                    'status'        =>  rand (0, 2),
                    'ca'            =>  '154 400 MAD',
                    'credit'        =>  '5 000 MAD'
            ];
        }
        return $clients;
    }

}

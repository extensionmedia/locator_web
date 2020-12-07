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
        $client_status = [
            0   =>  '<div class="inline py-1 px-2 text-xs bg-gray-200 text-gray-700 border-gray-400 text-center rounded-xl border">Désactivé</div>',
            1   =>  '<div class="inline py-1 px-2 text-xs bg-green-200 text-green-700 border-green-400 text-center rounded-xl border"> Activé</div>',
            2   =>  '<div class="inline py-1 px-2 text-xs bg-red-200 text-red-700 border-red-400 text-center rounded-xl border">Liste Noire</div>'
        ];
        $clients = [];

        for ($i=0; $i < 50 ; $i++) { 
            $index = rand (0, count($images)-1);
            $clients[] = [
                    'id'            =>  $i,
                    'name'          =>  $users[$index] . ' ' . $i,
                    'telephone'     =>  '+212661098984',
                    'email'         =>  'elmeftouhi@gmail.com',
                    'city'          =>  'Tetouan',
                    'cin'           =>  'LF19634',
                    'passport'      =>  '123456',
                    'photo'         =>  $images[$index],
                    'status'        =>  $client_status[ rand (0, 2) ],
                    'ca'            =>  '154 400 MAD',
                    'credit'        =>  '5 000 MAD'
            ];
        }
        return $clients;
    }

}

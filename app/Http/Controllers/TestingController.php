<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;

class TestingController extends Controller
{
    public function getAPI()
    {
        echo "<pre>";
        print_r(Http::get('http://localhost/apiProject/public/api/data')->json());
    }


    public function deleteAPI()
    {
        $id = 2;

        $delete = (Http::get('http://localhost/apiProject/public/api/deleteData/'.$id)->json());

        echo "<pre>";
        print_r($delete);
    }

    public function postAPI(Request $req)
    {
        $data = "zahid";

        echo "<pre>";
        // return $data;
        // die(); http://localhost/apiProject/public/api/addData/
        // dd(csrf_token());
        $response = Http::post('http://localhost/apiProject/public/api/addData/'.$data);
    }
}

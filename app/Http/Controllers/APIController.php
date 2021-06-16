<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApiData;

class APIController extends Controller
{
    public function getData()
    {
        $all_listing = ApiData::all();

        return ["data" => $all_listing];
    }

    public function postData(Request $req)
    {
        dd($data);
        $api_data = new ApiData;

        $api_data->name = "Zahid Jakhar";
        $api_data->password = "123";
        $result = $api_data->save();

        if($result)
        {
            return ["Result" => "Inserted"];
        }
        else
        {
            return ["Result" => "Some Thing Want Wrong"];
        }
    }


    public function updateData(Request $req)
    {
        $api_data = ApiData::find($req->id);

        $api_data->name = $req->name;
        $api_data->password = $req->password;
        $result = $api_data->update();

        if($result)
        {
            return ["Result" => "Updated Data"];
        }
        else
        {
            return ["Result" => "Some Thing Want Wrong"];
        }
    }



    public function deleteData($id)
    {

        $api_data = ApiData::find($id);

        $result = $api_data->delete();

        if($result)
        {
            return ["Result" => "Data Deleted"];
        }
        else
        {
            return ["Result" => "Some Thing Want Wrong"];
        }
    }
}

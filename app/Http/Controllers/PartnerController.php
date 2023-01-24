<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Partner;

class PartnerController extends Controller
{
    //
    public function getAllPartners(){
        $partners = Partner::all();

        return response()->json([
            "status" => 1,
            "message" => "Partners list",
            "total_partners"=>$partners->count(),
            "data" => $partners,
            
        ], 200);
    }


    public function addNewPartner(Request $request)
    {
        $request->validate([
            "title"=>"required",
            "source"=>"required",
            "href"=>"required",
        ]);

        $partner = new Partner();

        $partner->title = $request->title;
        $partner->source = $request->source;
        $partner->href = $request->href;
        $partner->save();

        return response()->json([
            "status" => 1,
            "message" => "Partner added successfully"
        ], 200);

    }

}

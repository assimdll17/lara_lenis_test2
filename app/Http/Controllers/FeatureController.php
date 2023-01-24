<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    
    public function getAllFeatures()
    {
        $features = Feature::all();

        return response()->json([
            "status" => 1,
            "message" => "Features list",
            "total_features"=>$features->count(),
            "data" => $features,
            
        ], 200);
    }

    
    public function addNewFeature(Request $request)
    {
        $request->validate([
            "name"=>"required",
            "text"=>"required",
        ]);

        $feature = new Feature();

        $feature->name = $request->name;
        $feature->text = $request->text;
        $feature->save();

        return response()->json([
            "status" => 1,
            "message" => "Feature added successfully"
        ], 200);
    }
}

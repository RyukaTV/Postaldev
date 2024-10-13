<?php

namespace App\Http\Controllers;
use App\Models\Parcel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ParcelController extends Controller{

    public function home_index(){
        return view("welcome", ["nbParcels" => count(Parcel::all())]);
    }

    public function register_index(){
        return view("register");
    }

    public function register_new_parcel(Request $request){
        $trackingNumber= rand(100000000, 999999999);
        $message= "Colis enregistré! Numero de suivi " . $trackingNumber;
        $validator = Validator::make($request->all(),[
            "address_dep" => "required|string|max:255",
            "address_arr" => "required|string|max:255",
            "weight" => "required|numeric|min:1"
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $parcel= Parcel::create([
            "address_dep" => $request->address_dep,
            "address_arr" => $request->address_arr,
            "weight" => $request->weight,
            "tracking_number" => $trackingNumber,
        ]);
        return view("register", compact("message"));
    }

    public function tracking_index(){
        return view("tracking");
    }

    public function tracking_search(Request $request){
        $parcel= Parcel::where("tracking_number", $request->tracking_number)->first();
        if (!$parcel) {
            return "Colis Introuvable";
        }
        return view("tracking", compact("parcel"));
    }

}

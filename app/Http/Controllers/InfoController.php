<?php

namespace App\Http\Controllers;
use App\Models\InfoModel;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public static function index(){
        $info = InfoModel::get();
        return view('pages.information.index')->with(['info' => $info]);
    }

    public static function registration(){
        $info = InfoModel::get();
        return view('pages.information.registration')->with(['info' => $info]);
    }

    public static function details(){
        $info = InfoModel::get();
        return view('pages.patients.details')->with(['info' => $info]);
    }

    public static function store(Request $request){
        // Validate the request
        $request->validate([
            'inp_name' => 'required|string|max:255',
            'inp_address' => 'required|string|max:255',
            'inp_civil_status' => 'required|string|max:255',
            'inp_religion' => 'required|string|max:255',
            'inp_philhealth' => 'required|string|max:255',
            'inp_philhealth_num' => 'required|string|max:255',
            'inp_age' => 'required|string|max:255',
            'inp_bloodtype' => 'required|string|max:255',
            'inp_birthdate' => 'required|string|max:255',
            'inp_weight' => 'required|string|max:255',
            'inp_contact_num' => 'required|string|max:255',
            'inp_gavida' => 'required|string|max:255',
            'inp_term' => 'required|string|max:255',
            'inp_preterm' => 'required|string|max:255',
            'inp_abortion' => 'required|string|max:255',
            'inp_live' => 'required|string|max:255',
        ]);

        InfoModel::create([
            'info_name' => $request->inp_name,
            'info_address' => $request->inp_address,
            'info_civil_status' => $request->inp_civil_status,
            'info_religion' => $request->inp_religion,
            'info_philhealth' => $request->inp_philhealth,
            'info_philhealth_num' => $request->inp_philhealth_num,
            'info_age' => $request->inp_age,
            'info_bloodtype' => $request->inp_bloodtype,
            'info_birthdate' => $request->inp_birthdate,
            'info_weight' => $request->inp_weight,
            'info_contact_num' => $request->inp_contact_num,
            'info_gavida' => $request->inp_gavida,
            'info_term' => $request->inp_term,
            'info_preterm' => $request->inp_preterm,
            'info_abortion' => $request->inp_abortion,
            'info_live' => $request->inp_live,
            
        ]);
    
        // Redirect back with success message
        return redirect()->back()->with( 'success', 'Information added successfully!');
    }
}
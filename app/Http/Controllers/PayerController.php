<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Payer; 
use DataTables;

class PayerController extends Controller
{
    
    

    public function form()
    {
        return view('Payer/RegisterPayer');
    }

    private function idGenerate()
    {
        $id = IdGenerate::generate(['table'=> 'tax_payer', 'length' => 10, 'prefix'=>"SIG-"]);
        return $id;  
    }
    
    public function storePayer(Request $request)
    {
        $validatedData = $request->validate([
            'surname' => 'required|min:3|max:50',
            'othername' => 'required|min:3|max:50',
            'gender' => 'required|in:FEMME,HOMME',
            'national_id' => 'required|min:3|max:50',
            'email' => 'nullable|email|min:3|max:50',
            'file_number' => 'required|min:3|max:50',
            'voter_id' => 'nullable|min:3|max:50',
            'telephone_1' => 'required|min:3|max:50',
            'telephone_2' => 'nullable|min:3|max:50',
            'geolocation' => 'nullable|min:3|max:50',
            'latitude' => 'nullable|min:3|max:50',
            'longitude' => 'nullable|min:3|max:50',
            'precision' => 'nullable|min:3|max:50',
            'altitude' => 'nullable|min:3|max:50',
            'address' => 'required',
            'village' => 'nullable|min:3|max:100',
            'city' => 'nullable|min:3|max:100',
            'neighborhood' => 'nullable',
            'municipal' => 'required|min:3', 
            'zone_name' => 'required|min:3',
        ]);

        $payer_details = new Payer();
        $payer_details->TaxPayerId = rand(2000000,100000);
        $payer_details->Surname = $request->input('surname');
        $payer_details->Firstname = $request->input('othername');
        $payer_details->GenderId = $request->input('gender');
        $payer_details->NationalIdNumber = $request->input('national_id');
        $payer_details->Email = $request->input('email');
        $payer_details->FileNumber = $request->input('file_number');
        $payer_details->VoterNumber = $request->input('voter_id');
        $payer_details->Telephone1 = $request->input('telephone_1');
        $payer_details->Telephone2 = $request->input('telephone_2');
        $payer_details->Geolocation = $request->input('geolocation');
        $payer_details->Latitude = $request->input('latitude');
        $payer_details->Longitude = $request->input('longitude');
        $payer_details->GeoPrecision = $request->input('precision');
        $payer_details->Address = $request->input('address');
        $payer_details->Village = $request->input('village');
        $payer_details->City = $request->input('city');
        $payer_details->Neighborhood = $request->input('neighborhood');
        $payer_details->MunicipalId = $request->input('municipal');
        $payer_details->ZoneId = $request->input('zone_name');
        $payer_details->save();

        return redirect()->back()->with('success', 'Data stored successfully!');
    }


    public function deletePayer($id)
    {
         DB::table('tax_payer')->where('TaxPayerId ', '=', $id)->delete();
         return view('Payer.Payers');
    }

    public function getAllPayers()
    {
        // fetch all tax_payers which are active and not soft deleted
        $payers = Payer::rightJoin('gender', 'gender.GenderId', '=', 'tax_payer.GenderId')
        ->where('tax_payer.Archived', 'NO')
        ->where('gender.Differential', '0')
        ->select('tax_payer.*', 'gender.GenderId as GenderId', 'gender.GenderName')
         // ->limit(20)
        ->get();

        return view('Payer.Payers', compact('payers'));
    }
    
    
    public function savePayer(Request $request)
     {
        // Validate the form data
        // $validatedData = $request->validate([
        //     'surname' => 'required|min:3|max:50',
        //     'othername' => 'required|min:3|max:50',
        //     'gender' => 'required|in:FEMME,HOMME',
        //     'national_id' => 'required|min:3|max:50',
        //     'email' => 'required|email',
        //     'file_number' => 'required|min:3|max:50',
        //     'voter_id' => 'required|min:3|max:50',
        //     'telephone_1' => 'required|min:3|max:50',
        //     'telephone_2' => 'nullable|min:3|max:50',
        //     'telephone_3' => 'nullable|min:3|max:50',
        //     'geolocation' => 'max:50',
        //     'latitude' => 'max:50',
        //     'longitude' => 'max:50',
        //     'precision' => 'max:50',
        //     'altitude' => 'max:50',
        //     'address' => 'max:255',
        //     'village' => 'max:100',
        //     'city' => 'max:100',
        //     'neighborhood' => 'max:255',
        //     'municipal' => 'max:255',
        //     'zone_name' => 'nullable',
        // ]);

        // Create a new Payer instance and save it to the database
        $payer = Payer::create($validatedData);

        return response()->json(['message' => 'Payer saved successfully', 'payer' => $payer], 201);
    }

   
    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'Firstname' => 'required|string|max:100',
            'Surname' => 'required|string|max:100',
            'GenderId' => 'required|string|max:20',
            'NationalIdNumber' => 'required|string|max:50',
            
        ]);

        // Find the payer by ID
        $payer = Payer::findOrFail($id);

        // Update the payer
        $payer->update($validatedData);

        // Additional logic or response handling can be added here

        return response()->json(['message' => 'Payer updated successfully', 'payer' => $payer]);
    }




}

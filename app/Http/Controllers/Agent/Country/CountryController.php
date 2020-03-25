<?php

namespace App\Http\Controllers\Agent\Country;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Countries\Country;
use Session;
use Auth;

class CountryController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function create(Request $request)
    {
    	$country = Country::all();
    	//dd($country);

    	return view('agent.country.create',compact('country'));
    }

    public function store(Request $request)
    {
    	        $validatedData = $request->validate([

            'countryname' => 'required|string|max:255',
            'countrysh' => 'required|string',
        ]);

        $country = Country::create($validatedData);
       // dd($offices)->toArray();
        return view('agent.country.create',compact('country'))->with('success', 'Country successfully saved');
    }
     


     public function edit($id)
     {

     	$country = Country::findorFail($id);
     	//dd($country_edit);
     	return view('agent.country.create',compact('country'));
     }
    public function update(Request $request, $id)
    {
    	  $request->validate(
                [
                'countryname' => 'required|max:255',
                 ]);

        $coun =
            [
                'countryname' => $request->countryname,
            ];

        $country=Country::whereId($id)->update($coun);
        //dd($country_update);
        return view('agent.country.create',compact('country'))->with('update', 'Country successfully updated!');

    }
     public function destroy(Country $country)
    	{

            $country->delete();
  
            return redirect()->route('country.destroy')
                    ->with('error','Product deleted successfully');
    }



}

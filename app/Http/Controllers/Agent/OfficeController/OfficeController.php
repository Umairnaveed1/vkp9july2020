<?php

namespace App\Http\Controllers\Agent\OfficeController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\OfficeManager\OfficeManager;
use App\Models\Agents\Agent;
use Session;
use Auth;


class OfficeController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
      //  $offices = OfficeManager::all();

        //    return view('agent.office_manager.create');

    }
    public function create(Request $request)
    {

       $offices = OfficeManager::with('agent')
           ->orderBy('created_at','desc')
           ->paginate(10);
           dd($offices);
       //dd($offices)->toArray();

        


    }
    public function store(Request $request)
    {

        $validatedData = $request->validate([

            'office_description' => 'required|max:255',
            'office_address' => 'required',
            'office_phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'office_fax' => 'required|alpha_num',
            'office_email' => 'required|email',
            'manager' => 'required',
           'co_manager' => 'required',
        ]);

        $offices = OfficeManager::create($validatedData);
       // dd($offices)->toArray();
        return redirect('office/create')->with('success', 'office  successfully saved');

    }

    public function show($id)
    {
        $book = OfficeManager::findorFail($id);
        $show_image = Storage::get($book->book_image);
//       dd($show_image);

        return view('Books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $office = OfficeManager::findorFail($id);
        //  dd($office);
        return view('agent.office_manager.edit',compact('office'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
                [
                'office_description' => 'required|max:255',
                'office_address' => 'required',
                'office_phone' => 'required|numeric',
                'office_fax' => 'required|alpha_num',
                'office_email' => 'required|email',
                'manager' => 'required',
               'co_manager' => 'required',
                 ]
                        );

        $office =
            [
                'office_description' => $request->office_description,
                'office_address' => $request->office_address,
                'office_phone' => $request->office_phone,
                'office_fax' => $request->office_fax,
                'office_email' => $request->office_email,
                'manager' => $request->manager,
                'co_manager' => $request->co_manager,

            ];

        OfficeManager::whereId($id)->update($office);
        return redirect('office/create')->with('update', 'office updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $offices = OfficeManager::where('id', $id)->delete();
       // dd($offices);
//        return redirect('/')->back();
        return redirect('office/create')->with('error', 'Office is deleted successfully');
    }
}

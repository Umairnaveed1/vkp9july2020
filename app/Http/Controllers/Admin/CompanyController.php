<?php



namespace App\Http\Controllers\admin;



use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\CompanyInfo\company_info;



class CompanyController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

         public function __construct()

    {

        $this->middleware('auth');

    }

    public function index()

    {
        $data['company_info'] = company_info::get()->first();
        return view('admin.company_info', $data);

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create(Request $request)

    {

        $validatedData = $request->validate([
            'company_name' => 'required',
            'company_address' => 'required',
            'company_phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'company_fax' => 'required|alpha_num',
            'company_abbrevation' => 'required',
        ]);

        $compamy_name = $request->company_name;
        $company_address_1 = $request->company_address;
        $company_address_2 = $request->company_address_1;
        $company_phone = $request->company_phone;
        $company_fax = $request->company_fax;
        $disclaimer = $request->disclaimer;
        $company_abbrevation = $request->company_abbrevation;
        $company_emial = $request->company_emial;
        $company_phone_1 = $request->company_phone_1;
        $company_info_id = $request->company_info_id;
        if(isset($company_info_id)){
            $where = array('id' => $company_info_id);
        $company_data = array(
           'company_name' => $compamy_name,
           'company_abbrevation' => $company_abbrevation,
           'company_address' => $company_address_1,
           'company_address_1' => $company_address_2,
           'company_phone' => $company_phone,
           'company_fax' => $company_fax,
           'company_email' => $company_emial,
           'company_phone_1' => $company_phone_1,
           'disclaimer' => $disclaimer,
        );
        $company_info = company_info::where($where)->update($company_data);
        return redirect('company/info')->with('success', 'Company Info successfully Updated');

        }
        else{
        $company_data = array(
           'company_name' => $compamy_name,
           'company_abbrevation' => $company_abbrevation,
           'company_address' => $company_address_1,
           'company_address_1' => $company_address_2,
           'company_phone' => $company_phone,
           'company_fax' => $company_fax,
           'company_email' => $company_emial,
           'company_phone_1' => $company_phone_1,
           'disclaimer' => $disclaimer,
        );
        $company_info = company_info::create($company_data);
        return redirect('company/info')->with('success', 'Company Info successfully saved');
        }


        

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

    }



    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        //

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {

        //

    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, $id)

    {

        //

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        //

    }

}


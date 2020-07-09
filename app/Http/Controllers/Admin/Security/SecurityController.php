<?php

namespace App\Http\Controllers\Admin\Security;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\Admin\Security\Security;
use Redirect,Response;
use Session;
use App\User;
use Illuminate\Support\Facades\Input;


class SecurityController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pagesecurity = Security::with('users')->orderby('id','desc')->paginate(5);
        // dd($pagesecurity);
        $record = Security::where('addsecurity', '=', Input::get('addsecurity'))->first();
// if ($record === null) {
   
// }
        return view('admin.security.index',compact('pagesecurity',$pagesecurity,'record'));
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {  
        $user_id = Auth::user()->id;
        
        $validatedData = $request->validate([
            'addsecurity' => 'required|max:255',     
        ]);

        $security = new Security();
        $security->addsecurity = $request->addsecurity;
        $security->viewsocialsec =$request->viewsocialsec;
        $security->editoverr = $request->editoverr;
        $security->editagenta = $request->editagenta;
        $security->chengeagea = $request->chengeagea;
        $security->setagent = $request->setagent;
        $security->deleteedit = $request->deleteedit;
        $security->viewagent = $request->viewagent;
        $security->editagentc = $request->editagentc;
        $security->viewETCPaid = $request->viewETCPaid;
        $security->chargeback = $request->chargeback;
        $security->printtransaction = $request->printtransaction;
        $security->addagente = $request->addagente;
        $security->deleteagent = $request->deleteagent;
        $security->editexpense = $request->editexpense;
        $security->printexpense = $request->printexpense;
        $security->addagentb = $request->addagentb;
        $security->deleteagentb = $request->deleteagentb;
        $security->editbonush = $request->editbonush;
        $security->severagenta = $request->severagenta;
        $security->recalculate = $request->recalculate;
        $security->editautopay = $request->editautopay;
        $security->editslowpay = $request->editslowpay;
        $security->editdonotplace = $request->editdonotplace;
        $security->editnoadvancable = $request->editnoadvancable;
        $security->editnocontract = $request->editnocontract;
        $security->editpropertyinfo = $request->editpropertyinfo;
        $security->editmgmtinfo = $request->editmgmtinfo;
        $security->changemainbilling = $request->changemainbilling;
        $security->editlastcontract = $request->editlastcontract;
        $security->printtransactionscreen = $request->printtransactionscreen;
        $security->editdeletenotesbyotheruser = $request->editdeletenotesbyotheruser;
        $security->depositsecurity = $request->depositsecurity;
        $security->approvalsecurity = $request->approvalsecurity;
        $security->approve = $request->approve;
        $security->reject = $request->reject;
        $security->depostrecsecset = $request->depostrecsecset;
        $security->rcvd = $request->rcvd;
        $security->addpayment = $request->addpayment;
        $security->postpayment = $request->postpayment;
        $security->checkscaccess = $request->checkscaccess;
        $security->processcomm = $request->processcomm;
        $security->createcommcheck = $request->createcommcheck;
        $security->processautopays = $request->processautopays;
        $security->createautopayschecks = $request->createautopayschecks;
        $security->renumberchecks = $request->renumberchecks;
        $security->exportchecks = $request->exportchecks;
        $security->changebillingaddressinvoice = $request->changebillingaddressinvoice;
        $security->adjustcomminvoice = $request->adjustcomminvoice;
        $security->selectnoopayinvoice = $request->selectnoopayinvoice;
        $security->selectno = $request->selectno;
        $security->autopayscreenset = $request->autopayscreenset;
        $security->createautopaysecset = $request->createautopaysecset;
        $security->changeautopaybillinaddress = $request->changeautopaybillinaddress;
        $security->autopayaddpayments = $request->autopayaddpayments;
        $security->adduser = $request->adduser;
        $security->addsecurityl = $request->addsecurityl;
        $security->user_id = $user_id;
        $security->save();

       // $security = Security::create($security_data);
   
        return redirect('pagesecurity')->with('success', 'Security name is successfully saved');
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
        $pagesecurity = Security::paginate(5);
        $security = Security::findorFail($id);
        //   dd($security);
        return view('admin.security.edit',compact('security','pagesecurity'));

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
        $validatedData = $request->validate([
            'addsecurity' => 'required|min:3',
            'adduser' => 'sometimes',
            'addsecurityl' => 'sometimes',
        ]);
        // Security::whereId($id)->update($validatedData);
        $security = Security::find($id);
        $input['adduser'] = $request->get('adduser');
        $input['addsecurityl'] = $request->get('addsecurityl');
        $input['viewsocialsec'] = $request->get('viewsocialsec');
        $input['editoverr'] = $request->get('editoverr');
        $input['editagenta'] = $request->get('editagenta');
        $input['chengeagea'] = $request->get('chengeagea');
        $input['setagent'] = $request->get('setagent');
        $input['deleteedit'] = $request->get('deleteedit');
        $input['viewagent'] = $request->get('viewagent');
        $input['editagentc'] = $request->get('editagentc');
        $input['viewETCPaid'] = $request->get('viewETCPaid');
        $input['chargeback'] = $request->get('chargeback');
        $input['printtransaction'] = $request->get('printtransaction');
        $input['addagente'] = $request->get('addagente');
        $input['deleteagent'] = $request->get('deleteagent');
        $input['editexpense'] = $request->get('editexpense');
        $input['printexpense'] = $request->get('printexpense');
        $input['addagentb'] = $request->get('addagentb');
        $input['deleteagentb'] = $request->get('deleteagentb');
        $input['addsecurityl'] = $request->get('addsecurityl');
        $input['editbonush'] = $request->get('editbonush');
        $input['printbonush'] = $request->get('printbonush');
        $input['severagenta'] = $request->get('severagenta');
        $input['recalculate'] = $request->get('recalculate');
        $input['editautopay'] = $request->get('editautopay');
        $input['editslowpay'] = $request->get('editslowpay');
        $input['editdonotplace'] = $request->get('editdonotplace');
        $input['editnoadvancable'] = $request->get('editnoadvancable');
        $input['editnocontract'] = $request->get('editnocontract');
        $input['editpropertyinfo'] = $request->get('editpropertyinfo');
        $input['editmgmtinfo'] = $request->get('editmgmtinfo');
        $input['changemainbilling'] = $request->get('changemainbilling');
        $input['editlastcontract'] = $request->get('editlastcontract');
        $input['printtransactionscreen'] = $request->get('printtransactionscreen');
        $input['editdeletenotesbyotheruser'] = $request->get('editdeletenotesbyotheruser');
        $input['depositsecurity'] = $request->get('depositsecurity');
        $input['approvalsecurity'] = $request->get('approvalsecurity');
        $input['approve'] = $request->get('approve');
        $input['reject'] = $request->get('reject');
        $input['rcvd'] = $request->get('rcvd');
        $input['addpayment'] = $request->get('addpayment');
        $input['postpayment'] = $request->get('postpayment');
        $input['checkscaccess'] = $request->get('checkscaccess');
        $input['processcomm'] = $request->get('processcomm');
        $input['createcommcheck'] = $request->get('createcommcheck');
        $input['processautopays'] = $request->get('processautopays');
        $input['createautopayschecks'] = $request->get('createautopayschecks');
        $input['renumberchecks'] = $request->get('renumberchecks');
        $input['exportchecks'] = $request->get('exportchecks');
        $input['changebillingaddressinvoice'] = $request->get('changebillingaddressinvoice');
        $input['editlegalinvoice'] = $request->get('editlegalinvoice');
        $input['adjustcomminvoice'] = $request->get('adjustcomminvoice');
        $input['selectnoopayinvoice'] = $request->get('selectnoopayinvoice');
        $input['selectno'] = $request->get('selectno');
        $input['autopayscreenset'] = $request->get('autopayscreenset');
        $input['createautopaysecset'] = $request->get('createautopaysecset');
        $input['changeautopaybillinaddress'] = $request->get('changeautopaybillinaddress');
        $input['autopayaddpayments'] = $request->get('autopayaddpayments');
        $input['addsecurityl'] = $request->get('addsecurity');
        $security->fill($request->all());
       // $security->save();
        
        
        $security->update($input);

        return redirect('/pagesecurity')->with('success', 'Security name is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $security = Security::findOrFail($id);
        $security->delete();
        return redirect('pagesecurity')->with('error','Page Securty name deleted');
    }
}

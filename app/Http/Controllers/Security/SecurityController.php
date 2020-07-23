<?php

namespace App\Http\Controllers\Admin\Security;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\Admin\Security\Security;
use Redirect,Response;
use Session;

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
    public function index()
    {
        $pagesecurity = Security::paginate(5);
        return view('admin.security.index',compact('pagesecurity',$pagesecurity));
        

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
    public function edit(Security $security)
    {
        $pagesecurity = Security::paginate(5);
        return view('admin.security.edit',compact('security',$security,'pagesecurity'));

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
           
        ]);
        Security::whereId($id)->update($validatedData);

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

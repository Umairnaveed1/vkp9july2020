@extends('admin_layouts.layout')
@section('content')
 <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                                @if ($message = Session::get('success'))

<div class="alert alert-success alert-block">

    <button type="button" class="close" data-dismiss="alert">×</button> 

        <strong>{{ $message }}</strong>

</div>

@endif
                            @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                            <div class="page-header">
                                <h2 class="pageheader-title"> Agents Expense Screen </h2>


                            </div>
                        </div>
                    </div>

                    <div class="ecommerce-widget">

                        <div class="row">



                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">



                                <div class="mrg_addres_area">
                                    <div class="col-sm-12">

                                        <div class="row">
                                            <div class="col-sm-12 col-12">
                                                <div class="card card_address pl-3 pr-3 check_mnge_input_Cust_w">
                                                    <div class="card-body add_office_cardbody ">
                                                        <div class="check_manage_cust col-12 col-md-5 mx-auto">
                                                            <form id="validationform" method="POST" action="{{ route('agent.expense.create') }}">
            @csrf

                                                                <div class="row"> 
                                                                    <div class="col-md-12 col-12">

                                                                        <div class="row">
                                                                            <div class="col-12 col-md-12"> 
                                                                                <div class="form-group "> 
                                                                                    <label for="sel1">Charge Type :	
                                                                                    </label> 
                                                                                    <div class="">
                                                                                        <select
                                                                                            class="form-control cust_frm_cntrl"
                                                                                            id="sel1" name="charge_type" required> 
                                                                                            <option value="">Please select</option>
                                                                                            <option value="1">CHARGEBACK</option>
                                                                                            <option value="2">OFFICE FEE</option>
                                                                                            <option value="3">CREDIT REPORTS</option>
                                                                                            <option value="4">ADMINISTRATION FEE</option>
                                                                                            <option value="5">LEGAL FEES</option>
                                                                                            <option value="6">MARKETING SUPPLIES</option>
                                                                                            <option value="7">CARDS/FLIERS</option>
                                                                                            <option value="8">ADJUSTMENT</option>
                                                                                            <option value="9">REALTOR FEES</option>
                                                                                            <option value="10">MISC.</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-12 col-md-12"> 
                                                                                <div class="form-group mb-2"> 
                                                                                    <label for="sel1">Date : </label> 
                                                                                    <div class="">
                                                                                        <input id="datepicker2" name="charge_date" class="form-control @error('charge_date') is-invalid @enderror" type="date" id="charge_date" required value="{{ old('charge_date') }}" />
                                                                                    </div>
                                                                                </div> 
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-12 col-md-12">
                                                                                <div class="form-group "> 
                                                                                    <label for="text">Amount :
                                                                                    </label> 
                                                                                    <div class="">
                                                                                        <input type="text" required=""
                                                                                            data-parsley-maxlength="8"
                                                                                            placeholder=""
                                                                                            class="form-control @error('amount') is-invalid @enderror" id="amount" name="amount" value="{{ old('amount') }}">
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-12 col-md-12">
                                                                                <div class="form-group ">
                                                                                    <label for="sel1">Comment :
                                                                                    </label>
                                                                                    <div class="">
                                                                                        <textarea name="aa" rows="5" class="form-control @error('comment') is-invalid @enderror" id="comment" name="comment"> {{ old('comment') }}</textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                              <label class="home_check"> All Agents
                                                                                <input type="checkbox">
                                                                                <span class="checkmark"></span>
                                                                              </label>
                                                                            </div>
                                                                          </div>
                                                                        <div class="form-group mt-2 text-left">
                                                                            <div class="AllAgents border p-3">
                                                                                <div class="row">
                                                                                	@foreach($agent as $agent_data)

                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                          <label class="home_check"> {{ $agent_data['agentdisplayname'] }}
                                                                                            <input type="checkbox" name="agent_id[]" value="{{$agent_data['id']}}">
                                                                                            <span class="checkmark"></span>
                                                                                          </label>
                                                                                        </div>
                                                                                      </div>
                                                                                      @endforeach
                                                                                </div>
                                                                            </div>  
                                                                        </div> 
                                                                        <div class="col col-sm-10 col-lg-12 offset-sm-1 offset-lg-0 mt-4 mb-4">
                                                                            <div class="row"> 
                                                                                <button type="submit"
                                                                                    class="btn btn-space btn_promary_custom chk_scr_top_btn">
                                                                                    Save</button>
                                                                                    <button type="submit"
                                                                                    class="btn btn-space btn_promary_custom chk_scr_top_btn">
                                                                                    Cancel</button> 
                                                                            </div>
                                                                        </div> 
                                                                    </div> 
                                                                </div> 
                                                            </form>
                                                        </div>
                                                        <div class="col-lg-12 col-12">
                                                            <table width="100%"
                                                                class="table table-bordered table_office_manage table_responsive2 mt-4">
                                                                <thead>
                                                                    <tr>

                                                                        <th width="5%" scope="col"></th>
                                                                        <th width="14%" scope="col"> Agent name</th>
                                                                        <th width="17%" scope="col">Overall commission total</th>
                                                                         <th width="10%" scope="col">Prepaid total</th>
                                                                        <th width="12%" scope="col">Adjustment total</th>
                                                                        <th width="11%" scope="col">Expense total</th>
                                                                        <th width="11%" scope="col"></th> 

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                	@foreach($expence_list as $list)
                                                                    <tr> 
                                                                        <td class="text-center">
                                                                            <i class="fa fa-plus border p-2 c-pointer" data-toggle="collapse" data-target="#add_edit_row{{$list['id']}}"></i>
                                                                        </td>
                                                                        <td>{{$list['agent_tbl']['agentdisplayname']}}</td>
                                                                        <td>$ 576.1</td>
                                                                        <td>$ 300</td>
                                                                        <td>$ 0</td>
                                                                        <td>$ {{$list['charge_amount']}}</td>
                                                                        <td> <a href="#" class="edit mr-2" title="edit" data-toggle="tooltip">
                                                                      <i class="material-icons"></i></a>
                                                                      <a href="#" class="delete  mr-2" title="Activate" data-toggle="tooltip">
                                                    
                                                                      <i class="material-icons">settings</i></a> 
                                                                        
                                                                  </td>   
                                                                    </tr>
                                                                    <tr class="collapse" id="add_edit_row{{$list['id']}}">
                                                                        <td colspan="7">
                                                                            <table width="100%"
                                                                class="table table-bordered table_office_manage table_responsive2">
                                                                <thead>
                                                                    <tr>

                                                                        <th width="5%" scope="col">Created</th>
                                                                        <th width="14%" scope="col"> Description</th>
                                                                        <th width="17%" scope="col">Comment</th>
                                                                         <th width="10%" scope="col">Amount</th>
                                                                        <th width="12%" scope="col">Hold</th>
                                                                        <th width="11%" scope="col">Action</th> 

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr> 
                                                                        <td class="text-center">11/10/14</td>
                                                                        <td>
                                                                            <select
                                                                            class="form-control cust_frm_cntrl"
                                                                            id="sel1"> 
                                                                            <option value="1">CHARGEBACK</option>
                                                                            <option selected="selected" value="2">OFFICE FEE</option>
                                                                            <option value="3">CREDIT REPORTS</option>
                                                                            <option value="4">ADMINISTRATION FEE</option>
                                                                            <option value="5">LEGAL FEES</option>
                                                                            <option value="6">MARKETING SUPPLIES</option>
                                                                            <option value="7">CARDS/FLIERS</option>
                                                                            <option value="8">ADJUSTMENT</option>
                                                                            <option value="9">REALTOR FEES</option>
                                                                            <option value="10">MISC.</option>
                                                                        </select>
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" class="form-control" value="NOVEMBER 2014 OFFICE FEE">
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" class="form-control" value="$800">

                                                                        </td>
                                                                        <td>
                                                                            <label class="custom-control custom-checkbox">
                                                                            <input type="checkbox"  class="custom-control-input"><span class="custom-control-label"></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <button class="btn btn-primary p-1">Save</button>
                                                                            <button class="btn btn-danger p-1">Delete</button>
                                                                        </td>   
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                            <div class="col-12">
                                                                <div class="form-group row justify-content-center mt-4">
                                                                    <div class="">
                                                                        <button type="submit"
                                                                            class="btn btn-space btn_promary_custom float-left">Export
                                                                            Checks</button>
                                                                        <button type="submit"
                                                                            class="btn btn-space btn_promary_custom float-left">Refresh</button>
                                                                        <button
                                                                            class="btn btn-space btn_promary_custom float-left">Cancel</button>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>



                                                        <div class="col-sm-12">

                                                        </div>


                                                    </div>
                                                </div>
                                            </div>




                                        </div>


                                    </div>

                                </div>




                                <div class="clearfix"></div>








                            </div>

                        </div>




                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 p-0">
                            Copyright © 2020 ValleyKing.com. All rights reserved.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 p-0">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                Designed & Developed by<a href="https://leadconcept.com/" target="_blank">
                                    LEADconcept</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    
         <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
    <script>
        $('#datepicker2').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
@endsection
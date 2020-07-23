@extends('admin_layouts.layout')
@section('content')
<div class="dashboard-wrapper">
  <div class="dashboard-ecommerce">
    <div class="container-fluid dashboard-content ">

      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="page-header">
            <h2 class="pageheader-title">Property Report </h2>


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
                    <div class="card card_address">
                      <div class="card-body">
                        <div class=" col-12">
                         <div class=" property_report_w">
                          <form action="/action_page.php">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="home_check">All Properties
                                    <input type="checkbox" id="allproperties" checked/>
                                    <span class="checkmark"></span>
                                  </label>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="sel1">Property Name :</label>
        <select class="InputField form-control cust_frm_cntrl" id="propertyselect" disabled >
                                    @foreach($propertyreport  as $key => $propertyName)
                                    <option value="{{$key}}"> {{$propertyName}}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>

                              <div class="col-sm-12"> <h5> (Property Flags)</h5></div>


                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="home_check"> AutoPay
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                  </label>
                                </div>
                              </div>


                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="home_check"> SlowPay
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                  </label>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="home_check"> Not Advancable
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                  </label>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="home_check"> Do Not Place
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                  </label>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="home_check">  No Contract
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                  </label>
                                </div>
                              </div>
                              <div class="col-md-12">



                               <div class="form-group">
                                <label class="home_check">Real Estate Company
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                                </label>
                              </div>
                            </div> 
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="home_check">Show all flags
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                                </label>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="home_check"> Unpaid Balances 
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                                </label>
                              </div>
                            </div>

                            <div class="col-md-12">
                              <div class="row">
                               <div class="col-md-6">
                                <div class="form-group">
                                  <label class="home_check"> Unpaid
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                  </label>
                                </div></div>
                                <div class="col-md-6">    <input name="" class="form-control" type="text"> </div>
                              </div></div>
                              <div class="col-md-12">
                                <div class="row">
                                 <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="home_check"> Deliquent	
                                      <input type="checkbox">
                                      <span class="checkmark"></span>
                                    </label>
                                  </div></div>
                                  <div class="col-md-6">    <input name="" class="form-control" type="text"> </div>
                                </div></div>



                              </div> 

                            </form>
                          </div></div>




 -->
            <!-- footer -->

@endsection
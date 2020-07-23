@extends('admin_layouts.layout')
@section('content')
    <style>
        .uper {
            margin-top: 0.5%;
        }
    </style>
    <div class="card uper">
        {{--  <div class="card-header">--}}
        {{--  --}}
        {{--  </div>--}}
    </div>
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    @if ($errors->any())
                          <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)

                                                    <li>{{ ($error)}}</li>
                                                @endforeach
                                            </ul>
                                        </div><br />
                                    @endif

                                     
                                    @if(session()->get('success'))
                                        <div class="alert alert-success">
                                            {{ session()->get('success') }}
                                        </div><br />
                                    @endif
<div class="page-header">
        <h2 class="pageheader-title"> Country State City Zip Manage </h2>
                              
                                
                            </div>
                    <div class="ecommerce-widget">

                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                   
                          <div class="row">
        <div class=" col-12">
            <!-- Left Box Start -->
                <div class="card card_address pl-3 pr-3 ">
                  <h5 class="label_rule_heading2 ">Add Country</h5>
                    <div class="card-body country_cty_zip_w">
                      @if($country)
                        <form action="{{route('country.store')}}" method="POST">
                          @csrf
                            <div class="form-group">
                              <label for="email">Country</label>
                              <input type="text" class="form-control" id="email"  name="countryname">
                            </div>
                            <div class="form-group">
                                <label for="email">Country Short Name</label>
                                <input type="text" class="form-control" id="email" name="countrysh">
                              </div>
                              <div class=" text-right">
                                <button type="submit" class="btn btn-primary form_box_cust_btn">Add Country</button>
                            </div>
                          </form>
                        </div>
                    </div>
                    <div class="card card_address pl-3 pr-3">
                      <h5 class="label_rule_heading2 ">Remove Country</h5>
                      <div class="card-body country_cty_zip_w">
                                            
                         @elseif(isset($country))
                          <form  action ="{{ route('country.update', $country->id) }}" method="post">
                           @endif           
                            @csrf
                              <div class="form-group">
                                  <label for="sel1">Country</label>
                                  <select class="form-control cust_frm_cntrl"  id="sel1">
                                   @foreach($country as $cou)
                                    <option value="{{ $cou->countryname }}">
                                      {{ $cou->countryname }}
                                    </option>
                                    @endforeach
                                  
                                  </select>
                              </div>
                              </form> 
                             @if(count($country)===0)
                              <form action="{{route('country.destroy',$country->id) }}" method="POST">
                                @endif
                                @csrf
                                @method('delete')
                            
                                <div class=" text-right">
      
                                  <input type="submit" class="btn btn-primary form_box_cust_btn" value="Remove Country">
                              </div>
                              </form>   
                               
    
                              
                             
                          </div>
                      </div>
                    <!-- Left Box End  -->
                    <div class="card card_address pl-3 pr-3">
                      <h5 class="label_rule_heading2">Add State</h5>
                        <div class="card-body country_cty_zip_w">

                            <form action="/action_page.php">
                                <div class="form-group">
                                    <label for="sel1">Country</label>
                                    <select class="form-control cust_frm_cntrl" id="sel1">
                                      <option>USA</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                  <label for="email">State Name</label>
                                  <input type="email" class="form-control" id="email"  name="email">
                                </div>
                                <div class="form-group">
                                    <label for="email">State Abbrevation</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                  </div>
                                  <div class=" text-right">
                                    <button type="submit" class="btn btn-primary form_box_cust_btn">Add State</button>
                                </div>
                              </form>
                            </div>
                        </div>

                        <div class="card card_address pl-3 pr-3">
                          <h5 class="label_rule_heading2 ">Remove State</h5>
                          <div class="card-body country_cty_zip_w">
 
                              <form action="/action_page.php">
                                  <div class="form-group">
                                      <label for="sel1">Country</label>
                                      <select class="form-control cust_frm_cntrl" id="sel1">
                                        <option>USA</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                      </select>
                                  </div>
                                  <div class="form-group">
                                      <label for="sel1">State</label>
                                      <select class="form-control cust_frm_cntrl" id="sel1">
                                        <option>Alabema</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                      </select>
                                  </div>

                                    <div class="text-right">
                                      <button type="submit" class="btn btn-primary form_box_cust_btn">Remove State</button>
                                  </div>
                                </form> 
                             
                                <div class="cust_tbl_search text-right pb-2">
                                  <form class="form-inline mt-4 " action="/action_page.php">
                                      <label for="email">Search State :  </label>
                                      <input type="text" class="form-control ml-2" id="email">
                                      <div class="">
                                          <button type="submit" class="btn btn-primary form_box_cust_btn ml-1">Search</button>
                                      </div>
                                  </form>
                                  </div>
                                <table class="table table-striped mt-4">
                                  <thead class="border-0">
                                    <tr>
                                      <th>Firstname</th>
                                      <th>Lastname</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>John</td>
                                      <td>Doe</td>
                                    </tr>
                                    <tr>
                                      <td>Mary</td>
                                      <td>Moe</td>

                                    </tr>
                                    <tr>
                                      <td>July</td>
                                      <td>Dooley</td>
                                    </tr>
                                  </tbody>
                                </table>

                                <ul class="pagination mt-4 align-right">
                                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                              </div>
                          </div>


                        <div class="card card_address pl-3 pr-3">
                          <h5 class="label_rule_heading2">Add City</h5>
                            <div class="card-body country_cty_zip_w">
 
                                <form action="/action_page.php">
                                    <div class="form-group">
                                        <label for="sel1">Country</label>
                                        <select class="form-control cust_frm_cntrl" id="sel1">
                                          <option>USA</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="sel1">State</label>
                                        <select class="form-control cust_frm_cntrl" id="sel1">
                                          <option>Alabama</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="text">City</label>
                                        <input type="text" class="form-control" id="text" name="email">
                                      </div>
                                      <div class=" text-right">
                                        <button type="submit" class="btn btn-primary form_box_cust_btn">Add City</button>
                                    </div>
                                  </form>
                                </div>
                            </div>


                            <div class="card card_address pl-3 pr-3">
                              <h5 class="label_rule_heading2">Remove city</h5>
                              <div class="card-body country_cty_zip_w">

                                  <div class="">
                                  <form action="/action_page.php">
                                      <div class="form-group">
                                          <label for="sel1">Country</label>
                                          <select class="form-control cust_frm_cntrl" id="sel1">
                                            <option>USA</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                          </select>
                                      </div>
                                      <div class="form-group">
                                          <label for="sel1">State</label>
                                          <select class="form-control cust_frm_cntrl" id="sel1">
                                            <option>Alabema</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                          </select>
                                      </div>
                                      <div class="form-group">
                                          <label for="sel1">City</label>
                                          <select class="form-control cust_frm_cntrl" id="sel1">
                                            <option>Birmingham</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                          </select>
                                      </div>
  
                                        <div class="text-right">
                                          <button type="submit" class="btn btn-primary form_box_cust_btn">Remove City</button>
                                      </div>
                                    </form> 
                                  </div>
                                    <div class="cust_tbl_search text-right pb-2">
                                      <form class="form-inline mt-4 " action="/action_page.php">
                                          <label for="email">Search City :  </label>
                                          <input type="text" class="form-control ml-2"  id="email">
                                          <div class="">
                                              <button type="submit" class="btn btn-primary form_box_cust_btn ml-1">Search</button>
                                          </div>
                                      </form>
                                      </div>
                                    <table class="table table-striped mt-4">
                                      <thead class="border-0">
                                        <tr>
                                          <th>Firstname</th>
                                          <th>Lastname</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>John</td>
                                          <td>Doe</td>
                                        </tr>
                                        <tr>
                                          <td>Mary</td>
                                          <td>Moe</td>
  
                                        </tr>
                                        <tr>
                                          <td>July</td>
                                          <td>Dooley</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                              </div>


                            <div class="card card_address pl-3 pr-3">
                              <h5 class="label_rule_heading2 ">Add Zip Code</h5>
                                <div class="card-body country_cty_zip_w">
                                    <form action="/action_page.php">
                                        <div class="form-group">
                                            <label for="sel1">Country</label>
                                            <select class="form-control cust_frm_cntrl" id="sel1">
                                              <option>USA</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="sel1">State</label>
                                            <select class="form-control cust_frm_cntrl" id="sel1">
                                              <option>Alabema</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="sel1">City</label>
                                            <select class="form-control cust_frm_cntrl" id="sel1">
                                              <option>Birmingham</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="text">Zip Code</label>
                                            <input type="number" class="form-control" id="text" name="email">
                                          </div>
                                          <div class="text-right">
                                            <button type="submit" class="btn btn-primary form_box_cust_btn">Add Zip</button>
                                        </div>
                                      </form> 
                                      </div>
                                      </div>



                            <div class="card card_address pl-3 pr-3">
                                <div class="card-body country_cty_zip_w">
                                    <h5 class="label_rule_heading2 ">Remove Zip Code</h5>
                                    <form action="/action_page.php">
                                        <div class="form-group">
                                            <label for="sel1">Country</label>
                                            <select class="form-control cust_frm_cntrl" id="sel1">
                                              <option>USA</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="sel1">State</label>
                                            <select class="form-control cust_frm_cntrl" id="sel1">
                                              <option>Alabema</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="sel1">City</label>
                                            <select class="form-control cust_frm_cntrl" id="sel1">
                                              <option>Birmingham</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="text">Zip Code</label>
                                             <select class="form-control cust_frm_cntrl" id="sel1">
                                              <option>85203</option>
                                            </select>
                                          </div>
                                          <div class="text-right">
                                            <button type="submit" class="btn btn-primary form_box_cust_btn">Remove Zip</button>
                                        </div>
                                      </form> 
                                      <div class="cust_tbl_search text-right pb-2">
                                        <form class="form-inline mt-4 " action="/action_page.php">
                                            <label for="email">Zip Code :  </label>
                                            <input type="text" class="form-control ml-2"  id="email">
                                            <div class="">
                                                <button type="submit" class="btn btn-primary form_box_cust_btn ml-1">Search</button>
                                            </div>
                                        </form>
                                        </div>
                                      <table class="table table-striped mt-4">
                                        <thead class="border-0">
                                          <tr>
                                            <th>Firstname</th>
                                            <th>Lastname</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>John</td>
                                            <td>Doe</td>
                                          </tr>
                                          <tr>
                                            <td>Mary</td>
                                            <td>Moe</td>
    
                                          </tr>
                                          <tr>
                                            <td>July</td>
                                            <td>Dooley</td>
                                          </tr>
                                        </tbody>
                                      </table>
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
                               Designed & Developed by<a href="https://leadconcept.com/" target="_blank"> LEADconcept</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
@endsection

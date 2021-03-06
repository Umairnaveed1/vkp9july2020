@extends('admin_layouts.layout')
@section('content')
    <div class="dashboard-wrapper">
      <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
          <div class="row">

            <div class="col-sm-12 text-right">

              <a href="#" class="btn_add_agent btn_add_agent_active"> Billing</a>

              <a href="#" class="btn_add_agent "> Phone List</a>

              <a href="#" class="btn_add_agent"> Resources</a>

              <a href="#" class="btn_add_agent"> Forms</a>

              <div class="clear20"></div>
            </div>

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="page-header">
                <h2 class="pageheader-title">
                  <div class="row">
                    <div class="col-auto">Apartment Billing move in for the month of</div>
                    <div class="col-12 col-md-auto p-0">
                      <select name="" class="form-control">
                        <option selected="selected" value="01">January</option>
                        <option value="02">Feburary</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                      </select>
                    </div>
                  </div>

                </h2>
              </div>
            </div>
          </div>


          <div class="ecommerce-widget">

            <div class="row">
              <div class="col-lg-7 col-12">
                <!-- Left Box End  -->
                <div class="card card_address pl-3 pr-3">
                  <div class="card-body">
                    <h5 class="text_address ">Curerently your count is # : 0 for the month of January</h5>
                    <form action="/action_page.php">
                      <div class="row">
                        <div class="col-md-10">
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="email" class="col-md-12 align-self-center">Billing No :</label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="email">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 mb-2">
                            <div class="row form-group p-0">
                              <div class="col-md-6">
                                <label> No# :</label>
                              </div>
                              <div class="col-md-6">
                                <label class="home_check">
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 mb-2">
                            <div class="row form-group p-0">
                              <div class="col-md-6">
                                <label> Agent :</label>
                              </div>
                              <div class="col-md-6">
                                <label>Mike</label>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-3">
                            <div class="row no-gutters mr-3">
                              <label for="email" class="col-md-12 align-self-center">Agent Comm % :</label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="email">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="email" class="col-md-12 align-self-center">2ND Agent :</label>
                              <div class="col-md-12">
                                <select name="" class="form-control">
                                  <option value="0">Select</option>
                                  <option value="26">Abbie</option>
                                  <option value="152">Admin</option>
                                  <option selected="selected" value="20">Alice</option>
                                  <option value="200">Amy</option>
                                  <option value="41">Andrea</option>
                                  <option value="184">Angie</option>
                                  <option value="34">Ashley</option>
                                </select>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-12 mb-2">
                            <div class="row form-group p-0">
                              <div class="col-md-6 align-self-center">
                                <label> Comm Split By Default 25 % :</label>
                              </div>
                              <div class="col-md-6">
                                <label class="home_check">50 / 50 Split
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 mb-2">
                            <div class="row form-group p-0">
                              <label class="col-12"><strong>Apartment Move IN</strong></label>
                              
                              
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="email" class="col-md-12 align-self-center">Rent :</label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="email">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="email" class="col-md-12 align-self-center">Lease Term :</label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="email">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="email" class="col-md-12 align-self-center">Commission % :</label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="email">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="email" class="col-md-12 align-self-center">Flat Rate :</label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="email">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="email" class="col-md-12 align-self-center">Bonus :</label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="email">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="email" class="col-md-12 align-self-center">Total Due to VKP :</label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="email">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="email" class="col-md-12 align-self-center">Due to 1st Agent :</label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="email">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="email" class="col-md-12 align-self-center">Due to 2nd Agent </label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="email">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="email" class="col-md-12 align-self-center">Verified By :</label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="email">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="email" class="col-md-12 align-self-center">Gift Card :</label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="email">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-2">
                            <div class="row no-gutters mr-3">
                              <label for="email" class="col-md-12 align-self-center">PO # </label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="email">
                              </div>
                            </div>
                          </div>

                        </div>



                      </div>

                    </form>
                  </div>
                </div>

                <div class="card card_address pl-3 pr-3">
                  <div class="card-body">
                    <h5 class="text_address ">
                      Billing Information</h5>
                    <div class="col-md-12 text-left mb-2">
                      <div class="row no-gutters mr-3">
                        <label for="email" class="col-md-12 align-self-center"> Community Name :</label>
                        <div class="col-md-12">
                          <select name="" class="form-control">
                            <option value="11274">@Home Properties &amp; Management</option>
                            <option value="1659">10022 N 15th St #1</option>
                            <option value="11772">1017 E Maryland Ave </option>
                            <option value="11874">1023 E. Silversmith Trl</option>
                            <option value="11870">1041 W McLellan</option>
                            <option value="11137">10416 W. Deanne Dr.</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 mb-2">
                    <div class="clear10"></div>
                    <h4>MGMT Company :</h4>
                      <div class="row form-group p-0">
                        <div class="col-md-6">
                          <label> Address :</label>
                        </div>
                        <div class="col-md-6">
                          <label></label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 mb-2">
                      <div class="row form-group p-0">
                        <div class="col-md-6">
                          <label> State :</label>
                        </div>
                        <div class="col-md-6">
                          <label></label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 mb-2">
                      <div class="row form-group p-0">
                        <div class="col-md-6">
                          <label> City :</label>
                        </div>
                        <div class="col-md-6">
                          <label></label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 mb-2">
                      <div class="row form-group p-0">
                        <div class="col-md-6">
                          <label> Zip :</label>
                        </div>
                        <div class="col-md-6">
                          <label></label>
                        </div>
                      </div>
                    </div>
                    
                    
                    
                    
                    
                    
                    
                    

                    <div class="col-md-12 mb-2 mt-4">
                      <div class="row form-group p-0">
                        <div class="col-md-12">
                          <label class="home_check white_space_res"> <b>Click to Confirm That This is The Correct Billing Address</b>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="card card_address pl-3 pr-3">
                  <div class="card-body">
                    <h5 class="text_address" style="margin:0px;">
                      Tenant Information</h5> 
                  </div>
                  <div class="col-md-12 text-left mb-2">
                    <div class="row no-gutters mr-3">
                      <label for="email" class="col-md-12 align-self-center">Tenant Name :</label>
                      <div class="col-md-12">
                        <input type="text" class="form-control" id="email">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 text-left mb-2 px-0">
                    <div class="row no-gutters mr-3">
                      <div class="col-md-6">
                        <label for="email" class="col-md-12 align-self-center">Address :</label>
                        <div class="col-md-12">
                          <input type="text" class="form-control" id="email">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label for="email" class="col-md-12 align-self-center">Unit # :</label>
                        <div class="col-md-12">
                          <input type="text" class="form-control" id="email">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 text-left mb-2 px-0">
                    <div class="row no-gutters mr-3">
                      <div class="col-md-4">
                        <label for="email" class="col-md-12 align-self-center">State :</label>
                        <div class="col-md-12">
                          <select name="" class="form-control">
                            <option selected>Select</option>
                            <option value="1659">10022 N 15th St #1</option>
                            <option value="11772">1017 E Maryland Ave </option>
                            <option value="11874">1023 E. Silversmith Trl</option>
                            <option value="11870">1041 W McLellan</option>
                            <option value="11137">10416 W. Deanne Dr.</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <label for="email" class="col-md-12 align-self-center">city :</label>
                        <div class="col-md-12">
                          <select name="" class="form-control">
                            <option selected>Select</option>
                            <option value="1659">10022 N 15th St #1</option>
                            <option value="11772">1017 E Maryland Ave </option>
                            <option value="11874">1023 E. Silversmith Trl</option>
                            <option value="11870">1041 W McLellan</option>
                            <option value="11137">10416 W. Deanne Dr.</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <label for="email" class="col-md-12 align-self-center">zip :</label>
                        <div class="col-md-12">
                          <select name="" class="form-control">
                            <option selected>Select</option>
                            <option value="1659">10022 N 15th St #1</option>
                            <option value="11772">1017 E Maryland Ave </option>
                            <option value="11874">1023 E. Silversmith Trl</option>
                            <option value="11870">1041 W McLellan</option>
                            <option value="11137">10416 W. Deanne Dr.</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12 text-left mb-2 px-0">
                    <div class="row no-gutters mr-3">
                      <div class="col-md-6">
                        <div class="col-md-12">
                          <label for="COM">Lease Start :</label>
                          <div class="form-group ">
                            <div class="">
                              <input id="datepicker1" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label for="email" class="col-md-12 align-self-center">Lease Term :	</label>
                        <div class="col-md-12">
                          <input type="text" class="form-control" id="email">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 mb-2">
                    <div class="row form-group p-0">
                      <div class="col-md-12">
                        <label class="home_check white_space_res"> <b>Click to Confirm That This is Correct Address of Residence</b>
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 mb-2">
                    <div class="row form-group p-0">
                      <div class="col-md-12">
                        <label class="home_check"> <b>Change Tenant Address</b>
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-lg-5 col-12">
                <div class="card card_address pl-3 pr-3">
                  <div class="card-body">
                    <h5 class="text_address ">
                      Agent Notes :</h5>

                    <div class="row no-gutters mr-3 mb-5">
                      <div class="col-md-12">
                        <textarea type="text" rows="5" class="form-control"></textarea>
                      </div>
                    </div>


                    <h5 class="text_address ">
                      Attachment :</h5>

                    <div class="row no-gutters mr-3">
                      <div class="col-md-12">
                        <input type="file" rows="5" class="form-control attached_file">
                      </div>
                      <div class="col-md-12 text-left mt-2">

                        <a href="#" class="btn_add_agent btn_add_agent_active"> Upload</a>
                      </div>
                    </div>
                    <div class="row no-gutters mr-3 mb-5">
                      <div class="col-md-12 text-center mt-5">
                        <img src="images/logo.png" class="w-50 h-auto mx-auto" alt="">
                      </div>
                      <div class="col-sm-12 text-center pt-4">

                        <a href="#" class="btn_add_agent btn_add_agent_active"> Submit</a>

                        <a href="#" class="btn_add_agent "> Cancel</a>
                      </div>
                    </div>



                  </div>

                </div>
                <div class="card card_address pl-3 pr-3">
                  <div class="card-body">
                    <h5 class="text_address ">
                      Community Info</h5> 
                    <div class="col-md-12 mb-2 p-0">
                      <label class="home_check"> Slow Pay
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="col-md-12 mb-2 p-0">
                      <label class="home_check"> Not Advancable
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="col-md-12 mb-2 p-0">
                      <label class="home_check"> Do Not Place
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="col-md-12 mb-2 p-0">
                      <label class="home_check"> Off Line
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="col-md-12 mb-2 p-0">
                      <label class="home_check"> On Hold
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="col-md-12 mb-2 p-0">
                      <label class="home_check"> Legal
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="col-md-12 mb-5 p-0">
                      <label class="home_check"> Guarantee Contract
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="col-md-12 mb-2 p-0">
                      <label class="home_check"> Auto Pay
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="col-md-12 mb-2 p-0">
                      <label class="home_check"> No Contract
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                     Last Contract Date :
                      <div class="clear10"></div>
                    <div class="row no-gutters mr-3 mb-2">
                     
                      <label>Property Notes</label>
                      <div class="col-md-12">
                        <textarea type="text" rows="5" class="form-control"></textarea>
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
    </div>



  </div>
  </div>
  <!-- ============================================================== -->
  <!-- footer -->
  <!-- ============================================================== -->

  <!-- ============================================================== -->
  <!-- end footer -->
  <!-- ============================================================== -->
  </div>
  <!-- ============================================================== -->
  <!-- end wrapper  -->
  <!-- ============================================================== -->
  </div>

  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Instructions</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          If you are entering a real estate company the property name would be the real estate company name and the
          property address would be the address where we would send invoices or checks. If this is the case please
          select real estate company from the management company drop down list.
        </div>

        <!-- Modal footer -->


      </div>
    </div>
  </div>


  <script>
    $('#datepicker1').datepicker({
      uiLibrary: 'bootstrap4'
    });
  </script>
  <script>
    $('#datepicker2').datepicker({
      uiLibrary: 'bootstrap4'
    });
  </script>

@endsection
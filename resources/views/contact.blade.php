@extends('layouts.site_layout')
@section('content')


                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">
                  <div class="row">
                    <div class="col-auto">Contact Us
</div>

                  </div>

                </h2>
                        </div>
                    </div>
                </div>

                <div class="card card_address pl-3 pr-3">
                    <div class="card-body">

                        <div class="contact_w">

                            <div class="row no-gutters mr-3">
                                <label for="email" class="col-md-12 align-self-center">Your Full Name : </label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="email">
                                </div>
                            </div>
                            <div class="row no-gutters mr-3 mt-3">
                                <label for="email" class="col-md-12 align-self-center">How many bedrooms are you seeking? </label>
                                <div class="col-md-12">
                                    <select name="" class="form-control">

                                        <option selected="selected" value="Please Select">Please Select</option>
                                        <option value="Studio">Studio</option>
                                        <option value="1 Bedroom">1 Bedroom</option>
                                        <option value="Bedroom, 1 Bath">Bedroom, 1 Bath</option>
                                        <option value="2 Bedroom, 2 Bath">2 Bedroom, 2 Bath</option>
                                        <option value="3 Bedroom, 2 Bath">3 Bedroom, 2 Bath</option>
                                        <option value="Other (Please Specify in Comments)">Other (Please Specify in Comments)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row no-gutters mr-3 mt-3">
                                <label for="email" class="col-md-12 align-self-center">Within what price range ? </label>
                                <div class="col-md-12">
                                    <select name="" class="form-control">

                                        <option selected="selected" value="Please Select">Please Select</option>
                                        <option selected="selected" value="Select Minimum">Select Minimum</option>
                                        <option value="$500">$500</option>
                                        <option value="$550">$550</option>
                                        <option value="$600">$600</option>
                                        <option value="$650">$650</option>
                                        <option value="$700">$700</option>
                                        <option value="$750">$750</option>
                                        <option value="$800+">$800+</option>
                                        <option value="$900+">$900+</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row no-gutters mr-3 mt-3">
                                <label for="email" class="col-md-12 align-self-center">To </label>
                                <div class="col-md-12">
                                    <select name="" class="form-control">

                                        <option selected="selected" value="Please Select">Please Select</option>
                                        <option selected="selected" value="Select Minimum">Select Minimum</option>
                                        <option value="$500">$500</option>
                                        <option value="$550">$550</option>
                                        <option value="$600">$600</option>
                                        <option value="$650">$650</option>
                                        <option value="$700">$700</option>
                                        <option value="$750">$750</option>
                                        <option value="$800+">$800+</option>
                                        <option value="$900+">$900+</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row no-gutters mr-3 mt-3">
                                <label for="email" class="col-md-12 align-self-center">What date do you need to move by ? </label>
                                <div class="col-md-12">
                                    <div class="form-group ">
                                        <div class="">
                                            <input id="datepicker1" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row no-gutters mr-3">
                                <label for="email" class="col-md-12 align-self-center">What is the desired area ? </label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="email">
                                </div>
                            </div>
                            <div class="clear10"></div>
                            <div class="row no-gutters mr-3">

                                <label for="email" class="col-md-12 align-self-center">Do you have any pets ? </label>
                                <div class="col-md-12">

                                    <label class="home_check">, If Yes, Specify in comments
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>

                                </div>
                            </div>
                            <div class="clear10"></div>
                            <div class="row no-gutters mr-3">
                                <label for="email" class="col-md-12 align-self-center">Contact Phone # : </label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="email">
                                </div>
                            </div>
                            <div class="clear10"></div>
                            <div class="row no-gutters mr-3">
                                <label for="email" class="col-md-12 align-self-center">Contact Email : </label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="email">
                                </div>
                            </div>
                            <div class="clear10"></div>
                            <div class="row no-gutters mr-3">
                                <label for="email" class="col-md-12 align-self-center">Anything Else I should know ? </label>
                                <div class="col-md-12">

                                    <textarea name="" class="form-control" cols="" rows=""></textarea>
                                </div>
                            </div>

                            <div class="row no-gutters mr-3 mt-3">
                                <label for="email" class="col-md-12 align-self-center">How did you hear about us ? </label>
                                <div class="col-md-12">
                                    <select name="" class="form-control">

                                        <option selected="selected" value="Please Select">Please Select</option>
                                        <option value="Apartments.com">Apartments.com</option>
                                        <option value="Arizona Republic">Arizona Republic</option>
                                        <option value="ASU Central">ASU Central</option>
                                        <option value="ASU Main">ASU Main</option>
                                        <option value="ASU West">ASU West</option>
                                        <option value="Backpage.com">Backpage.com</option>
                                        <option value="Business Card">Business Card</option>
                                        <option value="Craigslist.com">Craigslist.com</option>
                                        <option value="DeVry">DeVry</option>
                                        <option value="Dexonline.com">Dexonline.com</option>
                                        <option value="Flyer">Flyer</option>
                                        <option value="GCC">GCC</option>
                                        <option value="Google.com">Google.com</option>
                                        <option value="Honeywell">Honeywell</option>
                                        <option value="Hotpads.com">Hotpads.com</option>
                                        <option value="Lycos.com">Lycos.com</option>
                                        <option value="MMI">MMI</option>
                                        <option value="Myspace.com">Myspace.com</option>
                                        <option value="Oodle.com">Oodle.com</option>
                                        <option value="Yahoo.com">Yahoo.com</option>
                                        <option value="Yellowpages.com">Yellowpages.com</option>
                                        <option value="MCC">MCC</option>
                                        <option value="UTI">UTI</option>
                                        <option value="Other Source (Please Specify Below)">Other Source (Please Specify Below)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="clear10"></div>
                            <div class="row no-gutters mr-3">
                                <label for="email" class="col-md-12 align-self-center">If other, please specify : </label>
                                <div class="col-md-12">

                                    <input name="" class="form-control"></input>
                                </div>
                            </div>
                            <div class="clear20"></div>
                            <a href="#" class="btn_add_agent ">Submit</a>
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
                If you are entering a real estate company the property name would be the real estate company name and the property address would be the address where we would send invoices or checks. If this is the case please select real estate company from the management company drop down list.
            </div>

            <!-- Modal footer -->

        </div>
    </div>
</div>

<style>
.dashboard_about_us
{
  margin:0px !important;
  min-height:500px;
}

.contact_w
{
  width:400px;
  margin:auto;
}


@media (min-width: 320px) and   (max-width: 767px){
  
.contact_w
{
  width:100%;
  margin:auto;
}
  
  
  
}
</style>
@endsection
@section('js')
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
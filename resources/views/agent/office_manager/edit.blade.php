@extends('admin_layouts.layout')
@section('content')
    <style>
        .uper {
            margin-top: 1%;
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

                <div class="ecommerce-widget">

                    <div class="row">
                        <div class="col-xl-12 col-12 col-md-12">
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div><br />
                                @endif
                                @if(session()->get('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div><br />
                                @endif
                                @if(session()->get('error'))
                                    <div class="alert alert-danger">
                                        {{ session()->get('error') }}
                                    </div><br />
                                @endif

                            </div>

                        </div>


                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pl-0">
                                <div class="page-header">
                                    <h2 class="pageheader-title"> Edit Offices </h2>
                                </div>
                            </div>


                            <div class="mrg_addres_area">
                                <div class="col-sm-12">

                                    <div class="row">
                                        <div class="col-sm-12 col-12">
                                            <div class="card card_address2">
                                                <div class="card-body add_office_cardbody">

                                                    <form id="validationform" method="POST" action="{{ route('office.update', $office->id) }}" data-parsley-validate="" novalidate="">
                                                        @csrf
                                                        <input type="hidden" name="agent_id" value="">

                                                        <div class="row">
                                                            <div class="col-12 col-sm-12 col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="col-form-label">Office Description :	</label>

                                                                    <input type="text" name="office_description" value="{{$office->office_description}}" required="" placeholder="Office Description" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="col-form-label">Office Address :	</label>

                                                                    <textarea required="" value="{{ $office->office_address ? $office->office_address:'' }}" name="office_address"  class="form-control text_area_office"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-12 col-lg-6">
                                                                <div class="form-group">

                                                                    <label class="col-form-label">Office Phone :	</label>

                                                                    <input type="text" name="office_phone" value="{{ $office->office_phone }}" required="" data-parsley-maxlength="6" placeholder="" class="form-control">

                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-lg-6">
                                                                <div class="form-group">

                                                                    <label class="col-form-label">Office Fax :	</label>

                                                                    <input type="text" name="office_fax" value="{{ $office->office_fax }}" required="" data-parsley-length="[5,10]" placeholder="" class="form-control">
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="row">
                                                            <div class="col-12 col-sm-12 col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="col-form-label">Office Email :	</label>

                                                                    <input type="text" name="office_email" value="{{ $office->office_email }}" required="" data-parsley-min="6" placeholder="" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="col-form-label">Manager :</label>


                                                                    <select name="manager" value="{{ $office->manager }}" class="form-control">

                                                                        <option selected="selected" value="0">----------Select-----------</option>
                                                                        <option value="26">A.Atencio PLLC</option>
                                                                        <option value="152">Administration</option>
                                                                        <option value="20">Alice</option>
                                                                        <option value="200">Amy</option>
                                                                        <option value="41">Andrea</option>
                                                                        <option value="184">Angie</option>
                                                                        <option value="34">Ashley R Atencio PLLC</option>
                                                                        <option value="207">Barbara</option>
                                                                        <option value="198">Brandon </option>
                                                                        <option value="6">Cammy</option>
                                                                        <option value="110">Charlotte</option>
                                                                        <option value="181">DeAnna</option>
                                                                        <option value="128">Deborah</option>
                                                                        <option value="210">Don</option>
                                                                        <option value="27">E.Atencio PLLC</option>
                                                                        <option value="11">Elizabeth</option>
                                                                        <option value="195">Elizabeth </option>
                                                                        <option value="212">Emily</option>
                                                                        <option value="204">Gregory</option>
                                                                        <option value="208">Guyshane</option>
                                                                        <option value="137">Jody</option>
                                                                        <option value="24">Joyce</option>
                                                                        <option value="12">Judith</option>
                                                                        <option value="76">Judy</option>
                                                                        <option value="193">Laurelen </option>
                                                                        <option value="183">Lori</option>
                                                                        <option value="33">M Atencio PLLC</option>
                                                                        <option value="148">Mary</option>
                                                                        <option value="211">Matthew</option>
                                                                        <option value="194">Mayte </option>
                                                                        <option value="105">Michelle</option>
                                                                        <option value="215">Muhammad</option>
                                                                        <option value="25">Nicholas Aguilar, PLLC</option>
                                                                        <option value="155">Rafalita</option>
                                                                        <option value="171">Sarah</option>
                                                                        <option value="135">Scott Janssen, PLLC</option>
                                                                        <option value="45">Sigifredo</option>
                                                                        <option value="206">Tiffany</option>
                                                                        <option value="199">Tom</option>


                                                                    </select>
                                                                </div>
                                                            </div> </div>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-12 col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="col-form-label">Co-Manager :</label>


                                                                    <select name="co_manager" value="{{ $office->co_manager }}" class="form-control">

                                                                        <option selected="selected" value="0">----------Select-----------</option>
                                                                        <option value="26">A.Atencio PLLC</option>
                                                                        <option value="152">Administration</option>
                                                                        <option value="20">Alice</option>
                                                                        <option value="200">Amy</option>
                                                                        <option value="41">Andrea</option>
                                                                        <option value="184">Angie</option>
                                                                        <option value="34">Ashley R Atencio PLLC</option>
                                                                        <option value="207">Barbara</option>
                                                                        <option value="198">Brandon </option>
                                                                        <option value="6">Cammy</option>
                                                                        <option value="110">Charlotte</option>
                                                                        <option value="181">DeAnna</option>
                                                                        <option value="128">Deborah</option>
                                                                        <option value="210">Don</option>
                                                                        <option value="27">E.Atencio PLLC</option>
                                                                        <option value="11">Elizabeth</option>
                                                                        <option value="195">Elizabeth </option>
                                                                        <option value="212">Emily</option>
                                                                        <option value="204">Gregory</option>
                                                                        <option value="208">Guyshane</option>
                                                                        <option value="137">Jody</option>
                                                                        <option value="24">Joyce</option>
                                                                        <option value="12">Judith</option>
                                                                        <option value="76">Judy</option>
                                                                        <option value="193">Laurelen </option>
                                                                        <option value="183">Lori</option>
                                                                        <option value="33">M Atencio PLLC</option>
                                                                        <option value="148">Mary</option>
                                                                        <option value="211">Matthew</option>
                                                                        <option value="194">Mayte </option>
                                                                        <option value="105">Michelle</option>
                                                                        <option value="215">Muhammad</option>
                                                                        <option value="25">Nicholas Aguilar, PLLC</option>
                                                                        <option value="155">Rafalita</option>
                                                                        <option value="171">Sarah</option>
                                                                        <option value="135">Scott Janssen, PLLC</option>
                                                                        <option value="45">Sigifredo</option>
                                                                        <option value="206">Tiffany</option>
                                                                        <option value="199">Tom</option>

                                                                    </select>
                                                                </div>
                                                            </div></div>

                                                        <div class="form-group  text-right">
                                                            <div class="col col-sm-12 p-0">
                                                                <button type="submit" class="btn btn-space btn_promary_custom float-left">Submit</button>
                                                                <button class="btn btn-space btn_cancel_custom float-left">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </form>

                                                    <div class="col-sm-12">
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

                                                <!-- ============================================================== -->
                                                <!-- end wrapper  -->
                                                <!-- ============================================================== -->

@endsection

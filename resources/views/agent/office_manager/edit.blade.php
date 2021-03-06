﻿@extends('admin_layouts.layout')
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
                                  <!-- @if ($errors->any())
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
                                @endif -->

                            

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
                                            <div class="card card_address2 cust_input_w">
                                                <div class="card-body add_office_cardbody office_manage_w">
                                                    <form id="validationform" class="form-inline" method="POST" action="{{ route('office.update',$office->id) }}"data-parsley-validate="" novalidate="">
            @csrf
            <input type="hidden" name="agent_id" value="">
            
              <div class="row">
                                      <div class="col-12 col-sm-12 col-lg-12">
                                        <div class="form-group row">
                                        <div class="col-sm-2 col-md-3">
                                            <label  class="mr-sm-2">Office Description :    </label>
                                        </div>
                                        <div class="col">
                                               <input type="text" name="office_description" value="{{ $office->office_description }}" required="" placeholder="Office Description" class="form-control mb-2 mr-sm-2 @error('office_description') is-invalid @enderror">
                                            </div>
                                        </div>
                                        </div>
                                          <div class="col-12 col-sm-12 col-lg-12">
                                        <div class="form-group row">
                                            <div class="col-sm-2 col-md-3">
                                            <label class="col-form-label">Office Address :  </label>
                                        </div>
                                        <div class="col">
                                                <textarea id="txtAddress" required="" name="office_address" value="{{ old('office_address') }}" class="form-control text_area_office @error('office_address') is-invalid @enderror">{{ $office->office_address }}
                                                </textarea>
                                            </div>
                                            </div>
                                        </div>
                                        </div>

            

           
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="form-group row">

                      <div class="col-sm-2 col-md-3">

                        <label class="col-form-label">Office Phone :    </label>
                    </div>
                        <div class="col">
                        <input type="text" name="office_phone" value="{{ $office->office_phone }}"  required=""  placeholder="" class="form-control @error('office_phone') is-invalid @enderror">
                        </div>

                    </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="form-group row">

                    <div class="col-sm-2 col-md-3">
                        <label class="col-form-label">Office Fax :  </label>
                    </div>
                    <div class="col">
                        <input type="text" name="office_fax"  value="{{ $office->office_fax }}" required="" data-parsley-length="[5,10]" placeholder="" class="form-control @error('office_fax') is-invalid @enderror">
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="form-group row">
     <!--                     @if($errors->has('office_email'))
    <div class="error alert alert-danger">{{ $errors->first('office_email') }}</div>
@endif -->
                     <div class="col-sm-2 col-md-3">

                        <label class="col-form-label">Office Email :    </label>
                    </div>
                    <div class="col">
                        <input type="text" name="office_email" value="{{ $office->office_email }}" required="" data-parsley-min="6" placeholder="" class="form-control  @error('office_email') is-invalid @enderror">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="form-group row">
  <!--                                      @if($errors->has('manager'))
    <div class="error alert alert-danger">{{ $errors->first('manager') }}</div>
@endif -->
                        <div class="col-sm-2 col-md-3">
                        <label class="col-form-label">Manager :</label>
                        </div>
                        <div class="col">
                        <select name="manager" value="{{ $office->manager }}"class="form-control @error('manager') is-invalid @enderror">

                            <option selected="selected" value="{{ $office->manager }}">{{ $office->manager }}</option>
                            <option value="A.Atencio PLLC"  >A.Atencio PLLC</option>
                            <option value="Administration">Administration</option>
                            <option value="Alice">Alice</option>
                            <option value="Amy">Amy</option>
                            <option value="Andrea">Andrea</option>
                            <option value="Angie">Angie</option>
                            <option value="Ashley R Atencio PLLC">Ashley R Atencio PLLC</option>
                            <option value="Barbara">Barbara</option>
                            <option value="Brandon">Brandon </option>
                            <option value="Cammy">Cammy</option>
                            <option value="Charlotte">Charlotte</option>
                            <option value="DeAnna">DeAnna</option>
                            <option value="Deborah">Deborah</option>
                            <option value="Deborah">Deborah</option>
                            <option value="E.Atencio PLLC">E.Atencio PLLC</option>
                            <option value="Elizabeth">Elizabeth</option>
                            <option value="Emily">Emily</option>
                            <option value="Gregory">Gregory</option>
                            <option value="Guyshane">Guyshane</option>
                            <option value="Jody">Jody</option>
                            <option value="Joyce">Joyce</option>
                            <option value="Judith">Judith</option>
                            <option value="Judy">Judy</option>
                            <option value="Laurelen">Laurelen </option>
                            <option value="Lori">Lori</option>
                            <option value="M Atencio PLLC">M Atencio PLLC</option>
                            <option value="Mary">Mary</option>
                            <option value="Matthew">Matthew</option>
                            <option value="Mayte">Mayte </option>
                            <option value="Michelle">Michelle</option>
                            <option value="Muhammad">Muhammad</option>
                            <option value="Nicholas Aguilar, PLLC">Nicholas Aguilar, PLLC</option>
                            <option value="Rafalita">Rafalita</option>
                            <option value="Sarah">Sarah</option>
                            <option value="Scott Janssen, PLLC">Scott Janssen, PLLC</option>
                            <option value="Sigifredo">Sigifredo</option>
                            <option value="Tiffany">Tiffany</option>
                            <option value="Tom">Tom</option>


                        </select>
                        </div>
                    </div>
                </div> </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="form-group row">
     <!--                                  @if($errors->has('Co-Manager'))
    <div class="error alert alert-danger">{{ $errors->first('Co-Manager') }}</div>
@endif -->
                              <div class="col-sm-2 col-md-3">

                        <label class="col-form-label">Co-Manager :</label>
                            </div>
                                <div class="col">
                        <select name="co_manager" value="{{ $office->co_manager }}" class="form-control @error('manager') is-invalid @enderror">
                        </div>

                            <option selected="selected" value="{{ $office->co_manager }}">{{ $office->co_manager }}</option>
                            <option value="A.Atencio PLLC">A.Atencio PLLC</option>
                            <option value="Administration">Administration</option>
                            <option value="Alice">Alice</option>
                            <option value="Amy">Amy</option>
                            <option value="Andrea">Andrea</option>
                            <option value="Angie">Angie</option>
                            <option value="Ashley R Atencio PLLC">Ashley R Atencio PLLC</option>
                            <option value="Barbara">Barbara</option>
                            <option value="Brandon">Brandon </option>
                            <option value="Cammy">Cammy</option>
                            <option value="Charlotte">Charlotte</option>
                            <option value="DeAnna">DeAnna</option>
                            <option value="Deborah">Deborah</option>
                            <option value="Don">Don</option>
                            <option value="E.Atencio PLLC">E.Atencio PLLC</option>
                            <option value="Elizabeth">Elizabeth</option>
                            <option value="Emily">Emily</option>
                            <option value="Gregory">Gregory</option>
                            <option value="Guyshane">Guyshane</option>
                            <option value="Jody">Jody</option>
                            <option value="Joyce">Joyce</option>
                            <option value="Judith">Judith</option>
                            <option value="Judy">Judy</option>
                            <option value="Laurelen">Laurelen </option>
                            <option value="Lori">Lori</option>
                            <option value="M Atencio PLLC">M Atencio PLLC</option>
                            <option value="Mary">Mary</option>
                            <option value="Matthew">Matthew</option>
                            <option value="Mayte">Mayte </option>
                            <option value="Michelle">Michelle</option>
                            <option value="Muhammad">Muhammad</option>
                            <option value="Nicholas Aguilar, PLLC">Nicholas Aguilar, PLLC</option>
                            <option value="Rafalita">Rafalita</option>
                            <option value="Sarah">Sarah</option>
                            <option value="Scott Janssen, PLLC">Scott Janssen, PLLC</option>
                            <option value="Sigifredo">Sigifredo</option>
                            <option value="Tiffany">Tiffany</option>
                            <option value="Tom">Tom</option>

                        </select>
                        </div>
                    </div>
                </div>

            <div class="row btn_office_manage">
                <div class=""col col-xl-12 p-0">
                    <button type="submit" class="btn btn-space btn_promary_custom float-left">Submit</button>
                    <button type="button" id="btnClear" class="btn btn-space btn_cancel_custom float-left">Cancel</button>
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

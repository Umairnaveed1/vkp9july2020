﻿@extends('admin_layouts.layout')
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

                    <div class="ecommerce-widget">

                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card-body">
                                               <!-- @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)

                                                    <li>{{ ($error)}}</li>
                                                @endforeach
                                            </ul>
                                        </div><br />
                                    @endif -->

<!--                                      
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

			</div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" >
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pl-0">
                                    <div class="page-header">
                                        <h2 class="pageheader-title"> Add Offices </h2>


                                    </div>
                                </div>


                              <div class="mrg_addres_area">
                          <div class="col-sm-12">

                            <div class="row">
                            <div class="col-sm-12 col-12">
                            <div class="card card_address2 cust_input_w">
                                    <div class="card-body add_office_cardbody office_manage_w">


        <form id="validationform" class="form-inline" method="POST" action="{{ route('office.store') }}"data-parsley-validate="" novalidate="">
            @csrf
            <input type="hidden" name="agent_id" value="">
            
              <div class="row">
                                      <div class="col-12 col-sm-12 col-lg-12">
                                        <div class="form-group row">
                                        <div class="col-sm-2 col-md-3">
                                            <label  class="mr-sm-2">Office Description :    </label>
                                        </div>
                                        <div class="col">
                                               <input type="text" name="office_description" value="{{ old('office_description') }}" required="" placeholder="Office Description" class="form-control mb-2 mr-sm-2 @error('office_description') is-invalid @enderror">
                                            </div>
                                        </div>
                                        </div>
                                          <div class="col-12 col-sm-12 col-lg-12">
                                        <div class="form-group row">
                                            <div class="col-sm-2 col-md-3">
                                            <label class="col-form-label">Office Address :  </label>
                                        </div>
                                        <div class="col">
                                                <textarea placeholder="Office Address" required="" name="office_address" value="{{ old('office_address') }}" class="form-control text_area_office @error('office_address') is-invalid @enderror">{{ old('office_address') }}</textarea>
                                            </div>
                                            </div>
                                        </div>
                                        </div>

            

           
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="form-group row">

                      <div class="col-sm-2 col-md-3">

                        <label class="col-form-label">Office Phone :	</label>
                    </div>
                        <div class="col">
                        <input type="text" placeholder="Phone Number" name="office_phone" value="{{ old('office_phone') }}"  required=""  placeholder="" class="form-control @error('office_phone') is-invalid @enderror">
                        </div>

                    </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="form-group row">

                    <div class="col-sm-2 col-md-3">
                        <label class="col-form-label">Office Fax :	</label>
                    </div>
                    <div class="col">
                        <input type="text" placeholder="Fax" name="office_fax"  value="{{ old('office_fax') }}" required="" data-parsley-length="[5,10]" placeholder="" class="form-control @error('office_fax') is-invalid @enderror">
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

                        <label class="col-form-label">Office Email :	</label>
                    </div>
                    <div class="col">
                        <input type="text" placeholder="Email Address" name="office_email" value="{{ old('office_email') }}" required="" data-parsley-min="6" placeholder="" class="form-control  @error('office_email') is-invalid @enderror">
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
                        <select name="manager" class="form-control @error('manager') is-invalid @enderror">

                            <option selected="selected" value="{{ old('manager') }}">----------Select-----------</option>
                            <option value="A.Atencio PLLC"  >A.Atencio PLLC</option>
                            <option value="152">Administration</option>
                            <option value="Alice">Alice</option>
                            <option value="Amy">Amy</option>
                            <option value="Andrea">Andrea</option>
                            <option value="Angie">Angie</option>
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
                        <select name="co_manager" class="form-control @error('manager') is-invalid @enderror">
                        </div>

                            <option selected="selected" value="{{old('co_manager')}}">----------Select-----------</option>
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
                    </div>
                </div>

            <div class="row btn_office_manage">
                <div class=""col col-xl-12 p-0">
                    <button type="submit" class="btn btn-space btn_promary_custom float-left">Submit</button>
                    <button type="reset" class="btn btn-space btn_cancel_custom float-left">Cancel</button>
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
</div>

                          <div class="mrg_addres_area">
                          <div class="col-sm-12">

                            <div class="row">
                            <div class="col-sm-12 col-12">
                            <div class="card card_address">
                                @if(session()->get('update'))
                                    <div class="alert alert-info">
                                        {{ session()->get('update') }}
                                    </div><br />
                                @endif
                                    <div class="card-body">
                                    <h5 class="label_rule_heading3 pageheader-title"> View Offices List</h5>
              <table >
<table width="100%" class="table table-bordered table_office_manage table_responsive2">
      <thead>
        <tr>
          <td>ID</td>
          <td>office description</td>
          <td>office address</td>
          <td>office Phone</td>
          <td>office Fax</td>
          <td>office Email</td>
          <td>Manager</td>
          <td>Co-Manager</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>

        @foreach($offices as $office)
        <tr>
            <td>{{ $office->id }}</td>
            <td>{{  $office->office_description }}</td>
            <td>{{ $office->office_address}}</td>
            <td>{{ $office->office_phone}}</td>
            <td>{{ $office->office_fax }}</td>
            <td>{{ $office->office_email}}</td>
            <td>{{ $office->manager }}</td>
            <td>{{ $office->co_manager }}</td>

            <td>
                <a href="{{ route('office.edit', $office->id ) }}" class="edit" title="" data-toggle="tooltip" data-original-title="Edit">
                    <i class="material-icons"></i>
                </a>
            </td>
            <td>
                <form action="{{ route('office.destroy', $office->id) }}" method="post">

                  @csrf
                   @method('delete')
                   <button href="{{ route('office.destroy', $office->id) }}" class="delete" type="submit" title="" data-toggle="tooltip" data-original-title="Delete">
                       <i class="material-icons"></i></button>
<!-- {{--                   <button class="btn btn-danger" type="submit">Delete</button>--}} -->
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

  </table>
                  <div class="pagination pagination-sm float-right">
                      {{ $offices->appends(\Request::except('page'))->render() }}
                  </div>

            <div class="col-sm-12">

            </div>
                  <div class="clearfix"></div>



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
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    @endsection

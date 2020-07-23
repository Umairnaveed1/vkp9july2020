﻿@extends('admin_layouts.layout')
@section('content')
@php
$userInfo               = Auth::user();
$loggedAgent               = \App\Models\Agents\Agent::find($userInfo->id);
@endphp
<style>
.text_address{
	text-transform:none !important;
}
.btn_add_agent{
	text-transform:none !important;
} 
</style>
<?php //echo base_path('get_property');?>
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
                    <div class="col-auto">Home Lease Billing move in for the month of</div>
                    <div class="col-12 col-md-auto p-0">
                      <!--<select name="" class="form-control">
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
                        <option value="12">December</option>-->
                      </select>
                    </div>
                  </div>

                </h2>
              </div>
            </div>
          </div>
			@if(Session::has('billingMsg'))
			<div class="alert alert-success"  style="font-size: 17px;margin:10px;">        
			<strong>Success! </strong>{{Session::get('billingMsg')}}
			</div>
			<?php session()->forget('billingMsg'); ?> 
			@endif
		 <form action="{{ route('addHomeLeaseBillings') }}" method="POST" id="hlbillingsForm" enctype="multipart/form-data">
		{{ csrf_field() }}
		 <div class="ecommerce-widget">
            <div class="row">
              <div class="col-lg-7 col-12">
                <!-- Left Box End  -->
                <div class="card card_address pl-3 pr-3">
                  <div class="card-body">
                    <!--<h5 class="text_address ">Curerently your count is # : 0 for the month of January</h5>-->
                    
                      <div class="row">
                        <div class="col-md-10">
                          <div class="col-md-12 text-left mb-2"> 
                            <div class="row no-gutters mr-3">
                              <label for="moveinno" class="col-md-12 align-self-center">Move In # :</label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="moveinno" name="moveinno" value="{{$homeLeaseBillId}}" disabled>
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
                                  <input type="checkbox" name="no" value="0">
                                  <span class="checkmark" ></span>
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
                                <label>{{$loggedAgent->agentdisplayname}}</label>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 text-left mb-3">
                            <div class="row no-gutters mr-3">
                              <label for="agentcomm" class="col-md-12 align-self-center">Agent Comm % :</label>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="agentcomm" name="agentcomm" value="{{$commission}}" readonly> -->
  <!-- footer -->

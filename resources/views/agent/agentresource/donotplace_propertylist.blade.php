@extends('admin_layouts.layout')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">

                <div class="col-sm-12 text-right">

                    <a href="#" class="btn_add_agent "> Billing</a>

                    <a href="#" class="btn_add_agent "> Phone List</a>

                    <a href="#" class="btn_add_agent btn_add_agent_active"> Resources</a>

                    <div class="clear20"></div>
                </div>

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">   
DO NOT PLACE        </h2>
                    </div>
                </div>
            </div>

            <div class="ecommerce-widget">

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                        <!-- Left Box Start -->

                        <div class="card card_address pl-3 pr-3">

                            <div class="card-body">
                                <div class="add_property_w1">
                                    <div class="col-sm-12 text-center">

                                        <table width="100%" class="table table-bordered table_office_manage table_responsive2 mt-2">
                                            <thead>
                                                <tr>

                                                    <th width="14%" scope="col"> Property Name </th>
                                                    <th width="17%" scope="col">Property Address </th>

                                                    <th width="10%" scope="col">Management Company</th>
                                                    <th width="12%" scope="col">ZipCode</th>
                                                    <th width="11%" scope="col">City</th>
                                                    <th width="11%" scope="col">State</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(!$donotplace->isEmpty())
                                                @foreach($donotplace as $donotplac)
                                                    <tr>
                                                        <td>{{ $donotplac->propertyName }}</td>
                                                        <td>{{ $donotplac->propertyAd }}</td>
                                                        <td>{{ $donotplac->mangment_company->mgt_company }}</td>
                                                        <td>{{ $donotplac->zipcode_list->zipcode }}</td>
                                                        <td>{{ $donotplac->city_list->cityname }}</td>
                                                        <td>{{ $donotplac->state_list->statename }}</td>
                                                    </tr>
                                                @endforeach
                                            @else
                                            
                                                <td>No Record Found</td>
                                            
                                            @endif
                                            </tbody>
                                        </table>

                                        <ul class="pagination mt-4 align-right">
                                            {{ $donotplace->links() }}
                                        </ul>

                                        <div class="clear20"></div>

                                        <div class="clear20"></div>
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
@endsection
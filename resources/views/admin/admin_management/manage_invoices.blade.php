@extends('admin_layouts.layout')

@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    
                    <div class="page-header">
                        <h2 class="pageheader-title"> MANAGE INVOICES 	</h2>
                        
                        
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
                                        <div class="card-body" style="overflow-x:scroll">
                                            
                                          <table width="100%" class="table table-bordered table_office_manage table_responsive2">
                                            <thead>
                                                <tr>
                                                    
                                                    <th width="12%" scope="col">INV Date</th>
                                                    <th width="13%" scope="col">First Agent Name</th>
                                                    
                                                    <th width="18%" scope="col">Second Agent Name</th>
                                                    <th width="16%" scope="col">Property</th>
                                                    <th width="10%" scope="col">Lease Term</th>
                                                    <th width="11%" scope="col">Rental Rate</th>
                                                    <th width="11%" scope="col">Lease Start</th>
                                                    <th width="11%" scope="col">VKP %</th>
                                                    <th width="11%" scope="col">Ist Agent %</th>
                                                    <th width="11%" scope="col">Due To Ist Agent</th>
                                                    <th width="11%" scope="col">Due To 2nd Agent</th>
                                                    <th width="13%" scope="col">View</th>
                                                    <th width="7%" scope="col">Active</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              
                                              @foreach($result as $rst)
                                              <tr>
                                                 
                                                <th scope="row">{{ date('d/m/Y',strtotime($rst['created_at']))}} <br></th>
                                                <td>
                                                     <?php
                                                    if(isset($rst['FirstagentId'])){
                                                    $getDeaths = DB::table('agents')->where('id', $rst['FirstagentId'])->first(); 
                                                    echo $getDeaths->agentdisplayname; 
                                                }
                                                     ?>
                                                </td> 
                                                <td>
                                                   <?php
                                                    if (isset($rst['SecondAgentID'])) {
                                                        $getDeath = DB::table('agents')->where('id', $rst['SecondAgentID'])->first(); 
                                                    echo $getDeath->agentdisplayname;
                                                    }
                                                     ?>
                                                </td>
                                                <td>{{$rst['inv_property']['propertyName']}}</td>
                                                <td>{{$rst['Leaseterm']}}</td>
                                                <td>{{$rst['Rent']}}</td>
                                                <td>{{date('d/m/Y',strtotime($rst['LeaseStartDate']))}}</td>
                                                <td>{{$rst['VKPPercentage']}}</td>
                                                <td>{{$rst['FirstAgentCommPercentage']}}</td>
                                                <td>{{$rst['DueToFirstAgent']}}</td>
                                                <td>{{$rst['DueToSecondAgent']}}</td>
                                                <!-- <td><a href="javascript:void(0)">View</a></td> -->
                                                <td><a href="" onclick="window.open('{{ route('invoice.edit',$rst['id'])}}', '_blank', 'location=yes,height=570,width=1000,scrollbars=yes,status=yes');">
  VIEW
</a></td>
                                                <td>
                                                    <form>
                                                       
                                                        <label class="custom-control custom-checkbox custom-control-inline">
                                                            <input type="checkbox" class="custom-control-input"><span class="custom-control-label"></span>
                                                        </label>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>            
                                    
                                    <div class="col-sm-12">
                                        <ul class="pagination mt-4 align-right">
                                          {{$result->links()}}
                                    <!--<li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>-->
                                </ul>
                                
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
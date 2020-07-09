@extends('admin_layouts.layout')
@section('content') 
 
<div class="dashboard-wrapper">
      <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">



<div class="card-body">
                                    <table width="100%" class="table table-bordered table_office_manage table_responsive2"  style="width: 100% !important;">
                                        <thead>
                                          
                                            <tr style="color:#000 !important; font-weight:bold !important;">
                                                    
                                                <th width="13%" scope="col">Date</th>
                                                <th width="15%" scope="col">Time</th>
                                             
                                                <th width="35%" scope="col">
                                            Managment Company
                                           </th>
                                                <th width="13%" scope="col">Property Name</th>
                                               <!--  <th width="5%" align="center" scope="col"></th> -->
                                              <th width="13%" scope="col" align="center">A</th>
                                                <th width="3%" scope="col">User</th>
                                            </tr>
                                               
                                        </thead>
                                        
                                               <tbody>
  
                                             @foreach($property_data as $data)                                
                                            <tr>
            
                     
                 <td align="left" scope="row">{{$data->propertynotesdate}}</td>
                 <td align="left">{{$data->propertynotestime}}</td>
                 <td align="left">{{$data->mgt_company}}</td>
                 <td align="left">{{$data->propertyName}}</td>
          
                <!-- <td align="center"></td> -->
                 <td align="left">{{$data->propertynotesattachment}}</td>
                                <td align="left">
                                  Admin
                                </td>
          <!-- <label class="custom-control custom-checkbox custom-control-inline">
            <input type="checkbox" class="custom-control-input" value="{{$data->propertybillnote}}">{{$data->propertybillnote}} -->
           <!--  <span class="custom-control-label"> </span></label>
        </td> -->
                                            </tr>
                                            
                                                                                 
                                            
                                      @endforeach      
                                                                                      </tbody>
                                    </table>
                                    
                                    
                                  
                                    </div>
                                  </div>
                                </div>
                              </div>

@endsection
@extends('admin_layouts.layout')
@section('content') 
 
<div class="dashboard-wrapper">
      <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">



<div class="card-body">
                                    <table width="100%" class="table table-bordered table_office_manage table_responsive2"  style="width: 100% !important;">
                                        <thead>
                                          
                                            <tr style="color:#000 !important; font-weight:bold !important;">
                                                    
                                                <th width="13%" scope="col">Propert Name</th>
                                                <th width="15%" scope="col">Address</th>
                                             
                                              <!--   <th width="35%" scope="col">
                                            Managment Company
                                           </th> -->
                                 <!--                <th width="13%" scope="col">&nbsp;</th> -->
                                            <!--     <th width="5%" align="center" scope="col">Document</th>
                                              <th width="13%" scope="col" align="center">User</th>
                                                <th width="3%" scope="col">Bill <br>
                                                Note</th> -->
                                            </tr>
                                               
                                        </thead>
                                        
                                               <tbody>
  
                                             @foreach($property_data as $data)                                
                                            <tr>
            
                     
                 <td align="left" scope="row">{{$data->propertyName}}</td>
                 <td align="left">{{$data->propertyAd}}</td>
             <!--     <td align="left"></td>
                 <td align="left">{{$data->propertyAd}}</td> -->
          
              <!--   <td align="center">{{$data->propertynotesattachment}}</td>
                 <td align="left">Admin</td>
                                <td align="center">
          <label class="custom-control custom-checkbox custom-control-inline">
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
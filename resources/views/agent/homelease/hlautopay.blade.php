	<h3>Auto Pay</h3>
    <table width="100%" class="table table-bordered table_office_manage table_responsive2">
        <thead>
            <tr>
                <th width="8%" scope="col">Apply</th>
                <th width="8%" scope="col">Ref #</th>
                <th width="8%" scope="col">Tenant Name</th>
                <th width="10%" scope="col">Property Name</th>
                <th width="6%" scope="col">Holding fee</th>
                <th width="10%" scope="col">Enter Mo #</th>
            </tr>
        </thead>
        <tbody>  
		<?php $propertYdetails=''; //echo'<pre>';print_r($result['invoice']);echo'</pre>';?>
		@foreach($result['invoice'] as $resultData)
		<?php 
		$propertYdetails= \App\Models\Properties\Property::find($resultData['property_id']);
		?>
            <tr>
              <td align="left"><label class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input">
                <span class="custom-control-label"> </span></label></td>
                
                <td align="left">{{uniqid()}}</td>
                <td align="left">{{$resultData['TenantNames']}}</td>
                <td>{{$propertYdetails->propertyName}}</td>
                <td align="left">${{$resultData['APReferalAmount']==NULL?0:$resultData['APReferalAmount']}}</td>
                <td align="left">{{$resultData['MONOCount']}}</td>
            </tr> 
	    @endforeach
        </tbody>
    </table>

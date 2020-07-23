<h3>Office Detail</h3>
    <table width="100%" class="table table-bordered table_office_manage table_responsive2">
        <thead>
            <tr>
              
           
                <th width="8%" scope="col">Aagent Name</th>
                <th width="10%" scope="col">Agent CellPhone </th>
                <th width="6%" scope="col">Agent Email</th>
                <th width="10%" scope="col">Agent Aaddress</th>
            </tr>
        </thead>
        <tbody>  
		<?php $propertYdetails=''; //echo'<pre>';print_r($result['invoice']);echo'</pre>';
        ?>
        
		@foreach($result as $resultData)

            <tr>
                        
   <td>{{$resultData['agent']['agentdisplayname']}}</td> 
   <td>{{$resultData['agent']['agentcellphone']}}</td>
    <td>{{$resultData['agent']['agentemail']}}</td>
     <td>{{$resultData['agent']['agentaddress']}}</td> 
  
                    
                
	    @endforeach
        </tbody>
    
    </table>
 
                   
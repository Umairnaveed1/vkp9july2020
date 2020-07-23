<?php

namespace App\Http\Controllers;
use App\Models\Properties\Property;
use Illuminate\Http\Request;
use http\Env\Response;
use DB;


class SearchController extends Controller
{
    //for create controller - php artisan make:controller AutocompleteController

    public function index()
    {
     return view('admin.property_manage.index');
    }

    public function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('properties')
        ->where('propertyName', 'LIKE', "%{$query}%")
        ->paginate();

      $output = '<ul class="" style="">';
      
      foreach($data as $row)
      {
       $output .= '
       <li><a href="../propertymanage/index?'.$row->id.'">'.$row->propertyName.'</a>
       <i class="fa fa-angle-right" aria-hidden="true">
                                        
       </i> 
       ';
      }
      $output .= '</ul>';
      echo $output;
     }
    }
    
}

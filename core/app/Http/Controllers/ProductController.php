<?php
namespace App\Http\Controllers;
  
use App\Models\Product;
use Illuminate\Http\Request;
    
class ProductController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
      echo $id;
      echo "product here";  
    }
    
}
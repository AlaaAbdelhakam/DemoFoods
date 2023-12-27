<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MainPageContent;
use App\Models\Jawharacategory;
use App\Models\Catalog;

class HomeControllerr extends Controller
{
    public function index(Request $request){
        $mainpage = MainPageContent::all();
        $categories = Jawharacategory::all();
        $pdfPath = Catalog::all(); // Retrieve the pdfPath from the query parameters

        return view('front.main',compact('mainpage', 'categories', 'pdfPath'));
    }


    // public function singleproduct(){
    //     return view('singleproduct');
    // }
}
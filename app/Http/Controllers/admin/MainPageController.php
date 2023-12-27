<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MainPageContent;
use File;
use Storage;
use Carbon\Carbon;

class MainPageController extends Controller
{
    public function create(){
        $mainpage = MainPageContent::all();

        return view('front.createMainPage',compact('mainpage'));
    }
    public function insert(Request $request)
    {
        try {
            // $year = now()->year;
            $main=MainPageContent::all();
            if($main) {
              MainPageContent::truncate();
            }
            $directoryPath = 'public/uploads/mainpage';
            if (Storage::disk('local')->exists($directoryPath)) {
              Storage::disk('local')->deleteDirectory($directoryPath);
            
            }
            // Check if the directory exists, and create it if not
            if (!Storage::disk('local')->exists($directoryPath)) {
                Storage::disk('local')->makeDirectory($directoryPath);
            }
    
            $uploadedImages = [];
    
            // Loop through all uploaded images
            foreach ($request->allFiles() as $key => $file) {
                $imageName = date('YmdHi') . $file->getClientOriginalName();
                $filePath = $directoryPath . '/' . $imageName;
    
                // Store the image and add its path to the array
                Storage::disk('local')->put($filePath, file_get_contents($file));
                $uploadedImages[$key] = $filePath;
            }
    
            // Combine uploaded images and request data
            $data = array_merge($request->all(), $uploadedImages);
    
            // Create a new MainPageContent instance
            MainPageContent::create($data);
    
            return redirect()->back()->with('success', 'Data inserted successfully.');
        } catch (\Exception $e) {
            // Handle exceptions and display error
            return back()->with('error', 'Error: ' . $e->getMessage())->withInput();
        }
    }
    
    
}
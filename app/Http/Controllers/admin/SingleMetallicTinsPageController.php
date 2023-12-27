<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SingleMetallicTinsPageContent;
use App\Models\Jawharacproduct;
use File;
use Storage;
use Carbon\Carbon;
class SingleMetallicTinsPageController extends Controller
{
    public function create(){
        $models = Jawharacproduct::all();

        return view('front.single_metallic_tins_page',compact('models'));
    }
//     public function insert(Request $request)
//     {
//         // dd($request->all());
//         try {


// $main = SingleMetallicTinsPageContent::all();
        
// // Check if there is an existing record with the specified jawharacproducts_id
// $existingRecord = SingleMetallicTinsPageContent::where('jawharacproducts_id', $request->jawharacproducts_id)->first();

// if ($existingRecord) {
//     // Save paths of existing images before deletion
//     $img_MTfirstPath = $existingRecord->img_MTfirst;
//     $img_MTsecondPath = $existingRecord->img_MTsecond;
//     $img_MTthirdPath = $existingRecord->img_MTthird;

//     // Delete the existing record
//     $existingRecord->delete();

//     // Delete the existing images
//     if ($img_MTfirstPath) {
//         @unlink(public_path($img_MTfirstPath));
//     }
//     if ($img_MTsecondPath) {
//         @unlink(public_path($img_MTsecondPath));
//     }
//     if ($img_MTthirdPath) {
//         @unlink(public_path($img_MTthirdPath));
//     }
// }
            
//             $directoryPath = 'public/uploads/singlemetallictinspage';
//             // if (Storage::disk('local')->exists($directoryPath)) {
//             //   Storage::disk('local')->deleteDirectory($directoryPath);
            
//             // }
//               // Check if the directory exists, and create it if not
//               if (!Storage::disk('local')->exists($directoryPath)) {
//                 Storage::disk('local')->makeDirectory($directoryPath);
//             }
            
          
    
//             $uploadedImages = [];
    
//             // Loop through all uploaded images
//             foreach ($request->allFiles() as $key => $file) {
//                 $imageName = date('YmdHi') . $file->getClientOriginalName();
//                 $filePath = $directoryPath . '/' . $imageName;
    
//                 // Store the image and add its path to the array
//                 Storage::disk('local')->put($filePath, file_get_contents($file));
//                 $uploadedImages[$key] = $filePath;
//             }
    
//             // Combine uploaded images and request data
//             $data = array_merge($request->except(['_token']), $uploadedImages);
    
//             // Create a new SingleMetallicTinsPageContent instance
//             SingleMetallicTinsPageContent::updateOrCreate($data);
    
//             return redirect()->back()->with('success', 'Data inserted successfully.');
//         } catch (\Exception $e) {
//             // Handle exceptions and display error
//             return back()->with('error', 'Error: ' . $e->getMessage())->withInput();
//         }
//     }

public function insert(Request $request)
{
    try {
        $main = SingleMetallicTinsPageContent::all();

        // Check if there is an existing record with the specified jawharacproducts_id
        $existingRecord = SingleMetallicTinsPageContent::where('jawharacproducts_id', $request->jawharacproducts_id)->first();

        if ($existingRecord) {
            // Save paths of existing images before deletion
            $img_MTfirstPath = $existingRecord->img_MTfirst;
            $img_MTsecondPath = $existingRecord->img_MTsecond;
            $img_MTthirdPath = $existingRecord->img_MTthird;

            // Delete the existing record
            $existingRecord->delete();

            // Delete the existing images
            if ($img_MTfirstPath) {
                Storage::delete($img_MTfirstPath);
            }
            if ($img_MTsecondPath) {
                Storage::delete($img_MTsecondPath);
            }
            if ($img_MTthirdPath) {
                Storage::delete($img_MTthirdPath);
            }
        }

        $directoryPath = 'public/uploads/singlemetallictinspage';
        
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
        $data = array_merge($request->except(['_token']), $uploadedImages);

        // Create a new SingleMetallicTinsPageContent instance
        SingleMetallicTinsPageContent::updateOrCreate($data);

        return redirect()->back()->with('success', 'Data inserted successfully.');
    } catch (\Exception $e) {
        // Handle exceptions and display error
        return back()->with('error', 'Error: ' . $e->getMessage())->withInput();
    }
}



    
}
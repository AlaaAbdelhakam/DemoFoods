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

            // Delete the existing images and the old directory
            if ($img_MTfirstPath && file_exists(public_path($img_MTfirstPath))) {
                unlink(public_path($img_MTfirstPath));
            }
            if ($img_MTsecondPath && file_exists(public_path($img_MTsecondPath))) {
                unlink(public_path($img_MTsecondPath));
            }
            if ($img_MTthirdPath && file_exists(public_path($img_MTthirdPath))) {
                unlink(public_path($img_MTthirdPath));
            }

            // Delete the old directory
            $oldDirectoryPath = public_path('uploads/singlemetallictinspage/' . $existingRecord->id);
            if (File::exists($oldDirectoryPath)) {
                File::deleteDirectory($oldDirectoryPath);
            }
        }

        // Create a new directory for each product
        $newDirectoryPath = 'uploads/singlemetallictinspage/' . ($existingRecord ? $existingRecord->id : now()->timestamp);

        // Check if the directory exists, and create it if not in the public directory
        $publicNewDirectoryPath = public_path($newDirectoryPath);
        if (!File::exists($publicNewDirectoryPath)) {
            File::makeDirectory($publicNewDirectoryPath, 0755, true, true);
        }

        $uploadedImages = [];

        // Loop through all uploaded images
        foreach ($request->allFiles() as $key => $file) {
            $imageName = date('YmdHi') . $file->getClientOriginalName();
            $filePath = $newDirectoryPath . '/' . $imageName;

            // Store the image in the public directory
            $file->move($publicNewDirectoryPath, $imageName);
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

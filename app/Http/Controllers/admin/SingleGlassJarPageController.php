<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SingleGlassJarPageContent;
use App\Models\Jawharacproduct;
use File;
use Storage;
use Carbon\Carbon;
class SingleGlassJarPageController extends Controller
{
    public function create(){
        $models = Jawharacproduct::all();

        return view('front.create_single_glass_jar_page',compact('models'));
    }
//     public function insert(Request $request)
//     {
//         try {
//             // $year = now()->year;
//             $main = SingleGlassJarPageContent::where('jawharacproducts_id', $request->jawharacproducts_id)->first();

//             if ($main) {
//                 if ($request->img_GJfirst) {
// @unlink(public_path($main->img_GJfirst));
//                 }
//                 if ($request->img_GJsecond) {
// @unlink(public_path($main->img_GJsecond));
//                 }
//                 if ($request->img_GJthird) {
// @unlink(public_path($main->img_GJthird));
//                 }

//                 $main->delete();
//             }

//             $directoryPath = 'public/uploads/singleglassjarpage';
//             // if (Storage::disk('local')->exists($directoryPath)) {
//             //   Storage::disk('local')->deleteDirectory($directoryPath);
//             // }
//             // Check if the directory exists, and create it if not
//             if (!Storage::disk('local')->exists($directoryPath)) {
//                Storage::disk('local')->makeDirectory($directoryPath);
//            }



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

//             // Create a new SingleGlassJarPageContent instance
//             SingleGlassJarPageContent::updateOrCreate($data);

//             return redirect()->back()->with('success', 'Data inserted successfully.');
//         } catch (\Exception $e) {
//             // Handle exceptions and display error
//             return back()->with('error', 'Error: ' . $e->getMessage())->withInput();
//         }
//     }

public function insert(Request $request)
{
    try {
        // Check if there is an existing record with the specified jawharacproducts_id
        $existingRecord = SingleGlassJarPageContent::where('jawharacproducts_id', $request->jawharacproducts_id)->first();

        if ($existingRecord) {
            // Save paths of existing images before deletion
            $img_GJfirstPath = $existingRecord->img_GJfirst;
            $img_GJsecondPath = $existingRecord->img_GJsecond;
            $img_GJthirdPath = $existingRecord->img_GJthird;

            // Delete the existing images and the old directory
            if ($img_GJfirstPath && file_exists(public_path($img_GJfirstPath))) {
                unlink(public_path($img_GJfirstPath));
            }
            if ($img_GJsecondPath && file_exists(public_path($img_GJsecondPath))) {
                unlink(public_path($img_GJsecondPath));
            }
            if ($img_GJthirdPath && file_exists(public_path($img_GJthirdPath))) {
                unlink(public_path($img_GJthirdPath));
            }

            // Delete the old directory
            $oldDirectoryPath = public_path('uploads/singleglassjarpage/' . $existingRecord->id);
            if (File::exists($oldDirectoryPath)) {
                File::deleteDirectory($oldDirectoryPath);
            }
        }

        // Create a new directory for each product
        $newDirectoryPath = 'uploads/singleglassjarpage/' . ($existingRecord ? $existingRecord->id : now()->timestamp);

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

        // Create a new SingleGlassJarPageContent instance
        SingleGlassJarPageContent::updateOrCreate($data);

        return redirect()->back()->with('success', 'Data inserted successfully.');
    } catch (\Exception $e) {
        // Handle exceptions and display error
        return back()->with('error', 'Error: ' . $e->getMessage())->withInput();
    }
}





}

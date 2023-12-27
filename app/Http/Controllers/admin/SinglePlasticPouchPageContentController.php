<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SinglePlasticPouchPageContent;
use App\Models\Jawharacproduct;
use File;
use Storage;
use Carbon\Carbon;
class SinglePlasticPouchPageContentController extends Controller
{
    public function create(){
        $models = Jawharacproduct::all();

        return view('front.create_single_plastic_pouch_page_contents',compact('models'));
    }


public function insert(Request $request)
{
    try {
        // Check if there is an existing record with the specified jawharacproducts_id
        $existingRecord = SinglePlasticPouchPageContent::where('jawharacproducts_id', $request->jawharacproducts_id)->first();

        if ($existingRecord) {
            // Save paths of existing images before deletion
            $img_PBfirstPath = $existingRecord->img_PPfirst;
            $img_PBsecondPath = $existingRecord->img_PPsecond;
            $img_PBthirdPath = $existingRecord->img_PPthird;

            // Delete the existing record
            $existingRecord->delete();

            // Delete the existing images
            if ($img_PBfirstPath) {
                Storage::delete($img_PBfirstPath);
            }
            if ($img_PBsecondPath) {
                Storage::delete($img_PBsecondPath);
            }
            if ($img_PBthirdPath) {
                Storage::delete($img_PBthirdPath);
            }
        }

        $directoryPath = 'public/uploads/singleplasticbarrelspage';

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

        // Create a new SinglePetJarPageContent instance
        SinglePlasticPouchPageContent::updateOrCreate($data);

        return redirect()->back()->with('success', 'Data inserted successfully.');
    } catch (\Exception $e) {
        // Handle exceptions and display error
        return back()->with('error', 'Error: ' . $e->getMessage())->withInput();
    }
}
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Jawharacategory;

class JawharaCategoryController extends Controller
{
    public function index()
    {
       
        $category = Jawharacategory::orderBy('id', 'DESC')->paginate(10);
        return view('front.jawharaCategory.index', compact('category'));
    }

    public function create()
    {

        return view('front.jawharaCategory.create');
    }


    public function store(Request $request)
    {
        try {
        // DB::beginTransaction();
        
        $img = $request->image;
        $img_new = time() . $img->getClientOriginalName();
        $img->move('uploads/articles',$img_new);
        Jawharacategory::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => 'uploads/articles/'.$img_new,
            
        ]);


        
        // $category = Jawharacategory::create($request->all());
        
    
       
        // DB::commit();
        return redirect()->route('admin.category')->with(['success' => 'تم ألاضافة بنجاح']);
    } catch (\Exception $ex) {
        // DB::rollback();
        return redirect()->route('admin.category')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
    }
    }


    public function edit($id)
    {

        //get specific categorymodel and its translations
        $category = Jawharacategory::find($id);
 

        // if (!$models) {
        //     return redirect()->route('admin.category')->with(['error' => 'هذا الماركة غير موجود ']);
        // }

        return view('front.jawharaCategory.edit', compact('category'));
    }


    public function update($id, Request $request)
    {
        try {
            $article = Jawharacategory::findOrFail($id);
    
            // Retrieve the old image path before updating
            $oldImagePath = $article->image;
    
            $articleData = [
                'title' => $request->title,
                'description' => $request->description,
            ];
    
            if ($request->hasFile('image')) {
                // Delete the old image file from the server
                if ($oldImagePath) {
                    @unlink(public_path($oldImagePath));
                }
    
                $img = $request->file('image');
                $img_new = time() . $img->getClientOriginalName();
                $img->move('uploads/articles', $img_new);
                $articleData['image'] = 'uploads/articles/' . $img_new;
            }
    
            $article->update($articleData);
    
            return redirect()->route('admin.category')->with(['success' => 'تم التحديث بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->route('admin.category')->with(['error' => 'حدث خطأ ما برجاء المحاولة لاحقاً']);
        }
    }
    


    public function destroy($id)
    {
        try {
            //get specific categories and its translations
            $category = Jawharacategory::find($id);

            // if (!$category) {
            //     return redirect()->route('admin.category')->with(['error' => 'هذا الماركة غير موجود ']);
            // }
            // $ts = categorybon\categorybon::now()->toDateTimeString();
            // $data = array('deleted_at' => $ts, 'deleted_by' => Auth::user()->id);
            // DB::table('category')->where('id', $id)->update($data);
            $category->delete();

            return redirect()->route('admin.category')->with(['success' => 'تم  الحذف بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->route('admin.category')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }
}
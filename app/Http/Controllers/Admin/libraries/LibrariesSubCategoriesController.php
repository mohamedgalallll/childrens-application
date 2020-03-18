<?php

namespace App\Http\Controllers\Admin\libraries;
use App\Http\Controllers\Controller;
use App\Model\librarySubCategory;
use DataTables;
use Illuminate\Http\Request;

class LibrariesSubCategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:categories_show', ['only' => 'index', 'show']);
        $this->middleware('permission:categories_add', ['only' => 'store', 'create']);
        $this->middleware('permission:categories_edit', ['only' => 'edit', 'update']);
        $this->middleware('permission:categories_delete', ['only' => 'destroy']);
    }
    public function index(Request $request)
    {
        if ($request->ajax()){
            $items = librarySubCategory::latest()->get();
            return DataTables::of($items)->make(true);
        }
        return view('admin.libraries.librariesSubCategories.index');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'sometimes|nullable|string',
            'image' => 'sometimes|nullable|image',
            'icon' => 'sometimes|nullable|string',
            'description_ar' => 'sometimes|nullable|string',
            'description_en' => 'sometimes|nullable|string',
            'status' => 'sometimes|nullable|integer',
            'library_main_category_id' => 'required|integer',
        ]);

        if ($request->hasFile('image') && request()->has('image')) {
            $data['image'] = $this->storeFile($request->image);
        }
        librarySubCategory::create($data);
        return redirect()->back()->with('success', 'تم اضافه قسم ');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $item = librarySubCategory::findorfail($id);
        return view('admin.libraries.librariesSubCategories.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = librarySubCategory::findorfail($id);
        $data = $request->validate([
            'name' => 'sometimes|nullable|string',
            'image' => 'sometimes|nullable|image',
            'icon' => 'sometimes|nullable|string',
            'description_ar' => 'sometimes|nullable|string',
            'description_en' => 'sometimes|nullable|string',
            'status' => 'sometimes|nullable|integer',
            'library_main_category_id' => 'required|integer',
        ]);

        if ($request->hasFile('image') && request()->has('image')) {
            $data['image'] = $this->storeFile($request->image);
        }

        $item->update($data);
        return redirect()->back()->with('success','تم اضافه تعديل ');

    }

    public function destroy($id)
    {
        $item = librarySubCategory::findorfail($id)->delete();
        if (librarySubCategory::find($id)){
            return response()->json(false,404);
        }else{
            return response()->json(true,202);
        }
    }
    public function GetSubCategories(Request $request){
        $item =  librarySubCategory::where('library_main_category_id',$request->library_main_cat_id)->pluck("name","id");
        return response()->json($item);
    }
}

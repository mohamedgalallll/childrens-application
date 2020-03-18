<?php

namespace App\Http\Controllers\Admin\libraries;
use App\Http\Controllers\Controller;
use App\Model\libraryMainCategory;
use DataTables;
use Illuminate\Http\Request;

class LibrariesMainCategoriesController extends Controller
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
            $items = libraryMainCategory::latest()->get();
            return DataTables::of($items)->make(true);
        }
        return view('admin.libraries.librariesMainCategories.index');
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
        ]);

        if ($request->hasFile('image') && request()->has('image')) {
            $data['image'] = $this->storeFile($request->image);
        }
        libraryMainCategory::create($data);
        return redirect()->back()->with('success','تم اضافه قسم جديد ');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $item = libraryMainCategory::findorfail($id);
        return view('admin.libraries.librariesMainCategories.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {

        $item = libraryMainCategory::findorfail($id);
        $data = $request->validate([
            'name' => 'sometimes|nullable|string',
            'image' => 'sometimes|nullable|image',
            'icon' => 'sometimes|nullable|string',
            'description_ar' => 'sometimes|nullable|string',
            'description_en' => 'sometimes|nullable|string',
            'status' => 'sometimes|nullable|integer',
        ]);

        if ($request->hasFile('image') && request()->has('image')) {
            $data['image'] = $this->storeFile($request->image);
        }
        $item->update($data);
        return redirect()->back()->with('success','تم اضافه تعديل علي اقسام المكتبات');
    }
    public function destroy($id)
    {
        $item = libraryMainCategory::findorfail($id)->delete();
        if (libraryMainCategory::find($id)){
            return response()->json(false,404);
        }else{
            return response()->json(true,202);
        }

    }
}

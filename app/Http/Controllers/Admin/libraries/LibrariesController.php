<?php

namespace App\Http\Controllers\Admin\Libraries;

use App\Http\Controllers\Controller;
use App\Model\Library;
use DataTables;
use Illuminate\Http\Request;

class LibrariesController extends Controller
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
            $items = Library::latest()->get();
            return DataTables::of($items)->make(true);
        }
        return view('admin.Libraries.Libraries.index');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'sometimes|nullable|string',
            'image' => 'sometimes|nullable|image',
            'file' => 'sometimes|nullable|image|',
            'description_ar' => 'sometimes|nullable|string',
            'library_main_category_id' => 'required|integer',
            'library_sub_category_id' => 'required|integer',

        ]);
        if ($request->hasFile('image') && request()->has('image')) {
            $data['image'] = $this->storeFile($request->image);
        }if ($request->hasFile('file') && request()->has('file')) {
            $data['file'] = $this->storeFile($request->file);
        }
        Library::create($data);
        return redirect()->back()->with('success', 'تم اضافه مكتبه ');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $item = Library::findorfail($id);
        return view('admin.Libraries.libraries.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Library::findorfail($id);

        $data = $request->validate([
            'name' => 'sometimes|nullable|string',
            'image' => 'sometimes|nullable|image',
            'file' => 'sometimes|nullable|image|',
            'description_ar' => 'sometimes|nullable|string',
            'description_en' => 'sometimes|nullable|string',
            'library_main_category_id' => 'required|integer',
            'library_sub_category_id' => 'required|integer',
        ]);
        if ($request->hasFile('image') && request()->has('image')) {
            $data['image'] = $this->storeFile($request->image);
        }
        if ($request->hasFile('file') && request()->has('file')) {
            $data['file'] = $this->storeFile($request->file);
        }
        $item->update($data);
        return redirect()->back()->with('success','تم اضافه تعديل في المكتبه ');
    }
    public function destroy($id)
    {
        $item = Library::findorfail($id)->delete();
        if (Library::find($id)){
            return response()->json(false,404);
        }else{
            return response()->json(true,202);
        }
    }
}

<?php

namespace App\Http\Controllers\Admin\citations;

use App\Model\Citation;
use App\Http\Controllers\Controller;
use App\Model\User;
use Carbon\Carbon;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CitationsController extends Controller
{

    public function __construct()
    {
//        $this->middleware('permission:clients_show', ['only' => 'index', 'show']);
//        $this->middleware('permission:clients_add', ['only' => 'store', 'create']);
//        $this->middleware('permission:clients_edit', ['only' => 'edit', 'update']);
//        $this->middleware('permission:clients_delete', ['only' => 'destroy']);
    }

    public function index(Request $request)
    {
        if ($request->ajax()){
            $citations = Citation::latest()->get();
            return DataTables::of($citations)->make(true);
        }
        return view('admin.citations.index');
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'text' => 'required|string',
            'description' => 'required|string',
            'count' => 'required|integer',
            'icon' => 'required|string',
            'image' => 'required|image',
        ]);
        $request->hasFile('image') ?  $data['image'] = $this->storeFile($request->image) : '';
        Citation::create($data);
        return redirect()->back()->with('success', trans('تمت الاضافه بنجاح'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $item = Citation::findorfail($id);
        return view('admin.citations.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {

        $item = Citation::findorfail($id);
        $data = $request->validate([
            'title' => 'required|string',
            'text' => 'required|string',
            'description' => 'required|string',
            'count' => 'required|integer',
            'icon' => 'required|string',
            'image' => 'required|image',
        ]);
        $request->hasFile('image') ?  $data['image'] = $this->storeFile($request->image) : '';
        $item->update($data);
        return redirect()->back()->with('success', trans('تم التعديل'));

    }

    public function destroy($id)
    {
        $item = Citation::findorfail($id)->delete();
        if (Citation::find($id)){
            return response()->json(false,404);
        }else{
            return response()->json(true,202);
        }

    }
}

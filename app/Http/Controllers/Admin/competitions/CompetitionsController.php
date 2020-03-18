<?php

namespace App\Http\Controllers\Admin\competitions;

use App\Model\Competition;
use App\Http\Controllers\Controller;
use App\Model\User;
use Carbon\Carbon;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CompetitionsController extends Controller
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
            $competition = Competition::latest()->get();
            return DataTables::of($competition)->make(true);
        }
        return view('admin.competitions.index');
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'question' => 'required|string',
            'q1' => 'required|string',
            'q2' => 'required|string',
            'q3' => 'required|string',
            'q4' => 'required|string',
            'right_answer' => 'required|string',
        ]);
        Competition::create($data);
        return redirect()->back()->with('success', trans('تمت الاضافه بنجاح'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $item = Competition::findorfail($id);
        return view('admin.competitions.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {

        $item = Competition::findorfail($id);
        $data = $request->validate([
            'name' => 'required|string',
            'question' => 'required|string',
            'q1' => 'required|string',
            'q2' => 'required|string',
            'q3' => 'required|string',
            'q4' => 'required|string',
            'right_answer' => 'required|string',
        ]);
        $item->update($data);
        return redirect()->back()->with('success', trans('تم التعديل'));

    }

    public function destroy($id)
    {
        $item = Competition::findorfail($id)->delete();
        if (Competition::find($id)){
            return response()->json(false,404);
        }else{
            return response()->json(true,202);
        }

    }
}

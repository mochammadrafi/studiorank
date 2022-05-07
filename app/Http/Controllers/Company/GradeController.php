<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Grade;
use App\Models\GradeGroup;

class GradeController extends Controller
{
    public function __construct()
    {
        $this->view = 'company.';
    }

    public function attributes()
    {
        return [
            'group' => 'nama group',
            'name' => 'tampilan peringkat',
            'value_start' => 'nilai awal',
            'value_end' => 'nilai akhir',
            'result' => 'hasil peringkat',
            'color' => 'warna peringkat'
        ];
    }

    public function index()
    {
        return view($this->view . 'grade.index');
    }

    public function create()
    {
        $groups = GradeGroup::byCompany()->get();
        return view($this->view . 'grade.create', [
            'groups' => $groups
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'group' => 'required',
            'name' => 'required',
            'value_start' => 'required|numeric|lt:value_end',
            'value_end' => 'required|numeric|gt:value_start',
            'result' => 'required',
            'color' => 'required|in:red,yellow,green,blue'
        ], [], $this->attributes());

        DB::beginTransaction();
        try {
            $group = GradeGroup::firstOrCreate([
                'name' => $request->name,
                'company_id' => auth()->id()
            ], [
                'created_by' => auth()->id()
            ]);

            $grade = new Grade();
            $grade->group_id = $group->id;
            $grade->value_start = $request->value_start;
            $grade->value_end = $request->value_end;
            $grade->name = $request->name;
            $grade->result = $request->result;
            $grade->color = $request->color;
            $grade->created_by = auth()->id();
            $grade->company_id = auth()->id();
            $grade->save();

            DB::commit();

            return redirect()->back()->with('success', 'Berhasil ditambahkan');
        } catch (\Throwable $th) {
            DB::rollBack();
            report($th);
            dd($th);
        }
    }
}

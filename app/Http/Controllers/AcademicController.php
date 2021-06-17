<?php

namespace App\Http\Controllers;

use DB;
use App\Models\User;
use App\Models\Academic;
use Illuminate\Http\Request;

class AcademicController extends Controller
{

    public function index()
    {
        return view('users.academics.list');
    }

    public function add(Request $request)
    {
        $academic = Academic::create([
            'user_id' => auth()->user()->id,
            'institute' => $request->institute,
            'edu_stage' => $request->edu_stage,
            'edu_field' => $request->edu_field,
            'start_date' => $request->start_date, 
            'end_date' => $request->end_date,
        ]);
        return redirect('academic');
    }

    public function view($academic_id)
    {
        $academic = Academic::where('id', $academic_id)->first();
        return view('users.academics.modals.view_detail', compact('academic'));
    }

    
    public function edit(Request $request)
    {
        // dd('edit');
    }

    public function delete($academic_id)
    {
        dd($academic_id);
        $academic = Academic::where('id', $academic_id);
        DB::beginTransaction();
        try {
            $academic->delete();
            DB::commit();
    
            // return response()->json([
            //     'success' => true,
            //     'message' => 'Academic Berjaya Di Padam.',
            // ]);
            return redirect('academic');
        } catch (\Throwable $th) {
            DB::rollBack();
    
            throw $th;
        }    
    }

}

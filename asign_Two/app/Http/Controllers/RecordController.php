<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $record = Record::get();
        if ($record->count() > 0) {
            return view('home',[

                'record'=> $record
     
             ]);
        }else{
            return response()->json([
                'status'=> 404,
                'message'=> 'No Records found'
            ],404);
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function get_record(Request $request){
        $record = Record::get();
        return response()->json([
            'message'   =>  'Records',
            'status'    =>  'success',
            'record'   =>  $record
        ]);
    }
    public function create_record(Request $request)
    {
        $validator = Validator::make($request->all(),[
            "name"=> 'required|string|max:191',
            'nickname'=> 'max:11',
            'blog'=>'required|string|max:191',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message'=> 'Validation Failed',
                'status'=>'error',
                'errors'=> $validator->errors(),
            ],422);
        }
        $newRecord = new Record;
        $newRecord->name = $request->name;
        $newRecord->nickname = $request->nickname;
        $newRecord->blog= $request->blog;
        $newRecord->save();
        return response()->json([
            'message'=>'Created',
            'status'=> 'success',
            'new_Record'=> $newRecord
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            "name"=> 'required|string|max:191',
            'nickname'=> 'max:11',
            'blog'=>'required|string|max:191',
        ]);
        if ($validator->fails()) {
            return redirect()->route('record.index')
                ->with('error', 'Validation failed')
                ->withErrors($validator)
                ->withInput();
        }
        $newRecord = new Record;
        $newRecord->name = $request->name;
        $newRecord->nickname = $request->nickname;
        $newRecord->blog= $request->blog;
        $newRecord->save();
    
        return redirect()->route('record.index')
            ->with('success', 'Record Created');


    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $record= Record::find($id);
        if ($record){
            return response()->json([
                'status'=> 200,
                'record'=> $record
            ],200);


        }
        else{
            return response()->json([
                'status'=> 404,
                'message'=> "Nothing is here"]
                ,404);

        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $record= Record::find($id);
        return view('edit_record',[
            'record'=> $record,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),
        [
            "name"=> 'required|string|max:191',
            'nickname'=> 'max:11',
            'blog'=>'required|string|max:191',
        ]);
        if ($validator->fails()) {    
            return redirect()-> route('record.edit', $id)
            ->with('error', 'Validation failed')
            ->withErrors($validator)
            ->withInput();
        }
        $record = Record::find($id);
        if(!$record){
            return redirect()->route('record.index')
            ->with('error','Record not found');
        }
        $record->name = $request->name;
        $record->nickname = $request->nickname;
        $record->blog = $request->blog;
        $record->save();

        return redirect()->route('record.index')
        ->with('success','Record Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $record = Record::find($id);

        if ($record) {
            $record->delete();
            session()->flash('success', 'Delection was a success');
        } else {
            session()->flash('error', 'Record not found');
        }

        return redirect('/record');
    }
}

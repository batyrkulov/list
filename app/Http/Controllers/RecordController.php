<?php

namespace App\Http\Controllers;

use App\Http\Resources\Record as RecordResource;
use Illuminate\Http\Request;
use App\Record;
use phpDocumentor\Reflection\Types\Collection;

class RecordController extends Controller
{
    public function showAll(Request $request) {
        return view('records.all', ['records'=>Record::all()]);
    }

    public function show($id) {
        $record = Record::find($id);

        return view('records.show', ['record'=>$record]);
    }

    public function add(Request $request) {
        $record = new Record();
        $record->text = $request->text;
        $record->save();
        return response()->json([
            'id' => $record->id
        ]);
    }

    public function find(Request $request) {
        return RecordResource::collection(Record::where('text', 'like', "%{$request->stext}%")->get());
    }
}

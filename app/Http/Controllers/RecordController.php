<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record;

class RecordController extends Controller
{
    public function showAll() {
        $records = Record::all();

        return view('records.all', ['records'=>$records]);
    }

    public function show($id) {
        $record = Record::find($id);

        return view('records.show', ['record'=>$record]);
    }
}

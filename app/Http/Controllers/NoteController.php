<?php

namespace App\Http\Controllers;

use App\Models\Note;

use App\Models\page;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function store(Request $request,page $page){
        $this->validate($request , [
            'text' =>'required|min:5'
        ]);
        $note = new note;
        $note->text = $request->text;
        $page->notes()->save($note);
        return back();

}

public function edit(Note $note){
    return view('notes.edit',compact('note'));
}

public function update(Request $request,Note $note){
$note->update($request->all());
return redirect('pages/' . $note->page_id);
}

public function delete(Note $note){
    $note->delete();
    return back();
   }
   

}

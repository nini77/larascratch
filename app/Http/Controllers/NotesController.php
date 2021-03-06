<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Note;
use App\Card;

class NotesController extends Controller
{
    public function store(Request $request, Card $card)
    {
    	// $note = new Note;
    	// $note->body = $request->body;
    	
    	// $card->notes()->save($note);

    	$this->validate($request,[
    			'body' => 'required|min:10'
    		]);

    	$note = new Note($request->all());
    	$note->user_id = 1;
    	$card->addNote($note);

        session()->flash('flash_message',true);
    	return back();
    }
    public function edit(Note $note)
    {
        $success = false;
    	return view('notes.edit',compact('note','success'));
    }

    public function delete(Note $note)
    {
        $note->delete();
        return back();
    }

    public function update(Request $request, Note $note)
    {
        $this->validate($request,[
            'body' => 'required|min:10'
        ]);
    	$note->update($request->all());
        $success = true;
    	return view('notes.edit',compact('note','success'));
    }

}

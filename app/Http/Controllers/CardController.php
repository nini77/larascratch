<?php

namespace App\Http\Controllers;
use App\Card;
use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class CardController extends Controller
{
    public function index()
    {

    	// $cards = DB::table('cards')->get();

    	// $cards = Card::all();
        $cards = Card::orderBy('id')->paginate(10);
        $success = false;
    	return view('cards.index',compact('cards','success'));
    }

    public function show(Card $card)
    {
        // $card = Card::with('notes.user')->find(1);
        // return $card;
        $id = $card->id;
        $card->load('notes.user');
        // $notes = DB::table('notes')->where('card_id',$card->id)->orderBy('id')->paginate(5);
        $notes = DB::table('notes')->select('notes.id','notes.body','users.name')->join('users',function($join){
            $join->on('notes.user_id','=','users.id');
        })->where('notes.card_id','=',$id)->orderBy('id')->paginate(5);

        return view('cards.show',compact('card','notes'));
    
    }
    public function store(Request $request)
    {

        $this->validate($request,[
                'title' => 'required|min:10'
            ]);

        $card = new Card;
        $card->title = $request->title;
        $card->save();

        $cards = Card::orderBy('id')->paginate(10);
        $success = true;
        return view('cards.index',compact('cards','success'));
        // return back();
    }

}

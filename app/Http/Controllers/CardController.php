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
    	return view('cards.index',compact('cards'));
    }

    public function show(Card $card)
    {
        // $card = Card::with('notes.user')->find(1);
        // return $card;

        $card->load('notes.user');
        $notes = DB::table('notes')->where('card_id',$card->id)->orderBy('id')->paginate(5);
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
        return back();
    }

}

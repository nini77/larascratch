<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Note;
use App\User;
class Note extends Model
{
	protected $fillable = ['body'];
    public function card()
    {
    	return $this->belongTo(Card::class);
    }

    public function user()
	{
		return $this->belongsTo(User::class);
	}

}

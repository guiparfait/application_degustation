<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Commentaire extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function degustation()
    {
        return $this->belongsTo(Degustation::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public static function homeCommentaire()
    {
        return DB::table('commentaires')
                    ->join('users','users.id','=','commentaires.user_id')
                    ->select('users.*','commentaires.*')
                    ->orderBy('commentaires.id', 'desc')->limit(4)->get();
    }
}

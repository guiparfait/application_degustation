<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Degustation extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }

    public static function homeDegustation()
    {
        return DB::table('degustations')->orderBy('id', 'desc')->limit(4)->get();
    }

}

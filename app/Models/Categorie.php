<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Categorie extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function degustations()
    {
        return $this->hasMany(Degustation::class);
    }

    public static function homeCategorie()
    {
        return DB::table('categories')->orderBy('id', 'desc')->limit(4)->get();
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'title',
        'publication_year',
        'category_id',
        'studio_id'
    ];
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    public function studio()
    {
        return $this->belongsTo(Studio::class);
    }

    public function getmoviesbygenero($generoname)
    {
        $movies = Movie::where('genero', $generoname)->get();
        return view('movies.index' , [ 'movies' => $movies]);
    }
}
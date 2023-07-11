<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $primaryKey = 'question_id';

    protected $fillable = ['title', 'content', 'options', 'correct_option'];

    protected $casts = [
        'options' => 'array',
    ];

    public function options()
    {
        return $this->hasMany(Option::class);
    }

    public function countCorrectAnswers()
    {
        return $this->options()->where('is_correct', true)->count();
    }

    public static function searchByTitle($searchString)
    {
        return self::where('title', 'LIKE', '%' . $searchString . '%')->get();
    }

    public static function orderByCorrectAnswers()
    {
        return self::withCount('options')->orderBy('options_count', 'desc')->get();
    }
}

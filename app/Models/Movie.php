<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $table = 'movies';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'release_date',
        'img',
    ];
    
    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['formatted_created_at'];

    public static $rules = [
        'title' => 'required|unique:movies|max:255',
        'description' => 'nullable',
        'release_date' => 'nullable|date',
        'img' => 'nullable|url',
    ];

    /**
     * Accessor for formatted_created_at attribute
     *
     * @return string
     */
    public function getFormattedCreatedAtAttribute(): string
    {
        return $this->created_at->format('Y-m-d');
    }
}

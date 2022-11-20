<?php

namespace App\Models;

use Database\Factories\NoteFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'title',
        'content',
    ];

    /**
     * Create a new NoteFactory instance for the model.
     *
     * @return NoteFactory
     */
    protected static function newFactory(): NoteFactory
    {
        return NoteFactory::new();
    }
}

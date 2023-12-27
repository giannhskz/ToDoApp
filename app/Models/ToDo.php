<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'due_date',
        'completed',
        'updated_at',
        'created_at',
    ];

    protected $casts = [
        'due_date' => 'datetime',
        'completed' => 'boolean'
    ];

    public function user(){
        return $this->belongsTo((User::class));
    }
}

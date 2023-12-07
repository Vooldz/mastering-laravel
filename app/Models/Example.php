<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Example extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'content',
        'show',
        'status',
    ];

    // Created at date format
    public function getCreatedAtAttribute($data)
    {
        return date('Y/m/d', strtotime($data));
    }
    // Updated at date format
    public function getUpdatedAtAttribute($data)
    {
        return date('Y/m/d', strtotime($data));
    }
    // Deleted at date format
    public function getDeletedAtAttribute($data)
    {
        return date('Y/m/d', strtotime($data));
    }
}

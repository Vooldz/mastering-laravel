<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Test extends Model
{
    use HasFactory, SoftDeletes;
    // const DELETED_AT = 'my_soft_delete';
    protected $fillable = [
        'title',
        'content',
        'show',
        'status',
    ];

    // Create Date Format
    public function getCreatedAtAttribute($date)
    {
        return date('Y/m/d', strtotime($date));
    }

    // Update Date Format
    public function getUpdatedAtAttribute($date)
    {
        return date('Y/m/d', strtotime($date));
    }

    // Delete Date Format
    public function getDeletedAtAttribute($date)
    {
        return date('Y/m/d', strtotime($date));
    }
}

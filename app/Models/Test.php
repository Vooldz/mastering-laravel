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

    protected static function boot()
    {
        parent::boot();

        // Create
        static::created(function ($model) {$model->title = "Ayman";});
        static::creating(function ($model) {});

        // Update
        static::updating(function ($model) {});
        static::updated(function ($model) {});

        // Create & Update
        static::saving(function ($model) {});
        static::saved(function ($model) {});

        // Delete
        static::deleted(function ($model) {});
        static::deleting(function ($model) {});

        // Restore
        static::restoring(function ($model) {});
        static::restored(function ($model) {});

        // ForceDelete
        static::forceDeleted(function ($model) {});
        static::forceDeleting(function ($model) {});

        // Retrieved
        static::retrieved(function ($model) {});

        // Replicating
        static::replicating(function ($model) {});
    }

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

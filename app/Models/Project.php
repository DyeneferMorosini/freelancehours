<?php

namespace App\Models;

use App\Models\User;
use App\ProjectStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;

    protected $casts = [

        'tech_stack' => 'array',
        'status' => ProjectStatus::class,
        'ends_at' => 'datetime',
    ];

    public function author()
    {

        return $this ->belongsTo(User::class, 'created_by');

    }
}

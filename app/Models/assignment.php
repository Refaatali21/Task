<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\admin;
use App\Models\client;

class assignment extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'status',
        'deadline',
        'admin_id',
        'client_id',
    ];

    public function user()
    {
        return $this->belongsTo(admin::class, 'admin_id');
    }

    public function client()
    {
        return $this->belongsTo(client::class,'client_id');
    }
}

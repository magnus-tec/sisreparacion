<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'service_list';
    public $timestamps = false;

    protected $fillable = [
        'service', 'description', 'cost'
    ];

    protected $dates = [
        'date_created', 'date_updated'
    ];

    public function repairs()
    {
        return $this->belongsToMany(Repair::class, 'repair_services');
    }
}

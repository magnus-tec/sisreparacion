<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    protected $table = 'repair_list';
    public $timestamps = false;

    protected $fillable = [
        'code', 'client_id', 'remarks', 'notes', 'total_amount', 'discount', 'payment_status', 'status', 'advance'
    ];

    protected $dates = [
        'date_created'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function services()
    {
        return $this->belongsToMany(Service::class, 'repair_services')->withPivot('fee', 'status');
    }
}

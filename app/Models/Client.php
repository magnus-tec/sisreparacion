<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'client_list';
    public $timestamps = false;

    protected $fillable = [
        'firstname', 'middlename', 'lastname', 'contact', 'email', 'address', 'documentid'
    ];

    protected $dates = [
        'date_created', 'date_updated'
    ];

    public function repairs()
    {
        return $this->hasMany(Repair::class);
    }
}

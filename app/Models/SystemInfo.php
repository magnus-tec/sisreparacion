<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SystemInfo extends Model
{
    protected $table = 'system_info';
    protected $primaryKey = 'id';
    public $timestamps = false;
    
    protected $fillable = [
        'meta_field',
        'meta_value'
    ];
    
    // Método helper para obtener valores específicos
    public static function getMetaValue($field)
    {
        return self::where('meta_field', $field)->value('meta_value');
    }
    public function getValue($field)
{
    return $this->where('meta_field', $field)->value('meta_value');
}
}
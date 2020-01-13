<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offices extends Model
{
    //
    protected $table = 'offices';

    protected $fillable = [
        'organizations_id',
        'name',
        'office_name',
        'phone',
        'email',
    ];

    public function organizations()
    {
        return $this->belongsTo('App\Models\Organizations');
    }
}

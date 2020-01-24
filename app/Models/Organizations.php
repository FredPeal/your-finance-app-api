<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Events\OrganizationsCreated;

class Organizations extends Model
{
    //
    protected $table = 'organizations';

    protected $fillable = [
        'name',
        'rnc',
        'email',
        'phone',
    ];

    public function users()
    {
        return $this->belongsToMany('App\Models\Organizations', 'organizations_users', 'organizations_id', 'users_id');
    }

    public function offices()
    {
        return $this->hasMany('App\Models\Offices');
    }

    protected $dispatchesEvents = [
        'created' => OrganizationsCreated::class,
    ];
}

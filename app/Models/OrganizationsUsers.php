<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrganizationsUsers extends Model
{
    //
    protected $table = 'organizations_users';

    protected $fillable = [
        'organizations_id',
        'users_id'
    ];
}

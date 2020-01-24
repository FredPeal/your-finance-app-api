<?php

namespace App\Listeners;

use App\Events\OrganizationsCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Offices;
use App\Models\OrganizationsUsers;

class CreateNewOffice
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  OrganizationsCreated  $event
     * @return void
     */
    public function handle(OrganizationsCreated $event)
    {
        //
        OrganizationsUsers::create([
            'organizations_id' => $event->organization->id, 
            'users_id' => auth()->user()->id
        ]);
        
        Offices::create([
            'organizations_id' => $event->organization->id,
            'name' => $event->organization->name,
            'office_name' => $event->organization->name,
            'phone' => $event->organization->phone,
            'email' => $event->organization->email
        ]);
    }
}

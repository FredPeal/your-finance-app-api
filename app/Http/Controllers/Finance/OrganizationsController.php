<?php

namespace App\Http\Controllers\Finance;

use App\Http\Controllers\Controller;
use App\Models\Organizations;
use Fredpeal\BakaHttp\Traits\CrudTrait;
class OrganizationsController extends Controller
{
    //
    use CrudTrait;

    public function __construct()
    {
        $this->model = new Organizations;
    }
}

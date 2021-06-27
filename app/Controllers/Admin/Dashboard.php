<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    function index()
    {
        $this->data['pageTitle'] = 'Dashboard Pages';
        return view('admin/dashboard/index', $this->data);
    }
}

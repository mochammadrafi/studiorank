<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestManagementController extends Controller
{
    public function __construct()
    {
        $this->view = 'company.';
    }

    public function index()
    {
        return view($this->view . 'test.index');
    }

    public function create()
    {
        return view($this->view . 'test.create');
    }
}

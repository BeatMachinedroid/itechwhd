<?php

namespace App\Http\Controllers\option;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RequestTypeCate;
use App\Models\RequestType;
use App\Models\RequestTypeLocal;
use DB;

class OptionController extends Controller
{
    $subcategory = RequestTypeCate::with('requesttype')->get();
}

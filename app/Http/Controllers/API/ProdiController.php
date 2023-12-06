<?php

namespace App\Http\Controllers\API;

use App\Models\Prodi;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;

class ProdiController extends BaseController
{
    public function index(){
        $prodis = Prodi::all();
        $success['data'] = $prodis;
        return $this->sendResponse($success,'Data prodi.');
    }
}

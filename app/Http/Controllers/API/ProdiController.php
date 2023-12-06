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
    public function store(Request $request){
        $validasi = $request->validate([
            'nama' => 'required|min:5|max:20',
            'foto' => 'required|file|image|max:5000'
        ]);
    }
}

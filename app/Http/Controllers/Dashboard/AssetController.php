<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Assets;

class AssetController extends Controller
{
    public function view()
    {
        if (Auth::check()) {
            $asset = Assets::paginate(5);
            return view('Asset',['assets'=>$asset]);
        }else{
            return view('layout.login');
        }
    }

    public function viewadd()
    {
        if (Auth::check()) {
            return view('Assetaddrequest');
        }else{
            return view('layout.login');
        }
    }

    public function addasset(Request $request)
    {
        $request->validate([
            'serial' => 'required',
            'type' => 'required',
            'model' => 'required',
            'location' => 'required',
        ]);

        $data = [
            'serial' => $request->serial,
            'type' => $request->type,
            'model' => $request->model,
            'location' => $request->location,
        ];

        if (Assets::create($data)) {
            return redirect()->route('aset')->with('message','data is saved');
        }
    }

    public function viewedit($id)
    {
        if (Auth::check()) {
            $asset = Assets::find($id);
            return view('Asseteditrequest',['assets'=>$asset]);
        }else{
            return view('layout.login');
        }
    }

    public function update(Request $request)
    {
        $asset = Assets::find($request->id);
        $asset->update([
            'type' => $request->type,
            'model' => $request->model,
            'serial' => $request->serial,
            'location' => $request->location,
        ]);

        return redirect()
        ->route('aset')
        ->with(['message' => 'Data is updated successfully']);
    }

    public function deleteasset($id)
    {
        $asset = Assets::find($id);
        $asset->delete();
        return redirect()->route('aset')->with('message','data is deleted');
    }
}

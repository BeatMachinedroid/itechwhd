<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Assets;

class AssetController extends Controller
{
    public function view()
    {
        if (Auth::check()) {
            $asset = Assets::orderBy('created_at', 'desc')->paginate(5);
            return view('Asset',['assets'=>$asset]);
        }else{
            return view('layout.login');
        }
    }

    public function viewDetail($id)
    {
        if (Auth::check()) {
            $asset = Assets::find(decrypt($id));
            return view('detailass', compact('asset'));
        } else {
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
            'jumlah' => 'required',
            'files' => 'required|mimes:png,jpg,jpeg,png,jfif|max:10240',
        ]);

        if ($request->has('files')) {
            $file = $request->file('files');
            $extension = $file->getClientOriginalExtension();
            $originalName = $file->getClientOriginalName();
            $file->storeAs('public/Assets/', $originalName);
        }

        $asset = new Assets;
        $asset->serial = $request->serial;
        $asset->type = $request->type;
        $asset->model = $request->model;
        $asset->location = $request->location;
        $asset->status = $request->status;
        $asset->area = $request->area;
        $asset->jumlah = $request->jumlah;
        $asset->file = $originalName;
        $asset->save();

        return redirect()->route('aset')->with('message','data is saved');
    }

    public function viewedit($id)
    {
        if (Auth::check()) {
            $asset = Assets::find(decrypt($id));
            return view('Asseteditrequest',['assets'=>$asset]);
        }else{
            return view('layout.login');
        }
    }

    public function update(Request $request)
    {
        $asset = Assets::find($request->id);
        $request->validate([
            'serial' => 'required',
            'type' => 'required',
            'model' => 'required',
            'location' => 'required',
            'status' => 'required',
            'jumlah' => 'required',
            'area' => 'required',
        ]);

        // if ($request->has('files')) {
        //     $file = $request->file('files');
        //     $extension = $file->getClientOriginalExtension();
        //     $originalName = $file->getClientOriginalName();
        //     $file->storeAs('public/Assets/', $originalName);
        // }

        $asset->serial = $request->serial;
        $asset->type = $request->type;
        $asset->model = $request->model;
        $asset->location = $request->location;
        $asset->status = $request->status;
        $asset->area = $request->area;
        $asset->jumlah = $request->jumlah;
        // $asset->file = $originalName;
        $asset->save();

        return redirect()
        ->route('aset')
        ->with(['message' => 'Data is updated successfully']);
    }

    public function deleteasset($id)
    {
        $asset = Assets::find(decrypt($id));
        Storage::disk('local')->delete('public/Assets/'.$asset['file']);
        $asset->delete();
        return redirect()->route('aset')->with('message','data is deleted');
    }

    public function statusup(Request $request)
    {
        $asset = Assets::find($request->id);

        $asset->location = $request->location;
        $asset->area = $request->area;
        $asset->status = 'UNAVAILABLE';
        $asset->save();

        return redirect()
        ->back()
        ->with(['message' => 'Data is updated successfully']);
    }
}

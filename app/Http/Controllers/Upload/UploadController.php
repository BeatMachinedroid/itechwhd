<?php

namespace App\Http\Controllers\Upload;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\File;
use App\Models\Ticket;


class UploadController extends Controller
{
    public function view()
    {
        $file = File::paginate(5);
        return view('upload',compact('file'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'files' => 'required|mimes:png,jpg,pdf,jpeg,png,doc,docx,xlsx,xls,txt|max:10240'
        ]);

        if ($request->has('files')) {
            $file = $request->file('files');
            $extension = $file->getClientOriginalExtension();
            $originalName = $file->getClientOriginalName();
            $file->storeAs('public/uploads/', $originalName);
        }

        $files = new File;
        $files->users = $request->users;
        $files->files = $originalName;
        $files->save();

        return back()->with('message','File uploaded successfully');
    }

    public function download($id)
    {
        $file = File::find($id);
        $download = Storage::disk('local')->download('public/uploads/'.$file['files']);
        return $download;
    }

    public function delete($id)
    {
        $file = File::find($id);
        Storage::disk('local')->delete('public/uploads/'.$file['files']);
        $file->delete();
        return back();
    }

    public function excel()
    {
        $ticket = Ticket::all();
        return view('email.excel', compact('ticket'));
    }
}

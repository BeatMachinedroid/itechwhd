<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Assets;
use App\Models\Faqs;
use App\Models\User;
use App\Models\File;

class SearchController extends Controller
{
    public function SearchHistory(Request $request)
    {
        $number = $request->input('number');
        $status = $request->input('status');
        $contains = $request->input('contains');


        if(empty($number) && !empty($status) && empty($contains)){
            $ticket = Ticket::where('status', 'like', '%' . $status . '%')->orderBy('created_at', 'desc')->paginate(5);
        }
        if(!empty($number) && !empty($status) && !empty($contains)){
            $ticket = Ticket::where('status', 'like', '%' . $status . '%')
            ->where('area', 'like', $contains . '%')
            ->where('area', 'like', $contains . '%')->orderBy('created_at', 'desc')->paginate(5);
        }

        if(empty($status) && empty($contains) && !empty($number)){
            $ticket = Ticket::where('id', $number)->orderBy('created_at', 'desc')->paginate(5);
        }

        if(!empty($contains) && empty($number) && empty($status)){
            $ticket = Ticket::where('area', 'like', $contains . '%')->orderBy('created_at', 'desc')->paginate(5);
        }

        if(empty($number) && $status == 'all' && empty($contains)){
            $ticket = Ticket::orderBy('created_at', 'desc')->paginate(5);
        }
        if(empty($number) && empty($status) && empty($contains)){
            $ticket = Ticket::orderBy('created_at', 'desc')->paginate(5);
        }

        return view('history', compact('ticket'));
    }

    public function SearchAsset(Request $request)
    {
        $contains = $request->input('contains');

        // if($request->contains !== null && $request->status == null){
        //     $assets = Assets::where('serial','like', $request->contains . '%')->orderBy('created_at', 'desc')->paginate(5);
        // }
        // if($request->contains !== null && $request->status == null){
        //     $assets = Assets::where('model','like', $request->contains. '%')->orderBy('created_at', 'desc')->paginate(5);
        // }
        if($request->contains !== null && $request->status == null){
            $assets = Assets::where('type','like', $request->contains. '%')->orWhere('model','like', $request->contains. '%')->orWhere('serial','like', $request->contains. '%')->orderBy('created_at', 'desc')->paginate(5);
        }
        if($request->contains == null && $request->status !== null){
            $assets = Assets::where('status','like', $request->status. '%')->orderBy('created_at', 'desc')->paginate(5);
        }
        if($request->contains == null && $request->status == null){
            $assets = Assets::orderBy('created_at', 'desc')->paginate(5);
        }

        return view('Asset', compact('assets'));

    }

    public function SearchFaqs(Request $request)
    {
        $cate = $request->input('cate');
        $contains = $request->input('contains');

        if(!empty($contains) && empty($cate)){
            $faqs = Faqs::where('judul', 'like', $contains . '%')->orWhere('solusi', 'like', $contains . '%')->orderBy('created_at', 'desc')->paginate(5);
        }
        if(!empty($contains) && !empty($cate)){
            $faqs = Faqs::where('kategori', 'like', $cate . '%')->where('judul', 'like', $contains . '%')->orderBy('created_at', 'desc')->paginate(5);
        }
        if(empty($contains) && !empty($cate)){
            $faqs = Faqs::where('kategori', 'like', $cate . '%')->orderBy('created_at', 'desc')->paginate(5);
        }
        if(empty($contains) && empty($cate)){
            $faqs = Faqs::orderBy('created_at', 'desc')->paginate(5);
        }
            return view('faq', compact('faqs'));
    }

    public function SearchPegawai(Request $request)
    {
        $username = $request->input('username');
        $email = $request->input('email');

        if(!empty($username) && !empty($email)){
            $user = User::where('username', 'like', $username . '%')->Where('email', 'like', $email . '%')->orderBy('created_at', 'desc')->paginate(5);
        }
        if(!empty($username) && empty($email)){
            $user = User::where('username', 'like', $username . '%')->orderBy('created_at', 'desc')->paginate(5);
        }
        if(empty($username) && !empty($email)){
            $user = User::where('email', 'like', $email . '%')->orderBy('created_at', 'desc')->paginate(5);
        }
        if(empty($username) && empty($email)){
            $user = User::orderBy('created_at', 'desc')->paginate(5);
        }

        return view('pegawai' , compact('user'));
    }

    public function SearchUpload(Request $request)
    {
        $contains = $request->input('contains');
        if(!empty($contains)){
            $file = File::where('files', 'like', $contains . '%')->orderBy('created_at', 'desc')->paginate(5);
        }
        if(empty($contains)){
            $file = File::orderBy('created_at', 'desc')->paginate(5);
        }
        return view('upload' , compact('file'));
    }
}

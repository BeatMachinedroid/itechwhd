<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Faqs;

class FaqController extends Controller
{
    public function view()
    {
        if (Auth::check()) {
            $faq = Faqs::paginate(5);
            return view('faq',['faqs' => $faq]);
        }else{
            return view('layout.login');
        }
    }

    public function viewadd()
    {
        if (Auth::check()) {
            return view('faqadd');
        }else{
            return view('layout.login');
        }
    }

    public function viewedit($id)
    {
        if (Auth::check()) {
            $faq = Faqs::find($id);
            return view('editfaq', ['faqs' => $faq]);
        } else {
            return view('layout.login');
        }
    }

    public function add(Request $request)
    {
        $request->validate(
            [
                'kategori' =>'required',
                'judul' =>'required',
                'solusi' =>'required',
            ]
        );

        $data= [
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'solusi' => $request->solusi,
        ];

        if (Faqs::create($data)) {
            return redirect()->route('faq');
        }

    }

    public function edit(Request $request)
    {
            $faq = Faqs::find($request->id);
            $faq->update([
                'judul' => $request->judul,
                'kategori' => $request->kategori,
                'solusi' => $request->solusi,
            ]);

        return redirect()
        ->route('history')
        ->with(['success' => 'Data Berhasil Diupdate!']);
    }

    public function delete($id)
    {
        $faq = Faqs::find($id);
        $faq->delete();
        return redirect()->route('faq');
    }


}

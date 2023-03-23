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
            $faqs = Faqs::paginate(5);
            return view('faq', compact('faqs'));
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
            $faq = Faqs::find(decrypt($id));
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
            return redirect()->route('faq')->with('message','Data is saved successfully');
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
        ->route('faq')
        ->with('message','Data is edited successfully');
    }

    public function delete($id)
    {
        $faq = Faqs::find(decrypt($id));
        $faq->delete();
        return redirect()->route('faq');
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function sambutan()
    {
        return view('profil/sambutan');
    }

    public function ringkasan()
    {
        return view('profil/ringkasan');
    }

    public function vmts()
    {
        return view('profil/vmts');
    }

    public function staff()
    {
        return view('staff/staff');
    }

    public function sekretaris()
    {
        return view('syarat kepengurusan/sekretaris');
    }

    public function sKebersihan()
    {
        return view('syarat kepengurusan/s_kebersihan');
    }

    public function sPemerintahan()
    {
        return view('syarat kepengurusan/s_pemerintahan');
    }

    public function sPerekonomian()
    {
        return view('syarat kepengurusan/s_perekonomian');
    }

    public function kontak()
    {
        return view('kontak/kontak');
    }

    public function pkk()
    {
        return view('ekstra/pkk');
    }

    public function lurah()
    {
        return view('ekstra/lurah');
    }

    public function kepengurusanberkas()
    {
        return view('kepengurusanberkas');
    }
}

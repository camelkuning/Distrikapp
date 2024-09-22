<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Beranda;
use App\Models\GambarBeranda;
use Illuminate\Validation\ValidationException;


class BerandaController extends Controller
{
    public function viewberanda()
    {
        return view('admin.beranda.viewberanda');
    }

    public function uploadberanda(Request $request)
    {
        //Start uploadberanda
        try {
            $request->validate([
                'judul_beranda' => 'required',
                'deskripsi_beranda' => 'required',
                'file' => 'required',
            ]);
        } catch (ValidationException $e) {
            return redirect()->route('admin.dashboard')->with('toast_error', $e->getMessage())->withErrors($e->validator->errors());
        }
        $beranda = new Beranda();
        $beranda->judul_beranda = $request->judul_beranda;
        $beranda->deskripsi_beranda = $request->deskripsi_beranda;
        $beranda->save();

        if ($request->hasFile('file')) {
            foreach ($request->file('file') as $file) {
                $timestamp = now()->format('YmdHis');
                $filename = $timestamp . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('images/beranda', $filename );

                $gambarBeranda = new GambarBeranda();
                $gambarBeranda->id_beranda = $beranda->id;
                $gambarBeranda->gambar = $path;
                $gambarBeranda->save();
            }
        }
        return redirect()->route('admin.dashboard')->with('toast_success', 'Beranda berhasil ditambahkan.');
    }
}

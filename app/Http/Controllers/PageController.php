<?php

namespace App\Http\Controllers;
// namespace App\public\PHP_Email_Form;
// use PHP_Email_Form;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('index')->with('current_page', 'index');
    }
    
    public function profil() {
        return view('profil')->with('current_page', 'profil');
    }

    public function berita() {
        return view('berita')->with('current_page', 'berita');
    }

    public function galeri() {
        return view('galeri')->with('current_page', 'galeri');
    }

    public function kontak() {
        return view('kontak')->with('current_page', 'kontak');
    }

    public function strukturOrganisasi() {
        return view('strukturorganisasi')->with('current_page', 'profil');
    }

    public function visiMisi() {
        return view('visimisi')->with('current_page', 'profil');
    }

    public function profilKepalaDaerah() {
        return view('profilkepaladaerah')->with('current_page', 'profil');
    }

    public function detailBerita() {
        return view('detailberita')->with('current_page', 'profil');
    }
}

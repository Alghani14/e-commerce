<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index() {
        $data['nama'] = "Muhammad Alghani";
        $data['jk'] = "Laki Laki";
        return view('view-belajar', $data);
    }

    public function create() {
        return view('produk.form');
    }

    public function store(Request $request) {
        $rules = [
            'kategori_produk' => 'required',
            'harga_produk' => 'required|numeric|min:1000',
            'nama_produk' => 'required|string|max:30',
            'stok' => 'required'
        ];
        $validatedData = $request->validate($rules);

        return view('produk.show', ['product' => $validatedData]);
    }
}


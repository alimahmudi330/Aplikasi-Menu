<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index()
    {
        $menu = Menu::all();
        return view('index', compact('menu'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_menu' => 'required|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'diskripsi' => 'required|max:255',
            'kategori' => 'required|max:255',
            'status' => 'required|max:255',
            'harga' => 'required|numeric',
        ]);

        $imagePath = null;
        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('public/fotomenu');
        }

        Menu::create([
            'nama_menu' => $request->input('nama_menu'),
            'gambar' => $imagePath,
            'diskripsi' => $request->input('diskripsi'),
            'kategori' => $request->input('kategori'),
            'status' => $request->input('status'),
            'harga' => $request->input('harga'),
        ]);

        return redirect()->route('menu.index')->with('success', 'Menu berhasil ditambahkan.');
    }

    public function edit($id_menu)
    {
        $menu = Menu::find($id_menu);
        if (!$menu) {
            return redirect()->route('menu.index')->with('error', 'Data menu tidak ditemukan.');
        }
        return view('edit', compact('menu'));
    }

    public function update(Request $request, $id_menu)
    {
        $request->validate([
            'nama_menu' => 'required|max:255',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'diskripsi' => 'required|max:255',
            'kategori' => 'required|max:255',
            'status' => 'required|max:255',
            'harga' => 'required|numeric',
        ]);

        $menu = Menu::find($id_menu);
        if (!$menu) {
            return redirect()->route('menu.index')->with('error', 'Data Menu tidak ditemukan.');
        }

        $menu->nama_menu = $request->input('nama_menu');
        $menu->diskripsi = $request->input('diskripsi');
        $menu->kategori = $request->input('kategori');
        $menu->status = $request->input('status');
        $menu->harga = $request->input('harga');

        if ($request->hasFile('gambar')) {
            if ($menu->gambar && Storage::exists($menu->gambar)) {
                Storage::delete($menu->gambar);
            }
            $imagePath = $request->file('gambar')->store('public/fotomenu');
            $menu->gambar = $imagePath;
        }

        $menu->save();

        return redirect()->route('menu.index')->with('success', 'Data Menu berhasil diperbarui.');
    }

    public function destroy($id_menu)
    {
        $menu = Menu::find($id_menu);

        if ($menu) {
            if ($menu->gambar) {
                if (Storage::exists($menu->gambar)) {
                    Storage::delete($menu->gambar);
                }
            }

            $menu->delete();

            return redirect()->route('menu.index')->with('success', 'Data menu berhasil dihapus.');
        } else {
            return redirect()->route('menu.index')->with('error', 'Data menu tidak ditemukan.');
        }
    }
}

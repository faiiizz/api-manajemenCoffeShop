<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;


class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $menu = Menu::all();
        return response()->json($menu);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'nama_menu' => 'required',
            'harga' => 'required',
            'image' => 'required',
            'detail' => 'required',
        ]);

        $menu = new Menu();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $allowedfileExtension = ['jpg', 'png', 'jpeg'];
            $extension = $image->getClientOriginalExtension();
            $check = in_array($extension, $allowedfileExtension);
            if ($check) {
                $name = time() . '.' . $image->getClientOriginalName();
                $image->move('images', $name);
                $menu->image = $name;
            }
        }

        $menu->nama_produk = $request->nama_menu;
        $menu->harga = $request->harga;
        $menu->detail = $request->detail;
        $menu->save();

        return response()->json([
            'success' => true,
            'message' => 'Data Produk Berhasil Ditambahkan',
            'data' => $menu
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PictureRequest;
use App\Http\Requests\Admin\StaffRequestPicture;
use App\Models\StaffPictures;
use App\Models\Staffs;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StaffAdminPictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = StaffPictures::with(['staff'])->get();

        return view('pages.admin.staffpicture.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $staffs = Staffs::all();

        return view('pages.admin.staffpicture.create', [
            'staffs' => $staffs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/gallery', 'public'
        );

        StaffPictures::create($data);
        return redirect()->route('staffpicture.index')->with('status', 'Gambar gallery berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = StaffPictures::findOrFail($id);
        $galleries = Staffs::all();

        return view('pages.admin.staffpicture.edit', [
            'item' => $item,
            'galleries' => $galleries
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/gallery', 'public'
        );

        $item = StaffPictures::findOrFail($id);

        $item->update($data);

        return redirect()->route('staffpicture.index')->with('status', 'Gambar gallery berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = StaffPictures::findOrFail($id);
        $item->delete();

        return redirect()->route('staffpicture.index')->with('status', 'Gambar gallery berhasil dihapus');
    }
}

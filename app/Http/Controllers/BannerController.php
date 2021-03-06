<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::orderBy('id', 'DESC')->get();
        return view('backend.banners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.banners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreBannerRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreBannerRequest $request)
    {
       Banner::create($request->all());

        return redirect()->route('banners.index')->with('success', 'Successfully created banner');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Banner $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Banner $banner
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        return view('backend.banners.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateBannerRequest $request
     * @param \App\Models\Banner $banner
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateBannerRequest $request, Banner $banner)
    {
        $banner->fill($request->all())->save();

        return redirect()->route('banners.index')->with('success', 'Successfully updated banner');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Banner $banner
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();
        return redirect()->route('banners.index')->with('success', 'Successfully delete banner');
    }
}

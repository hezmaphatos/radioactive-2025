<?php

namespace App\Http\Controllers;

use App\Models\MerchLink;
use App\Http\Requests\StoreMerchLinkRequest;
use App\Http\Requests\UpdateMerchLinkRequest;
use App\Models\Merch;
use Illuminate\Http\Request;

class MerchLinkController extends Controller
{
    public function addLink(Merch $merch)
    {
        return view('Merch.Admin.addlink', ['merch' => $merch]);
    }

    public function storeLink(Request $request, Merch $merch)
    {
        $validData = $request->validate([
            'type' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'link' => 'required|url|max:255',
        ]);

        $validData['merch_id'] = $merch->id;

        MerchLink::create($validData);

        return redirect('/merch/admin/' . $merch->id . '/addlink')->with('success', 'Merch Link Added');
    }

    public function updateLink(Request $request, MerchLink $link)
    {
        $validData = $request->validate([
            'type' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'link' => 'required|url|max:255',
        ]);

        $link->update($validData);

        return redirect('/merch/admin/' . $link->merch_id . '/edit')->with('success', 'Merch Link Updated');
    }

    public function deleteLink(MerchLink $link)
    {
        $merch_id = $link->merch_id;
        $link->delete();

        return redirect('/merch/admin/' . $merch_id . '/edit')->with('success', 'Merch Link Removed');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMerchLinkRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MerchLink $merchLink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MerchLink $merchLink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMerchLinkRequest $request, MerchLink $merchLink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MerchLink $merchLink)
    {
        //
    }
}

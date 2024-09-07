<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Merch;
use App\Models\MerchImage;
use App\Models\MerchVariation;
use App\Models\MerchLink;
use Illuminate\Http\Request;

class DashboardMerchController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        $merches = Merch::latest();
        
        if ($request->has('search')) {
            $search = $request->input('search');
            
            $merches->where(function($query) use ($search) {
                $query->where('id', 'like', '%' . $search . '%')
                      ->orWhere('name', 'like', '%' . $search . '%')
                      ->orWhere('description', 'like', '%' . $search . '%')
                      ->orWhere('image', 'like', '%' . $search . '%')
                      ->orWhere('price', 'like', '%' . $search . '%')
                      ->orWhere('stock', 'like', '%' . $search . '%');
            });
        }

        $merches = $merches->paginate(5)->withQueryString();

        return view('Dashboard.Merch.index', [
            'merches' => $merches
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.Merch.create', [
            'merches' => Merch::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|file|max:10240',
            'price' => 'required',
            'stock' => 'required',
        ]);
    
        if ($request->file('image')) {
            $validData['image'] = $request->file('image')->storePublicly('merch_images', 'public');
        }
    
        Merch::create($validData);
    
        return redirect('/dashboard/merches')->with('success', 'Merch Baru Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Merch $merch)
    // {
    //     //
    //     return view('Merch.Admin.edit', ['merch' => $merch]);
    // }
    public function edit(Merch $merch)
    {
        return view('Dashboard.Merch.edit', [
            'merch' => $merch,
            'merchs' => Merch::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Merch $merch)
    {
        $validData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validData['image'] = $request->file('image')->storePublicly('merch_images', 'public');
        }

        $merch->update($validData);

        return redirect('/dashboard/merches')->with('success', 'Merch Details has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    
    public function destroy(Merch $merch)
    {
        if ($merch->image) {
            Storage::delete($merch->image);
        }
        Merch::destroy($merch->id);

        return redirect('/dashboard/merches')->with('success', 'Merch has been deleted!');
    }

    public function addImage(Merch $merch)
    {
        return view('Dashboard.Merch.addimage', ['merch' => $merch]);
    }

    public function storeImage(Request $request, Merch $merch)
    {
        $validData = $request->validate([
            'description' => 'required',
            'image' => 'required|image|file|max:10240'
        ]);

        if ($request->file('image')) {
            $validData['image'] = $request->file('image')->storePublicly('merch_images', 'public');
        }

        $validData['merch_id'] = $merch->id;

        MerchImage::create($validData);

        return redirect('/dashboard/merches/' . $merch->id . '/addimage')->with('success', 'Merch Image Uploaded');
    }

    public function deleteImage(MerchImage $merchImage)
    {
        Storage::delete($merchImage->image);
        //ini belom bisa delete imagenya dari storage folder, gatau caranya gimana pls bantu
        $merch_id = $merchImage->merch_id;
        $merchImage->delete();
        return redirect('/dashboard/merches/' . $merch_id . '/edit')->with('success', 'Merch Image Removed');
    }

    public function addVariation(Merch $merch)
    {
        return view('Dashboard.Merch.addvariation', ['merch' => $merch]);
    }

    public function storeVariation(Request $request, Merch $merch){
        $validData = $request->validate([
            'description' => 'required',
            'stock' => 'required',
            'additional_price' => 'required'
        ]);

        $validData['merch_id'] = $merch->id;

        MerchVariation::create($validData);

        return redirect('/dashboard/merches/' . $merch->id . '/addvariation')->with('success', 'Merch Variant Added');
    }

    public function updateVariation(Request $request, MerchVariation $merchvariation){
        $validData = $request->validate([
            'description' => 'required',
            'additional_price' => 'required',
            'stock' => 'required',
        ]);

        $merchvariation->update($validData);

        return redirect('/dashboard/merches/' . $merchvariation->merch_id . '/edit')->with('success', 'Merch Variation Updated');
    }

    public function deleteVariation(MerchVariation $merchvariation){
        $merch_id = $merchvariation->merch_id;
        $merchvariation->delete();
        return redirect('/dashboard/merches/' . $merch_id . '/edit')->with('success', 'Merch Variation Removed');
    }

    public function addLink(Merch $merch)
    {
        return view('Dashboard.Merch.addlink', ['merch' => $merch]);
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

        return redirect('/dashboard/merches/' . $merch->id . '/addlink')->with('success', 'Merch Link Added');
    }

    public function updateLink(Request $request, $linkId)
    {   
        $link = MerchLink::where('id', $linkId)->first();
        // dd($link);
        $validData = $request->validate([
            'type' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'link' => 'required|url|max:255',
        ]);

        $link->update($validData);

        return redirect('/dashboard/merches/' . $link->merch_id . '/edit')->with('success', 'Merch Link Updated');
    }

    public function deleteLink($linkId)
    {   
        $link = MerchLink::where('id', $linkId)->first();
        // dd($link);
        $merch_id = $link->merch_id;
        $link->delete();

        return redirect('/dashboard/merches/' . $merch_id . '/edit')->with('success', 'Merch Link Removed');
    }
}

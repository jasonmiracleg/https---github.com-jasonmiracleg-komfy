<?php

namespace App\Http\Controllers\Admin;

use App\Rules\SquareImage;
use App\Models\Partnership;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PartnershipController extends Controller
{
    public function index()
    {
        return view(
            'Partnerships.index',
            ['partnerships' => Partnership::all()]
        );
    }
    public function create()
    {
        return view(
            'Partnerships.create'
        );
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'partnership_name' => 'required',
            'description' => 'required',
            'url' => 'url',
            'partnership_picture' => ['image', new SquareImage]
        ]);
        $partnershipPicture = $request->file('partnership_picture');
        $imageName = time() . '_' . $partnershipPicture->getClientOriginalName();
        $partnershipPicture->move(public_path("images"), $imageName);
        Partnership::create([
            'partnership_name' => $validatedData['partnership_name'],
            'description' => $validatedData['description'],
            'url' => optional($validatedData)['url'],
            'phone_number' => optional($validatedData)['phone_number'],
            'partnership_picture' => $imageName
        ]);
        return redirect()->route('partnership.index');
    }

    public function edit(Partnership $partnership)
    {
        $partnershipEdit = Partnership::where('id', $partnership->id)->first();
        return view('Partnerships.edit', compact('partnershipEdit'));
    }

    public function update(Request $request, Partnership $partnership)
    {
        $validatedData = $request->validate([
            'partnership_name' => 'required',
            'description' => 'required',
            'url' => 'url',
            'phone_number' => 'required| max:13'
        ]);
        if ($request->hasFile('partnership_picture')) {
            // Delete the existing partnership picture if it exists
            if ($partnership->partnership_picture) {
                Storage::disk('public')->delete($partnership->partnership_picture);
            }

            // Move the new partnership picture to the public/images directory
            $partnershipPicture = $request->file('partnership_picture');
            $imageName = time() . '_' . $partnershipPicture->getClientOriginalName();
            $partnershipPicture->move(public_path("images"), $imageName);

            $validatedData['partnership_picture'] = $imageName;
            $partnership->update(['partnership_picture' => $validatedData['partnership_picture']]);
        }

        $partnership->update([
            'partnership_name' => $validatedData['partnership_name'],
            'description' => $validatedData['description'],
            'url' => optional($validatedData)['url'],
            'phone_number' => $validatedData['phone_number'],
        ]);

        return redirect()->route('partnership.index');
    }

    public function destroy(Partnership $partnership)
    {
        if ($partnership->partnership_picture) {
            if (Storage::disk('public')->exists($partnership->partnership_picture)) {
                Storage::disk('public')->delete($partnership->partnership_picture);
            }
        }
        $partnership->delete();
        return redirect()->route('partnership.index');
    }
}

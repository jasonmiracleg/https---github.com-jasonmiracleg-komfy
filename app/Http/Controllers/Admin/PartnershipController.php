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
            'phone_number' => 'required| max:13',
            'partnership_picture' => ['image', new SquareImage]
        ]);
        $validatedData['partnership_picture'] = $request->file('partnership_picture')->store('images', ['disk' => 'public']);

        Partnership::create([
            'partnership_name' => $validatedData['partnership_name'],
            'description' => $validatedData['description'],
            'url' => optional($validatedData)['url'],
            'phone_number' => $validatedData['phone_number'],
            'partnership_picture' => $validatedData['partnership_picture']
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
        if ($request->partnership_picture) {
            $validatedData = $request->validate([
                'partnership_picture' => ['image', new SquareImage]
            ]);
            if ($partnership->partnership_picture) {
                Storage::disk('public')->delete($partnership->partnership_picture);
            }
            $validatedData['partnership_picture'] = $request->file('partnership_picture')->store('images', ['disk' => 'public']);

            $partnership->update([
                'partnership_picture' => $validatedData['partnership_picture']
            ]);
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

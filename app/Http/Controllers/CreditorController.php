<?php

namespace App\Http\Controllers;

use App\Models\Creditor;
use Illuminate\Http\Request;

class CreditorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $creditors = Creditor::all();

        return view('creditors.index', [
            'creditors' => $creditors,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('creditors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|min:3|max:128',
            'observations' => 'max:255',
            'payment_method' => 'nullable|array',
            'payment_method.*' => 'nullable|array',
            'payment_method.*.method' => 'required|min:3|max:128',
            'payment_method.*.content' => 'required|min:3|max:128',
        ]);

        $creditor = Creditor::create([
            ...$data,
            'user_id' => auth()->user()->id,
        ]);

        if ($data['payment_method']) {
            $creditor->paymentMethods()->createMany($data['payment_method']);
        }

        return redirect()->route('creditors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Creditor $creditor)
    {
        return view('creditors.show', [
            'creditor' => $creditor,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
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

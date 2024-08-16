<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function index()
    {
        $newsletters = Newsletter::all();
        return view('newsletters.index', compact('newsletters'));
    }

    public function create()
    {
        return view('newsletters.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletters',
        ]);

        Newsletter::create($request->all());
        return redirect()->route('newsletters.index')->with('success', 'Subscription saved successfully.');
    }

    public function show($id)
    {
        $newsletter = Newsletter::findOrFail($id);
        return view('newsletters.show', compact('newsletter'));
    }

    public function edit($id)
    {
        $newsletter = Newsletter::findOrFail($id);
        return view('newsletters.edit', compact('newsletter'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletters,email,' . $id,
        ]);

        $newsletter = Newsletter::findOrFail($id);
        $newsletter->update($request->all());
        return redirect()->route('newsletters.index')->with('success', 'Subscription updated successfully.');
    }

    public function destroy($id)
    {
        $newsletter = Newsletter::findOrFail($id);
        $newsletter->delete();
        return redirect()->route('newsletters.index')->with('success', 'Subscription deleted successfully.');
    }
}

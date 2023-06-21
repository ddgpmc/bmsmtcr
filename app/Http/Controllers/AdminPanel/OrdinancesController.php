<?php

namespace App\Http\Controllers\AdminPanel;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ordinance;

class OrdinancesController extends Controller
{
    
    public function index()
    {
        
        $ordinances = Ordinance::all(); 
    
        return view('pages.AdminPanel.ordinances', compact('ordinances'));
    }

    public function create()
{
    return view('pages.AdminPanel.ordinances.create');
}


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            // Add any additional validation rules for your ordinance fields
        ]);

        $ordinance = new Ordinance;
        $ordinance->title = $validatedData['title'];
        $ordinance->description = $validatedData['description'];
        // Set any other fields of your ordinance model as per your requirements
        $ordinance->save();

        return redirect()->route('adminpanel.ordinances.index')->with('success', 'Ordinance created successfully');
    }

    public function destroy(Ordinance $ordinance)
    {
        $ordinance->delete();

        return redirect()->route('adminpanel.ordinances.index')->with('success', 'Ordinance deleted successfully');
    }

    public function edit(Ordinance $ordinance)
    {
        return view('pages.AdminPanel.ordinances.edit', compact('ordinance'));
    }
    public function update(Request $request, Ordinance $ordinance)
    {
        $ordinance->update($request->all());

        return redirect()->route('adminpanel.ordinances.index')->with('success', 'Ordinance updated successfully.');
    }

    public function residentOrdinances()
{
    $ordinances = Ordinance::all();

    return view('pages.ClientSide.userdashboard.ordinances', ['ordinances' => $ordinances]);
}


        
}    

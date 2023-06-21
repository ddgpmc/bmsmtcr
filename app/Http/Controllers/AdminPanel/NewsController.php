<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
    
        return view('pages.AdminPanel.news', compact('news'));
    }

    public function create()
    {
        return view('pages.AdminPanel.news.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $news = new News;
        $news->title = $validatedData['title'];
        $news->description = $validatedData['description'];
        // Set any other fields of your News model as per your requirements
        $news->save();

        return redirect()->route('adminpanel.news')->with('success', 'News created successfully');
    }

    public function edit(News $news)
    {
        return view('pages.AdminPanel.news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $news->title = $validatedData['title'];
        $news->description = $validatedData['description'];
        // Update any other fields of your News model as per your requirements
        $news->save();

        return redirect()->route('adminpanel.news')->with('success', 'News updated successfully');
    }

    public function destroy(News $news)
    {
        $news->delete();

        return redirect()->route('adminpanel.news')->with('success', 'News deleted successfully');
    }
    public function residentNews()
    {
        $news = News::all();

        return view('pages.ClientSide.userdashboard.news', compact('news'));
    }

}

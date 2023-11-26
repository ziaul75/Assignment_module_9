<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class PortfolioController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function projects()
    {
        $projects = Project::all();
        return view('projects', ['projects' => $projects]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function submitContact(Request $request)
    {
        // Implement form validation and submission logic here

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}

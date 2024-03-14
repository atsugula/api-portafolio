<?php

namespace App\Http\Controllers\V1;

use App\Models\Section;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Configuration;
use App\Models\Content;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = Section::with('contents')->where('public', '1')->get();

        $configuration = Configuration::first();

        return view('index', compact('sections', 'configuration'));
    }

    public function downloadCV()
    {
        $headers = [
            'Content-Type' => 'application/pdf',
        ];
        $file = public_path('CV_JORGE_USUGA.pdf');
        return response()->download($file, 'CV_JORGE_USUGA.pdf', $headers);
    }
}

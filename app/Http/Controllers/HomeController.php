<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{

    protected $request;

    public function __construct(Request $request)
    {
        //$this->middleware('auth');
        $this->request = $request;
    }

    public function index()
    {
        return view('home');
    }

    public function register()
    {
        $document_type = $this->request->get('document-type');
        $document = $this->request->get('document');

        return view('registro', ['tipo_documento' => $document_type, 'documento' => $document]);
    }
}

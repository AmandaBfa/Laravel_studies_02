<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showView(): View
    {
        // método 1
        // $data = [
        //     'name' => "Amanda Barbosa",
        //     'phone' => "123456789"
        // ];
        // return view('admin.newPage3', $data); <== melhor maneira
        // return view('admin.newPage3', [
        //     'name' => "Amanda Barbosa",
        //     'phone' => "123456789"
        // ]);

        // // método 2
        // return view('admin.newPage3', [
        //     'name' => "Amanda Barbosa",
        //     'phone' => "123456789"
        // ]);

        // // método 3
        // return view('admin.newPage3')
        //     ->with('name', "Amanda Barbarosa")
        //     ->with('phone', "62901011213");

        // método 4
        $name = 'Amanda Barbarosa';
        $phone = '62901011213';

        return view('admin.newPage3', compact('name', 'phone'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class NavbarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function link(string $id, string $name)
    {
        if(DB::connection()->getDatabaseName())
        {
            echo "conncted sucessfully to database ".DB::connection()->getDatabaseName();
        }
    }
    public function room()
    {
        $response = Http::get('http://203.151.166.132/dip_smartoffice_erp/service/getRoomList.php');
        if ($response->successful()) {
            $data = $response->json();
            // dd($data);
        } else {
            $statusCode = $response->status();
        }
        
        return view('bookingroom')->with('roomdata',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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

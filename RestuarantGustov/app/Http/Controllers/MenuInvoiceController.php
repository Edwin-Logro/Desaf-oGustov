<?php

namespace App\Http\Controllers;

use App\Models\MenuInvoice;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuInvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function create()
    {
        $menus = Menu::orderBy('id','desc')->get();
        return view('invoices.create', compact('menus'));
    }
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MenuInvoice  $menuInvoice
     * @return \Illuminate\Http\Response
     */
    public function show(MenuInvoice $menuInvoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MenuInvoice  $menuInvoice
     * @return \Illuminate\Http\Response
     */
    public function edit(MenuInvoice $menuInvoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MenuInvoice  $menuInvoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MenuInvoice $menuInvoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MenuInvoice  $menuInvoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(MenuInvoice $menuInvoice)
    {
        //
    }
}

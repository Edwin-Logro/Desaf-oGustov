<?php
namespace App\Http\Controllers;
use App\Models\Invoice;
use App\Models\Menu;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use DateTime;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $menus = Menu::orderBy('id','desc')->get();
        return view('invoices.index');
    }
    public function create()
    {
        $menus = Menu::orderBy('id','desc')->get();
        return view('invoices.create', compact('menus'));
    }
    public function store(Request $request)
    {  
        $code='Gustov';
        $date = new DateTime();
        $sum=0;
        $limit = count($request->id);
        for($i=0 ; $i < $limit; $i++){
            //$invoice->save();
            $menu = new Menu;
            $menu = $request->number[$i] * $request->price[$i];
            $sum = $sum+$menu;
            //register Invoices
            $invoice = new Invoice;
            $invoice->number = $request->number[$i];
            //$invoice->menus()->attach($request->id[$i]);
             $invoice->save();
           // $invoice->save();
        }
        
            $invoice->nit = $request->nit;
            $invoice->codeBill= 45678894+ $sum;
            $invoice->date = $date->format('Y-m-d');
            $invoice->number = $request->number;
            $invoice->total = $sum;
           // $invoice->save();
        return response()->json($invoice);
        
        //return redirect('/invoices');
    }
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}

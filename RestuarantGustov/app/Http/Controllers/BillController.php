<?php
namespace App\Http\Controllers;
use App\Models\Bill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use DateTime;
class BillController extends Controller
{
    public function index()
    {
        return view('bills.index');
    }
    public function create()
    {
    return view('bills.create');
    }
    public function show(Bill $bill)
    {
        return view('admin.sale.show', compat('sale'));  
    }
    public function edit(Bill $bill)
    {
        //
    }
    public function update(Request $request, Bill $bill)
    {
        //
    }
    public function destroy(Bill $bill)
    {
        //
    }
}

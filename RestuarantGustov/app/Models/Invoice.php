<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public function menus(){
        return $this->belongsToMany(Menu::class, 'menu_invoices');
    }
    public function customers(){
        return $this->hasMany(Customer::class, 'customers');
    }
}

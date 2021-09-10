<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public function menus(){
        return $this->belongsToMany(Menu::class, 'menu_invoices');
    }
    public function customer(){
        return $this->belongsTo('App\Models\Customer');
    }
    public static function calculateTotal($quantitys,$prices)
    {
        $total=0.0;
        for ($i=0 ; $i< count($quantitys); $i++) {
            if($quantitys[$i])
            {
                $total+=((float)$quantitys[$i]*(float)$prices[$i]);
            }
        }
        return $total;
    }
    public static function verifySale($quantitys)
    {
        $notmenus=false;
        for ($i=0 ; $i< count($quantitys); $i++) {
            if($quantitys[$i])
            {
                $notmenus=true;
            }
        }
        return $notmenus;
    }

}


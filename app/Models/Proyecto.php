<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    
    use HasFactory;
    /*protected $fillable = [
        'nombre_proyecto',
        'dec_proyecto',
        'monto_inversion', 
        'inst_inversion',
        'plazo',
        'pago_interes',
        'taf',
        'min_inversion',
        'comision_plataforma',
        'valor_garantia',
        'triae',
        'max_inversion',
        'fecha_finalizado',
        'fsc',
        'fotografias'
    ];*/

    protected $guarded = [];

    //convierte en url amigables con el campo slug desde la base de datos.
    public function getRouteKeyName()
    {
        return 'slug';
        
    }
}

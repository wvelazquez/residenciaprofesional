<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProyecto extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
       //Validacion de datos del formulario para poder utiliazar los mensajes de error
       return [
        'nombre_proyecto' => 'required',
        'desc_proyecto' => 'required',
        'monto_inversion' => 'required',
        'inst_inversion' => 'required',
        'plazo' => 'required',
        'pago_interes' => 'required',
        'taf' => 'required',
        'min_inversion' => 'required',
        'comision_plataforma' => 'required',
        'valor_garantia' => 'required',
        'triae' => 'required',
        'max_inversion' => 'required',
        'fecha_finalizado' => 'required',
        'fsc' => 'required'
    ];
    }
    public function attributes()
    {
        return[
            'nombre_proyecto' => 'este proyecto',
        ];
    }
}

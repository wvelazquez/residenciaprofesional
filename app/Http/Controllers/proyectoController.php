<?php

namespace App\Http\Controllers;
use App\Models\Proyecto;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProyecto; //importamos las reglas de validacion del request StoreProyectos
use Illuminate\Support\Str;

class proyectoController extends Controller
{
    public function index()
    {
        //Mandamos a llamar todo de la base de datos e importamos el modelo proyecto 
        //Con all() recuperas todos los registros
        //Con paginate recuperas por 15 para cada pagina para mas estetico
        $proyectos = Proyecto::orderBy('id', 'desc')->paginate(10);
        //retorna la vista creada para esto, y compact retorna proyecto como un array de datos para usar en la vista
        return view('proyectos.index', compact('proyectos'));
    }

    public function create()
    {
        return view('proyectos.create');
    }

    public function store(StoreProyecto $request)
    {
        //Guarda todo lo del formulario todo todo
        $request->merge(['slug' => Str::Slug($request->nombre_proyecto,'-')]);

        $proyecto = Proyecto::create($request->all());

        return redirect()->route('proyectos.show', $proyecto->slug);
    }

    public function show(Proyecto $proyecto)
    {
        
        //Compact envia la variable con el mismo nombre que la recibe la funcion
        return view('proyectos.show', compact('proyecto'));
    }

    //Recuperamos el registro desde la instancia de la clase en la declaracion de la funcion con proyecto $id, si retornamos
    //nos da automaticamente todos los datos del registro
    public function edit(Proyecto $proyecto)
    {
        //Compact devuelv el valor del modelo como variable 
        return view('proyectos.edit', compact('proyecto'));

    }

    public function update(Request $request, Proyecto $proyecto)
    {
        
        //Validacion de datos del formulario para poder utiliazar los mensajes de error
        $request->validate([
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
            'fsc' => 'required',
        ]);
        //End Validacicon de datos del formulario

        /*
        $proyecto->nombre_proyecto = $request->nombre_proyecto;
        $proyecto->desc_proyecto = $request->desc_proyecto;
        $proyecto->monto_inversion = $request->monto_inversion;
        $proyecto->inst_inversion = $request->inst_inversion;
        $proyecto->plazo = $request->plazo;
        $proyecto->pago_interes = $request->pago_interes;
        $proyecto->taf = $request->taf; //tasa anual fija
        $proyecto->min_inversion = $request->min_inversion;
        $proyecto->comision_plataforma =  $request->comision_plataforma;
        $proyecto->valor_garantia = $request->valor_garantia;
        $proyecto->triae = $request->triae;
        $proyecto->max_inversion = $request->max_inversion;
        $proyecto->fecha_finalizado = $request->fecha_finalizado;
        $proyecto->fsc = $request->fsc;
        if ($request->hasFile('fotografia')) {
            // Do something with the file
            $proyecto->fotogratias = $request->fotografia;
        }*/
        $proyecto->update($request->all());


        $proyecto->save();
        return redirect()->route('proyectos.show', $proyecto->id);

    }

    public function destroy(Proyecto $proyecto){
        $proyecto->delete();
        return redirect()->route('proyectos.index', $proyecto->id);
    }
}

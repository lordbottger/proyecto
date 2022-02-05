<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\v1\Usuario;
use Illuminate\Http\Request;



class UsuariosController extends Controller
{

	function getAll()
	{
		$response = new \stdClass();
		$response->success=true;

		$usuarios = Usuario::all();
		$response->data=$usuarios;

		return response()->json($response,200);
	}

	function getItem($id)
	{
		$response = new \stdClass();
		$response->success=true;

		$usuario = Usuario::find($id);
		$response->data = $usuario;

		return response()->json($response,200);
	}

	function store(Request $request)
	{
		$response = new \stdClass();
		$response->success=true;

		$usuario=Usuario::where("dni","=",$request->dni)
		->first();
		if($usuario)
		{
			$response->success=false;
			$response->errors=[];
			$response->errors[]="Ya existe un usuario con el código ".$request->dni;
			return response()->json($response,400);
		}

		$usuario = new Usuario();
		$usuario->dni = $request->dni;
		$usuario->email = $request->email;
        $usuario->password = $request->password;
		$usuario->nombre = $request->nombre;
        $usuario->direccion = $request->direccion;
		$usuario->telefono = $request->telefono;
		$usuario->save();

		$response->data=$usuario;

		return response()->json($response,201);
	}

	function update(Request $request)
	{
		$response = new \stdClass();
		$response->success=true;

		$usuario= Usuario::find($request->id);

		$usuario->dni = $request->dni;
		$usuario->email = $request->email;
        $usuario->password = $request->password;
		$usuario->nombre = $request->nombre;
        $usuario->direccion = $request->direccion;
		$usuario->telefono = $request->telefono;
		$usuario->save();

		$response->data = $usuario;

		return response()->json($usuario,200);
	}

	function patch(Request $request)
	{
		$response = new \stdClass();
		$response->success=true;

		$usuario= Usuario::find($request->id);

		if(isset($request->dni))
		$usuario->dni = $request->dni;

		if(isset($request->email))
		$usuario->email = $request->email;

        if(isset($request->password))
		$usuario->password = $request->password;

		if(isset($request->nombre))
		$usuario->nombre = $request->nombre;

        if(isset($request->direccion))
		$usuario->direccion = $request->direccion;

		if(isset($request->telefono))
		$usuario->telefono = $request->telefono;

		$usuario->save();

		$response->data = $usuario;

		return response()->json($usuario,200);
	}


	function delete($id)
	{
		$response = new \stdClass();
		$response->success=true;

		$response_code = new \stdClass();

		$usuario = Usuario::find($id);

		if($usuario)
		{
			$usuario->delete();
			$response_code=200;
		}
		else
		{
			$response->success=false;
			$response->errors = [];
			$response->errors[]="El elemento ya ha sido eliminado previamente";
			$response_code=400;
		}

		return response()->json($response,$response_code);
	}

}
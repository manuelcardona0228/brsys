<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends BaseAPIController
{
    
    public function index()
    {
        //   
    }

    public function store (Request $request)
    {
        $input = $request->all();
        $email = $request->input("email");
        $password = $request->input("password");
        $user = User::where('email', $email)->first();
        

        if($user != null)
        {
            if($user->type_user_id == 3 || $user->type_user_id == 4)
            {
                
                if (Hash::check($password, $user->password))
                {
                    return $this->sendResponse(
                        $user, ' Existe'
                    );
                    //return response()->json($user, 200);
                }else{
                    $datos = ['mensaje' => 'Contraseña Incorrecta', 'error' => true, 'id' => 406];
                    return response()->json($datos, 406);    
                }

                
            }else{
                if (Hash::check($password, $user->password))
                {
                    $datos = ['mensaje' => 'No tienes los derechos necesarios.', 'error' => true, 'id' => 403];
                    return response()->json($datos, 403);
                    //return response()->json($user, 200);
                }else{
                    $datos = ['mensaje' => 'Contraseña Incorrecta', 'error' => true, 'id' => 406];
                    return response()->json($datos, 406);    
                }
            }
        }else{
            $datos = ['mensaje' => 'No lo encontré', 'error' => true, 'id' => 404];
            return response()->json($datos, 404);
        }
    }

    public function show(User $user)
    {
        //
    }

    public function update(request $request, User $user)
    {
        //
    }

    public function destroy(User $user)
    {
        //
    }

}


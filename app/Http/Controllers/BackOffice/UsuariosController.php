<?php

namespace App\Http\Controllers\BackOffice;

use App\Models\User;
use App\Models\InfoUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{

    public function admins()
    {

        $users = User::with('info')->where('role', 'admin')->get();
        return view('backoffice.usuarios.admins', compact('users'));

    }

    public function usuarios()
    {
        $users = User::with('info')->where('role', null)->get();
        return view('backoffice.usuarios.usuarios', compact('users'));
    }

    public function adminCreate()
    {
        return view('backoffice.usuarios.create-admin');
    }

    public function adminStore(Request $request)
    {
        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'admin'
        ]);

        InfoUser::create([
            'user_id' => $user->id,
            'nome' => $request->nome,
            'apelido' => $request->apelido,
            'pais' => $request->pais,
            'codigo_pais' => $request->codigo_pais,
            'telemovel' => $request->telemovel,
            'morada' => $request->morada,
            'codigo_postal' => $request->codigo_postal,
            'localidade' => $request->localidade,
            'data_nascimento' => date("Y-m-d", strtotime($request->data_nascimento)),
            'nif' => $request->nif,
            'sms' => 'nao',
        ]);
        return redirect()->route('usuarios');
    }

    public function userCreate()
    {
        return view('backoffice.usuarios.create-user');
    }

    public function userStore(Request $request)
    {
        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        InfoUser::create([
            'user_id' => $user->id,
            'nome' => $request->nome,
            'apelido' => $request->apelido,
            'pais' => $request->pais,
            'codigo_pais' => $request->codigo_pais,
            'telemovel' => $request->telemovel,
            'morada' => $request->morada,
            'codigo_postal' => $request->codigo_postal,
            'localidade' => $request->localidade,
            'data_nascimento' => date("Y-m-d", strtotime($request->data_nascimento)),
            'nif' => $request->nif,
            'sms' => 'nao',
        ]);
        return redirect()->route('usuarios')->with('success', 'Pronto');
    }

    public function userShow($id)
    {
        $user = User::with('info')->find($id);

        return view('backoffice.usuarios.edit-admin', compact('user'));
    }

    public function userUpdate(Request $request, $id)
    {
        $user = User::find($id);
        $user->email = $request->email;
        $user->password = Hash::make($request->get('password'));
        $user->save();

        $user->info()->update([
            'user_id' => $user->id,
            'nome' => $request->nome,
            'apelido' => $request->apelido,
            'pais' => $request->pais,
            'codigo_pais' => $request->codigo_pais,
            'telemovel' => $request->telemovel,
            'morada' => $request->morada,
            'codigo_postal' => $request->codigo_postal,
            'localidade' => $request->localidade,
            'data_nascimento' => date("Y-m-d", strtotime($request->data_nascimento)),
            'nif' => $request->nif,
            'sms' => 'nao',
        ]);

        return redirect()->route('usuarios')->with('success', 'Pronto');
    }

    public function destroy(Request $request)
    {
        $user = User::with('info')->find($request->id);
        $user->delete();
        return response()->json();
    }

}

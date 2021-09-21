<?php

namespace App\Http\Controllers\Site;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\InfoUser;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.login.index');
    }

    public function store(Request $request)
    {
        request()->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ],
        [
            'email.required' => 'Você precisa colocar um email!',
            'email.email' => 'Você precisa colocar um email válido!',
            'email.unique' => 'Email está cadastrado, você pode recuperar a senha',
            'password.required' => 'Você precisa colocar uma senha!',
            'password.min' => 'Coloque no minimo 6 caracateres',
        ]);

        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        return view('site.login.registo', compact('user'));
    }


    // public function create(Request $request)
    // {

    //     return view('site.login.registo', compact('user2'));
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function infoStore(Request $request)
    {

        request()->validate([
            'nome' => 'required',
            'apelido' => 'required',
            'pais' => 'required',
            'codigo_pais' => 'required',
            'telemovel' => 'required',
            'morada' => 'required',
            'codigo_postal' => 'required',
            'localidade' => 'required',
            'data_nascimento' => 'required',
            'nif' => 'required',
            'sms' => 'required',
        ],
        [
            'nome.required' => 'Você precisa colocar um nome!',
            'apelido.required' => 'Você precisa colocar um apelido!',
            'pais.required' => 'Você precisa colocar um país!',
            'codigo_pais.required' => 'Você precisa colocar um código país!',
            'telemovel.required' => 'Você precisa colocar um telemóvel!',
            'morada.required' => 'Você precisa colocar um morada!',
            'codigo_postal.required' => 'Você precisa colocar um cógido postal!',
            'localidade.required' => 'Você precisa colocar um localidade!',
            'data_nascimento.required' => 'Você precisa colocar um data de nascimento!',
            'nif.required' => 'Você precisa colocar um nif!',
            'sms.required' => 'Você precisa colocar um sms!',

        ]);

        InfoUser::create([
            'user_id' => $request->user_id,
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
            'sms' => $request->sms,
        ]);

        return redirect()->route('site.home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

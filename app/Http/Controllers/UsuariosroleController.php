<?php

namespace App\Http\Controllers;

use App\Usuariosrole;
use App\User;
use App\Role;
use Illuminate\Http\Request;

/**
 * Class UsuariosroleController
 * @package App\Http\Controllers
 */
class UsuariosroleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuariosroles = Usuariosrole::paginate();

        return view('usuariosrole.index', compact('usuariosroles'))
            ->with('i', (request()->input('page', 1) - 1) * $usuariosroles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuariosrole = new Usuariosrole();
        $users = User::pluck('name', 'id');
        $roles = Role::pluck('rol', 'id');
        return view('usuariosrole.create', compact('usuariosrole','users', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Usuariosrole::$rules);

        $usuariosrole = Usuariosrole::create($request->all());

        return redirect()->route('usuariosroles.index')
            ->with('success', 'Usuariosrole created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuariosrole = Usuariosrole::find($id);

        return view('usuariosrole.show', compact('usuariosrole',));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuariosrole = Usuariosrole::find($id);
        $users = User::pluck('name', 'id');
        $roles = Role::pluck('rol', 'id');
        return view('usuariosrole.edit', compact('usuariosrole', 'users', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Usuariosrole $usuariosrole
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuariosrole $usuariosrole)
    {
        request()->validate(Usuariosrole::$rules);

        $usuariosrole->update($request->all());

        return redirect()->route('usuariosroles.index')
            ->with('success', 'Usuariosrole updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $usuariosrole = Usuariosrole::find($id)->delete();

        return redirect()->route('usuariosroles.index')
            ->with('success', 'Usuariosrole deleted successfully');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateUserRequest;
use App\Http\Requests\Admin\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends MainController
{

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $users = User::paginate(5);

        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        $roleList = Role::all();
        return view('admin.user.create', compact('roleList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateUserRequest $request
     * @return RedirectResponse
     */
    public function store(CreateUserRequest $request)
    {
        $dataToStore = $request->input();


        $dataToStore['password'] = Hash::make($request->password);

        $dataToStore['role_id']=$request->role_id;
        User::create($dataToStore);


        return redirect()->route('users.index')->with('success', 'Пользователь успешно добавлен');
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return Application|Factory|View|Response
     */
    public function show(User $user)
    {
        return view('admin.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return Application|Factory|View|Response
     */
    public function edit(User $user)
    {
        $roleList = Role::all();
        return view('admin.user.edit', compact('user', 'roleList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateUserRequest $request
     * @param User $user
     * @return RedirectResponse
     */
    public function update(UpdateUserRequest $request, User $user)
    {

        $dataToUpdate = $request->validated();

        $user->update($dataToUpdate);

        return redirect()->route('users.index')
            ->with('success', 'Данные пользователя успешно изменены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $user
     * @return RedirectResponse|Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect(route('users.index'))->with('success', 'Пользователь удален');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return Application|Factory|View|RedirectResponse|Response
     */
    public function delete($id)
    {
        $user = User::find($id);

        return view('admin.user.delete', compact('user'));
    }
}

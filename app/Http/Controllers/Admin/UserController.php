<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateUserRequest;
use App\Http\Requests\Admin\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;
use App\Services\UserService;


final class UserController extends BaseController
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }


    public function index()
    {
        $users = User::all();

        return view('admin.user.index', compact('users'));
    }


    public function create()
    {
        $roleList = Role::all();
        return view('admin.user.create', compact('roleList'));
    }


    public function store(CreateUserRequest $request)
    {

        $user = $this
            ->userService
            ->create($request->validated());

        if($user) {
            return redirect()->route('admin.users.index')->with('success', 'Користувач успішно доданий');
        } else {
            return back()->withErrors(['msd' => 'Помилка збереження'])
                ->withInput();
        }

    }


    public function show(User $user)
    {
        return view('admin.user.show', compact('user'));
    }


    public function edit(User $user)
    {
        $roleList = Role::all();
        return view('admin.user.edit', compact('user', 'roleList'));
    }


    public function update(UpdateUserRequest $request, User $user)
    {
        $user = $this
            ->userService
            ->update($user, $request->validated());

        if($user) {
            return redirect()->route('admin.users.index')
                ->with('success', 'Дані користувача успішно змінені');
        } else {
            return back()->withErrors(['msd' => 'Помилка збереження.'])
                ->withInput();
        }
    }


    public function destroy(User $user)
    {
        $this->userService->delete($user);

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'Пользователь удален');
    }


    public function adminUsersModalAjaxDelete($id)
    {
        $user = User::find($id);

        return view('admin.user.delete', compact('user'));
    }
}

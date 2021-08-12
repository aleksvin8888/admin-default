<?php


namespace App\Services;


use App\Models\User;
use App\Services\Base\MySqlService;
use DB;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

final class UserService extends MySqlService
{
    /**
     * @param array $data
     * @return User|Model|void
     * @throws Exception
     */
    public function create(array $data)
    {
        DB::beginTransaction();

        try {

            $data['password'] = Hash::make($data['password']);

            $user = User::make($data);
            $user->role_id = $data['role_id'];
            $user->save();

            DB::commit();

            return $user;
        } catch (Exception $exception) {
            $this->handleException($exception);
        }
    }

    /**
     * @param User $user
     * @param array $data
     * @return User|void
     * @throws Exception
     */
    public function update(User $user, array $data)
    {
        DB::beginTransaction();
        try {
            if (!empty($data['password'])) {
                $data['password'] = Hash::make($data["password"]);
            } else {
                unset ($data['password']);
            }

            $user->role_id = $data['role_id'];
            $user->update($data);

            DB::commit();

            return $user;
        } catch (Exception $exception) {
            $this->handleException($exception);
        }
    }

    /**
     * @param User $user
     * @return User|void
     * @throws Exception
     */
    public function delete(User $user)
    {
        DB::beginTransaction();
        try {

            $user->delete();

            DB::commit();

            return $user;
        } catch (Exception $exception) {
            $this->handleException($exception);
        }
    }
}

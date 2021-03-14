<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\People;
use App\Models\User;

class UserController extends BaseController
{
    public function store(Request $req) {   

        $validate = Validator::make($req->all(), [
            'email' => 'required|email',
            'cpf' => 'required|string|max:14',
            'password' => 'required',
            'name' => 'required|string|max:50',
            'phone' => 'required|string|max:11',
            'enrollment' => 'required|string|max:11',
        ]);
        if ($validate->fails()) {
            return $this->sendError('Erro de validação', $validate->errors(), 400);
        }

        $inputs = $req->all();
        DB::transaction(function () use ($inputs) {
            $people = People::create([
                'name' => $inputs['name'],
                'phone' => $inputs['phone'],
                'enrollment' => $inputs['enrollment']
                ]);
            $user = User::create([
                'email' => $inputs['email'],
                'cpf' => $inputs['cpf'],
                'password' => bcrypt($inputs['password']),
                'people_id' => $people->id,
            ]);
            $user->assignRole('student');
        });
        return $this->sendResponse([], 'Created with success!');
    }

    public function readOne($id) {

    }

    public function destroy($id) {
    }

    public function update(Request $req, $id) {

    }
}

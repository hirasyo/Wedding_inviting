<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembersRegistrationController extends Controller
{
    /**
     * 表示画面
     *
     * @return void
     */
    public function getIndex()
    {
        return view('welcome');
    }

    /**
     * 入力のチェック
     *
     * @param \App\Http\Requests\ValiRequest $request
     * @return void
     */
    public function confirm(\App\Http\Requests\ValiRequest $request){
        $data = $request->all();

        $name = $request->input('register_name');
        $isAttend = $request->input('register_attend');

        return view('membersRegistration', compact('name','isAttend'));
    }
}

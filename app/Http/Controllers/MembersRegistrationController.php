<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;

class MembersRegistrationController extends Controller
{
    /**
     * 入力のチェック
     *
     * @param \App\Http\Requests\ValiRequest $request
     * @return void
     */
    public function confirm(\App\Http\Requests\ValiRequest $request){
        $name = $request->input('register_name');
        $isAttend = $request->input('register_attend') == 'true' ? true : false;

        $this->storeMember($name,$isAttend);

        return view('membersRegistration', compact('name','isAttend'));
    }

    /**
     * DBへの挿入
     *
     * @param string $name
     * @param boolean $isAttend
     * @return void
     */
    private function storeMember(string $name, bool $isAttend)
    {
        $data = member::firstOrNew(
            ['氏名' => $name],
            ['出席' => $isAttend]
        );

        $data->save();
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TestController extends Controller {

    public function show() {

        return view('test');

    }

    public function test(Request $request) {

        $this->validate($request, $this->rules($request->type_id));

    }

    public function rules() {

        return [

            'name' => 'required_if:check_required,1|min:3',

        ];

    }
}

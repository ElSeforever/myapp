<?php

namespace App\Http\Controllers;

use App\Models\hello;

class helloController extends Controllers {

    protected $Models;

    public function __construct(hello $hello) {

        $this->Models = $hello;

    }

    public function index() {

        returnview('hello',$this->Models->index());

    }

}

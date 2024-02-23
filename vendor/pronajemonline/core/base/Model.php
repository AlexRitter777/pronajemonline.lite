<?php

namespace pronajem\base;

use pronajem\Db;

abstract class Model {
    public $attributes = [];
    public $errors = [];
    public $rules = [];

/*    public function __construct() {
        Db::instance();
    }*/


}
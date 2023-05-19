<?php
class UserController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function register($username, $password) {
        return $this->model->register($username, $password);
    }
    
}

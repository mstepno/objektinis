<?php
class OrderController {
    private $model;

    public function __construct(OrderModel $model) {
        $this->model = $model;
    }

    public function create($userId, $hotelId) {
        $this->model->addOrder($userId, $hotelId);
    }

    
}

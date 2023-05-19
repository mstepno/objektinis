<?php
class HotelController {
    private $model;

    public function __construct(HotelModel $model) {
        $this->model = $model;
    }

    public function create($countryId, $name, $price, $image, $duration) {
        $this->model->addHotel($countryId, $name, $price, $image, $duration);
    }

    
}

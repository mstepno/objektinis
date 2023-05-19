<?php
class CountryController {
    private $model;

    public function __construct(CountryModel $model) {
        $this->model = $model;
    }

    public function create($name, $seasons) {
        $this->model->addCountry($name, $seasons);
    }

    public function getAll() {
        return $this->model->getAll();
    }
    
}

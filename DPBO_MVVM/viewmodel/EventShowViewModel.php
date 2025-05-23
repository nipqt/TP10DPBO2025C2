<?php
require_once 'model/EventShow.php';

class EventShowViewModel {
    private $show;

    public function __construct() {
        $this->show = new EventShow();
    }

    public function getShowList() {
        return $this->show->getAll();
    }

    public function getShowById($id) {
        return $this->show->getById($id);
    }

    public function addShow($country, $location, $start_date, $end_date) {
        return $this->show->create($country, $location, $start_date, $end_date);
    }

    public function updateShow($id, $country, $location, $start_date, $end_date) {
        return $this->show->update($id, $country, $location, $start_date, $end_date);
    }

    public function deleteShow($id) {
        return $this->show->delete($id);
    }
}
?>
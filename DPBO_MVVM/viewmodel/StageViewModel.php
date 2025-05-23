<?php
require_once 'model/Stage.php';

class StageViewModel {
    private $stage;

    public function __construct() {
        $this->stage = new Stage();
    }

    public function getStageList() {
        return $this->stage->getAll();
    }

    public function getStageById($id) {
        return $this->stage->getById($id);
    }

    public function addStage($stage_name) {
        return $this->stage->create($stage_name);
    }

    public function updateStage($id, $stage_name) {
        return $this->stage->update($id, $stage_name);
    }

    public function deleteStage($id) {
        return $this->stage->delete($id);
    }
}
?>
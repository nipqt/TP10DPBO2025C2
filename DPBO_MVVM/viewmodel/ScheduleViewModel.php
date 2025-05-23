<?php
require_once 'model/Schedule.php';

class ScheduleViewModel {
    private $schedule;

    public function __construct() {
        $this->schedule = new Schedule();
    }

    public function getScheduleList() {
        return $this->schedule->getAll();
    }

    public function getScheduleById($id) {
        return $this->schedule->getById($id);
    }

    public function addSchedule($show_id, $artist_id, $stage_id, $performance_time) {
        return $this->schedule->create($show_id, $artist_id, $stage_id, $performance_time);
    }

    public function updateSchedule($id, $show_id, $artist_id, $stage_id, $performance_time) {
        return $this->schedule->update($id, $show_id, $artist_id, $stage_id, $performance_time);
    }

    public function deleteSchedule($id) {
        return $this->schedule->delete($id);
    }
}
?>
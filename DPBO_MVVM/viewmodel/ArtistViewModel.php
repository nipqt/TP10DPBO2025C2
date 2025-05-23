<?php
require_once 'model/Artist.php';

class ArtistViewModel {
    private $artist;

    public function __construct() {
        $this->artist = new Artist();
    }

    public function getArtistList() {
        return $this->artist->getAll();
    }

    public function getArtistById($id) {
        return $this->artist->getById($id);
    }

    public function addArtist($name, $bio) {
        return $this->artist->create($name, $bio);
    }

    public function updateArtist($id, $name, $bio) {
        return $this->artist->update($id, $name, $bio);
    }

    public function deleteArtist($id) {
        return $this->artist->delete($id);
    }
}
?>
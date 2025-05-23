<?php
require_once 'viewmodel/ScheduleViewModel.php';
require_once 'viewmodel/ArtistViewModel.php';
require_once 'viewmodel/StageViewModel.php';
require_once 'viewmodel/EventShowViewModel.php';

$entity = isset($_GET['entity']) ? $_GET['entity'] : 'schedule';
$action = isset($_GET['action']) ? $_GET['action'] : 'list';

if ($entity == 'schedule') {
    $viewModel = new ScheduleViewModel();
    $artistModel = new ArtistViewModel();
    $stageModel = new StageViewModel();
    $eventShowModel = new EventShowViewModel();
    if ($action == 'list') {
        $scheduleList = $viewModel->getScheduleList();
        require_once 'views/schedule_list.php';
    } elseif ($action == 'add') {
        $artists = $artistModel->getArtistList();
        $stages = $stageModel->getStageList();
        $shows = $eventShowModel->getShowList();
        require_once 'views/schedule_form.php';
    } elseif ($action == 'edit') {
        $schedule = $viewModel->getScheduleById($_GET['id']);
        $artists = $artistModel->getArtistList();
        $stages = $stageModel->getStageList();
        $shows = $eventShowModel->getShowList();
        require_once 'views/schedule_form.php';
    } elseif ($action == 'save') {
        $viewModel->addSchedule($_POST['show_id'], $_POST['artist_id'], $_POST['stage_id'], $_POST['performance_time']);
        header('Location: index.php?entity=schedule');
    } elseif ($action == 'update') {
        $viewModel->updateSchedule($_GET['id'], $_POST['show_id'], $_POST['artist_id'], $_POST['stage_id'], $_POST['performance_time']);
        header('Location: index.php?entity=schedule');
    } elseif ($action == 'delete') {
        $viewModel->deleteSchedule($_GET['id']);
        header('Location: index.php?entity=schedule');
    }

} elseif ($entity == 'artist') {
    $viewModel = new ArtistViewModel();
    if ($action == 'list') {
        $artistList = $viewModel->getArtistList();
        require_once 'views/artist_list.php';
    } elseif ($action == 'add') {
        require_once 'views/artist_form.php';
    } elseif ($action == 'edit') {
        $artist = $viewModel->getArtistById($_GET['id']);
        require_once 'views/artist_form.php';
    } elseif ($action == 'save') {
        $viewModel->addArtist($_POST['name'], $_POST['bio']);
        header('Location: index.php?entity=artist');
    } elseif ($action == 'update') {
        $viewModel->updateArtist($_GET['id'], $_POST['name'], $_POST['bio']);
        header('Location: index.php?entity=artist');
    } elseif ($action == 'delete') {
        $viewModel->deleteArtist($_GET['id']);
        header('Location: index.php?entity=artist');
    }

} elseif ($entity == 'stage') {
    $viewModel = new StageViewModel();
    if ($action == 'list') {
        $stageList = $viewModel->getStageList();
        require_once 'views/stage_list.php';
    } elseif ($action == 'add') {
        require_once 'views/stage_form.php';
    } elseif ($action == 'edit') {
        $stage = $viewModel->getStageById($_GET['id']);
        require_once 'views/stage_form.php';
    } elseif ($action == 'save') {
        $viewModel->addStage($_POST['name']);
        header('Location: index.php?entity=stage');
    } elseif ($action == 'update') {
        $viewModel->updateStage($_GET['id'], $_POST['name']);
        header('Location: index.php?entity=stage');
    } elseif ($action == 'delete') {
        $viewModel->deleteStage($_GET['id']);
        header('Location: index.php?entity=stage');
    }

} elseif ($entity == 'show') {
    $viewModel = new EventShowViewModel();
    if ($action == 'list') {
        $showList = $viewModel->getShowList();
        require_once 'views/show_list.php';
    } elseif ($action == 'add') {
        require_once 'views/show_form.php';
    } elseif ($action == 'edit') {
        $show = $viewModel->getShowById($_GET['id']);
        require_once 'views/show_form.php';
    } elseif ($action == 'save') {
        $viewModel->addShow($_POST['country'], $_POST['location'], $_POST['start_date'], $_POST['end_date']);
        header('Location: index.php?entity=show');
    } elseif ($action == 'update') {
        $viewModel->updateShow($_GET['id'], $_POST['country'], $_POST['location'], $_POST['start_date'], $_POST['end_date']);
        header('Location: index.php?entity=show');
    } elseif ($action == 'delete') {
        $viewModel->deleteShow($_GET['id']);
        header('Location: index.php?entity=show');
    }
}
?>
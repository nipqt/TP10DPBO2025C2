<?php
require_once 'views/template/header.php';
?>

<h2 class="text-2xl font-bold mb-4 text-[#171107]"><?= isset($schedule) ? 'Edit' : 'Add' ?> Schedule</h2>
<form action="index.php?entity=schedule&action=<?= isset($schedule) ? 'update&id=' . $schedule['id'] : 'save' ?>" method="POST" class="space-y-4">

    <div>
        <label style="color: #171107;">Artist</label>
        <select name="artist_id" class="w-full p-2 border rounded">
            <option value="" disabled <?= !isset($schedule) ? 'selected' : '' ?>>-- Select Artist --</option>
            <?php foreach ($artists as $a): ?>
                <option value="<?= $a['id'] ?>" <?= isset($schedule) && $schedule['artist_id'] == $a['id'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($a['name']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div>
        <label style="color: #171107;">Stage</label>
        <select name="stage_id" class="w-full p-2 border rounded">
            <option value="" disabled <?= !isset($schedule) ? 'selected' : '' ?>>-- Select Stage --</option>
            <?php foreach ($stages as $s): ?>
                <option value="<?= $s['id'] ?>" <?= isset($schedule) && $schedule['stage_id'] == $s['id'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($s['name']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div>
        <label style="color: #171107;">Show</label>
        <select name="show_id" class="w-full p-2 border rounded">
            <option value="" disabled <?= !isset($schedule) ? 'selected' : '' ?>>-- Select Show --</option>
            <?php foreach ($shows as $sh): ?>
                <option value="<?= $sh['id'] ?>" <?= isset($schedule) && $schedule['show_id'] == $sh['id'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($sh['country']) ?> - <?= htmlspecialchars($sh['location']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div>
        <label style="color: #171107;">Performance Time</label>
        <input type="datetime-local" name="performance_time" value="<?= isset($schedule) ? date('Y-m-d\TH:i', strtotime($schedule['performance_time'])) : '' ?>" class="w-full p-2 border rounded">
    </div>

    <button type="submit" class="hover:bg-[#005677]" style="
     background-color: #006B8F; 
     color: white; 
     padding: 0.5rem 1rem; 
     border-radius: 0.375rem; 
     display: inline-block; 
     text-decoration: none; 
     transition: background-color 0.3s ease;
     cursor: pointer;
   "
    onmouseover="this.style.backgroundColor='#005677'"
    onmouseout="this.style.backgroundColor='#006B8F'">Submit</button>
</form>

<?php
require_once 'views/template/footer.php';
?>
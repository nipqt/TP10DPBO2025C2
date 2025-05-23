<?php
require_once 'views/template/header.php';
?>

<h2 class="text-2xl font-bold mb-4 text-[#171107]"><?= isset($show) ? 'Edit' : 'Add' ?> Event</h2>
<form action="index.php?entity=show&action=<?= isset($show) ? 'update&id=' . $show['id'] : 'save' ?>" method="POST" class="space-y-4">

    <div>
        <label style="color: #171107;">Country</label>
        <input type="text" name="country" class="w-full p-2 border rounded" value="<?= isset($show) ? $show['country'] : '' ;?>">
    </div>

    <div>
        <label style="color: #171107;">Location</label>
        <input type="text" name="location" class="w-full p-2 border rounded" value="<?= isset($show) ? $show['location'] : '' ;?>">
    </div>

    <div>
        <label style="color: #171107;">Start Date</label>
        <input type="date" name="start_date" value="<?= isset($show) ? htmlspecialchars(substr($show['start_date'], 0, 10)) : '' ?>" class="w-full p-2 border rounded">
    </div>

    <div>
        <label style="color: #171107;">End Date</label>
        <input type="date" name="end_date" value="<?= isset($show) ? htmlspecialchars(substr($show['end_date'], 0, 10)) : '' ?>" class="w-full p-2 border rounded">
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
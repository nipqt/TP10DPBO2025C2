<?php
require_once 'views/template/header.php';
?>

<h2 class="text-2xl font-bold mb-4" style="color: #171107">Event Show List</h2>
<div class="mb-4">
    <a href="index.php?entity=show&action=add" style="
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
    onmouseout="this.style.backgroundColor='#006B8F'">
       + Add Show
    </a>
</div>
<table class="min-w-full bg-white shadow rounded overflow-hidden">
    <thead style="background-color: #6E5075;" class="text-white">
        <tr>
            <th class="p-2">Country</th>
            <th class="p-2">Location</th>
            <th class="p-2">Start Date</th>
            <th class="p-2">End Date</th>
            <th class="p-2">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($showList as $s): ?>
        <tr class="border-t" onmouseover="this.style.backgroundColor='#ADCBD6'" onmouseout="this.style.backgroundColor='#FFFFFF'">
            <td class="p-2"><?= htmlspecialchars($s['country']) ?></td>
            <td class="p-2"><?= htmlspecialchars($s['location']) ?></td>
            <td class="p-2" style="text-align: center"><?= htmlspecialchars($s['start_date']) ?></td>
            <td class="p-2" style="text-align: center"><?= htmlspecialchars($s['end_date']) ?></td>
            <td class="p-2 space-x-2" style="text-align: center">
                <a href="index.php?entity=show&action=edit&id=<?= $s['id'] ?>" style="color : #E2B83B">Edit</a>
                <a href="index.php?entity=show&action=delete&id=<?= $s['id'] ?>" onclick="return confirm('Delete this Show?')" style="color :rgb(255, 16, 16)">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
require_once 'views/template/footer.php';
?>
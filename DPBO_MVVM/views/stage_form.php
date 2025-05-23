<?php
require_once 'views/template/header.php';
?>

<h2 class="text-2xl font-bold mb-4 text-[#171107]"><?= isset($stage) ? 'Edit' : 'Add' ?> stage</h2>
<form action="index.php?entity=stage&action=<?= isset($stage) ? 'update&id=' . $stage['id'] : 'save' ?>" method="POST" class="space-y-4">

    <div>
        <label style="color: #171107;">Stage Name</label>
        <input type="text" name="stage" class="w-full height-100 p-2 border rounded" value="<?= isset($stage) ? $stage['name'] : '' ;?>">
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
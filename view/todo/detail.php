<h2>Details Todo</h2>


<form action="index.php?controller=Todo&action=Update&id=<?php echo $todo->id?>" method="post">
    <label>Naam</label>
    <input value="<?php echo $todo->name; ?>" />
    <label>Done</label>
    <input type="checkbox" value="<?php echo $todo->done; ?>" />

    <button type="submit" >save changes</button>
</form>

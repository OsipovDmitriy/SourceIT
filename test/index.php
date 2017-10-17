<?php  
include 'safemysql.class.php';

$db     = new SafeMysql();
$table  = "users"; 
$fields = ['name', 'car', 'sex'];

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $data = $db->filterArray($_POST, $fields);
    if (isset($_POST['delete']))
    {
        $db->query("DELETE FROM ?n WHERE id=?i", $table, $_POST['delete']);
    } elseif ($_POST['id']) { 
        $db->query("UPDATE ?n SET ?u WHERE id = ?i", $table, $data, $_POST['id']);
    } else { 
        $db->query("INSERT INTO ?n SET ?u", $table, $data);
    } 
    header("Location: http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']);  
    exit;  
}

if (!isset($_GET['id']))
{
    $LIST = $db->getAll("SELECT * FROM ?n", $table);
    include 'list.php';
} else {
    if ($_GET['id'])
    {
        $row = $db->getRow("SELECT * FROM ?n WHERE id=?i", $table, $_GET['id']);
    } else { 
        $row['name'] = ''; 
        $row['sex']  = ''; 
        $row['car']  = ''; 
        $row['id']   = 0; 
    } 
    include 'form.php';
}

// эта функция не нужна для работы с БД, но нужна для примеров вывода
// поскольку вывод всегда должен быть экранирован
function e($str)
{
   return htmlspecialchars($str, ENT_QUOTES, 'utf-8');
}


плюс файлы шаблонов, 

list.php
<a href="?id=0">Add item</a>
<table border=1>
    <tr>
        <td><b>Name</b></td>
        <td><b>Car</b></td>
        <td><b>Sex</b></td>
        <td><b>Action</b></td>
    </tr>
<?php foreach ($LIST as $row): ?>
    <tr>
        <td><?=e($row['name'])?></td>
        <td><?=e($row['car'])?></td>
        <td><?=e($row['sex'])?></td>
        <td><a href="?id=<?=e($row['id'])?>">Edit</a></td>
    </tr>
<?php endforeach ?>
</table>


и form.php
<form method="POST">
    Name: <input type="text" name="name" value="<?=e($row['name'])?>"><br>
    Car: <input type="text" name="car" value="<?=e($row['car'])?>"><br>
    Sex: <select name="sex">
        <option<?php if ($row['sex'] == 'male'):   ?> selected="selected"<?php endif ?>>male</option>
        <option<?php if ($row['sex'] == 'female'): ?> selected="selected"<?php endif ?>>female</option>
    </select>
    <input type="hidden" name="id" value="<?=e($row['id'])?>">
    <input type="submit"><br>
</form>
<a href="?">Return to the list</a>

<?php if ($row['id']): ?>
<form method="POST">
<input type="hidden" name="delete" value="<?=e($row['id'])?>">
<input type="submit" value="Delete"><br>
</form>
<? endif ?>

<?php
include("function.php");
$konv = isset($_POST['angka']) ? $_POST['angka'] : "";
if (isset($_POST['submit'])) {
    $angka = $_POST['angka'];
    $konv = Number($angka);
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Convert Number to Bahasa</title>
</head>

<body>
    <div>
        <h1>Convert Number to Bahasa</h1>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <label>Input Number</label>
            <input type="number" name="angka" required="" value="<?php echo $angka; ?>">
            <button type="submit" name="submit">Submit</button><br>
        </form>
        <p><strong>Bahasa : <i><?php echo $konv ?></i></strong></p>
    </div>

</body>

</html>
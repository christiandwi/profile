<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 6/20/18
 * Time: 7:40 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tes</title>
</head>

<body>
<form method="post" action="<?=base_url('index.php/Welcome/insert')?>" >
    <label for="nama">Nama :</label>
    <input type="text" name="nama" id="nama">
    <br>
    <br>
    <label for="email">Email :</label>
    <input name="email" id="email">
    <br>
    <br>
    <label for="born_date">Born date :</label>
    <input type="date" name="born_date" id="born_date">
    <br>
    <br>
    <br>
    <input type="submit" value="Submit">
</form>
</body>
</html>
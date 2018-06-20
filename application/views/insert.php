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
    <label for="user">User :</label>
    <input type="text" name="user" id="user">
    <br>
    <br>
    <label for="gender">Gender :</label>
    <select name="gender" id="gender">
        <option value="laki-laki">Laki-laki</option>
        <option value="perempuan">Perempuan</option>
    </select>
    <br>
    <br>
    <label for="usia">Usia :</label>
    <input type="number" min="0" name="usia" id="usia">
    <br>
    <br>
    <br>
    <input type="submit" value="Submit">
</form>
</body>
</html>
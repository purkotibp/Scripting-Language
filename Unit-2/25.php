<?php
$info = [
    'name' => 'Ram Bahadur',
    'address' => 'Lalitpur',
    'email' => 'info@ram.com',
    'phone' => 98454545,
    'website' => 'www.ram.com'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Table</title>
  
</head>
<body>

<h2 style="text-align: center;">User Information</h2>

<table border="1">
    <tr>
       
    </tr>
    <?php
    foreach ($info as $key => $value) {
        echo "<tr><td><strong>" . ucfirst($key) . "</strong></td><td>" . $value . "</td></tr>";
    }
    ?>
</table>

</body>
</html>

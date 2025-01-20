<?php
// Multidimensional array to store student data
$students = [
    [
        'sn' => 1,
        'name' => 'Rajesh',
        'roll_no' => '01',
        'subjects' => [
            'Web Tech II' => 75,
            'DBMS' => 20,
            'Economic' => 30,
            'DSA' => 15,
            'Account' => 30
        ]
    ],
    [
        'sn' => 2,
        'name' => 'Hari',
        'roll_no' => '02',
        'subjects' => [
            'Web Tech II' => 90,
            'DBMS' => 85,
            'Economic' => 95,
            'DSA' => 88,
            'Account' => 78
        ]
    ],
    [
        'sn' => 3,
        'name' => 'Shyam',
        'roll_no' => '03',
        'subjects' => [
            'Web Tech II' => 65,
            'DBMS' => 70,
            'Economic' => 75,
            'DSA' => 72,
            'Account' => 80
        ]
    ],
    [
        'sn' => 4,
        'name' => 'Gita',
        'roll_no' => '04',
        'subjects' => [
            'Web Tech II' => 18,
            'DBMS' => 32,
            'Economic' => 19,
            'DSA' => 28,
            'Account' => 42
        ]
    ],
    [
        'sn' => 5,
        'name' => 'Sita',
        'roll_no' => '05',
        'subjects' => [
            'Web Tech II' => 70,
            'DBMS' => 60,
            'Economic' => 72,
            'DSA' => 68,
            'Account' => 74
        ]
    ]
];

// Function to determine result (pass or fail) based on total marks
function getResult($total) {
    return $total >= 250 ? 'Pass' : 'Fail';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Mark Sheet</title>
    <style>
        table {
          
            border-collapse: collapse;
           
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color:rgba(241, 239, 239, 0.89);
        }
        /* Pass/Fail Row Coloring */
        .pass {
            background-color:rgba(27, 231, 9, 0.89);
            color: white;
        }
        .fail {
            background-color:rgba(249, 13, 13, 0.89);
            color: white;
        }
        /* Alternating row colors for Table 2 */
        .alt-row {
            background-color:rgb(45, 44, 44); /* Light gray for alternating rows */
        }
    </style>
</head>
<body>

<h2>Marks Ledger</h2>

<!-- First Table with Pass/Fail Colors -->
<table>
    <thead>
        <tr>
            <th>SN</th>
            <th>Student Name</th>
            <th>Roll No</th>
            <th>Web Tech II</th>
            <th>DBMS</th>
            <th>Economic</th>
            <th>DSA</th>
            <th>Account</th>
            <th>Total</th>
            <th>Result</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($students as $student): ?>
            <?php
                // Calculate total marks
                $total = array_sum($student['subjects']);
                // Get the result (Pass or Fail)
                $result = getResult($total);
                // Set the row class based on the result
                $rowClass = ($result == 'Pass') ? 'pass' : 'fail';
            ?>
            <tr class="<?php echo $rowClass; ?>">
                <td><?php echo $student['sn']; ?></td>
                <td><?php echo $student['name']; ?></td>
                <td><?php echo $student['roll_no']; ?></td>
                <td><?php echo $student['subjects']['Web Tech II']; ?></td>
                <td><?php echo $student['subjects']['DBMS']; ?></td>
                <td><?php echo $student['subjects']['Economic']; ?></td>
                <td><?php echo $student['subjects']['DSA']; ?></td>
                <td><?php echo $student['subjects']['Account']; ?></td>
                <td><?php echo $total; ?></td>
                <td><?php echo $result; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<h2>Alternating Colors</h2>

<!-- Second Table with Alternating Row Colors -->
<table>
    <thead>
        <tr>
            <th>SN</th>
            <th>Student Name</th>
            <th>Roll No</th>
            <th>Web Tech II</th>
            <th>DBMS</th>
            <th>Economic</th>
            <th>DSA</th>
            <th>Account</th>
            <th>Total</th>
            <th>Result</th>
        </tr>
    </thead>
    <tbody>
        <?php $rowCount = 0; ?>
        <?php foreach ($students as $student): ?>
            <?php
                // Calculate total marks
                $total = array_sum($student['subjects']);
                // Get the result (Pass or Fail)
                $result = getResult($total);
                // Add alternating row color (black or gray) for Table 2
                $altRowClass = ($rowCount % 2 == 0) ? 'alt-row' : '';
                $rowCount++;
            ?>
            <tr class="<?php echo $altRowClass; ?>">
                <td><?php echo $student['sn']; ?></td>
                <td><?php echo $student['name']; ?></td>
                <td><?php echo $student['roll_no']; ?></td>
                <td><?php echo $student['subjects']['Web Tech II']; ?></td>
                <td><?php echo $student['subjects']['DBMS']; ?></td>
                <td><?php echo $student['subjects']['Economic']; ?></td>
                <td><?php echo $student['subjects']['DSA']; ?></td>
                <td><?php echo $student['subjects']['Account']; ?></td>
                <td><?php echo $total; ?></td>
                <td><?php echo $result; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>

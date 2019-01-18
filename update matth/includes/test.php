<?php
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);
$_SESSION['idHouse'] = $row['idHouse'];

?>
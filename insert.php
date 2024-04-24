<?php
$conn = mysqli_connect("localhost", "root", "", "opentutorials");
$sql = "
INSERT INTO topic (
title,
description,
created
) VALUES (
'Mysql',
'Mysql is ....',
NOW()
)";
mysqli_query($conn, $sql);

echo $sql;
?>
<?php
$user = 'root';
$password = '';
$db = '';
$host = 'learn.loc';
$mysqli = mysqli_connect($host,$user,$password, $db);
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}
$crate_db="CREATE DATABASE IF NOT EXISTS userform DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci";
if (mysqli_query($mysqli, $crate_db)) {
    echo "Database created successfully.";
} else {
    echo "ERROR: Could not able to execute $crate_db. " . mysqli_error($mysqli);
}

$select_db = "USE userform";
if (mysqli_query($mysqli, $select_db)) {
    echo "Database selected successfully.";
} else {
    echo "ERROR: Could not able to execute $select_db. " . mysqli_error($mysqli);
}

$sql = "CREATE TABLE userforms(
    id INT(8) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(70) NOT NULL UNIQUE,
    description TEXT(3000) NOT NULL,
    city VARCHAR(30) NOT NULL,
    checkbox VARCHAR(30) NOT NULL,
    radio VARCHAR(30) NOT NULL,
    filepath TEXT NOT NULL)";
if (mysqli_query($mysqli, $sql)) {
    echo "Table created successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
}
$insert=[
"INSERT INTO userforms (name, email, description, city, checkbox, radio, filepath) VALUES ('Тестовый 1','email1@test.ru','Какое-то описание1','Город 1','on','on','55d081e6-70eb-4b94-a590-2f2d2892a446.jpg')",
"INSERT INTO userforms (name, email, description, city, checkbox, radio, filepath) VALUES ('Тестовый 2','email2@test.ru','Какое-то описание2','Город 2','on','on','2b98de3a-3921-4935-b15f-457388c0be1c.jpg')",
"INSERT INTO userforms (name, email, description, city, checkbox, radio, filepath) VALUES ('Тестовый 3','email3@test.ru','Какое-то описание3','Город 1','on','on','ae514062-24aa-41be-9473-332df12803a3.jpg')",
"INSERT INTO userforms (name, email, description, city, checkbox, radio, filepath) VALUES ('Тестовый 4','email4@test.ru','Какое-то описание4','Город 3','on','on','b0fd5fcf-104c-4522-991b-d72e72513c9d.jpg')",
"INSERT INTO userforms (name, email, description, city, checkbox, radio, filepath) VALUES ('Тестовый 5','email5@test.ru','Какое-то описание5','Город 1','on','on','5d578617-233f-4687-8202-c8799a55eea2.jpg')",
"INSERT INTO userforms (name, email, description, city, checkbox, radio, filepath) VALUES ('Тестовый 6','email6@test.ru','Какое-то описание6','Город 2','on','on','29a8204f-6c58-420e-9af3-0b7b2fd2e4f1.jpg')"
];
foreach ($insert as $into){
    mysqli_query($mysqli, $into);
    echo "Test_user created successfully";
}
// Close connection
mysqli_close($mysqli);
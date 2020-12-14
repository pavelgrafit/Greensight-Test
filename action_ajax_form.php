<?php

$result = array();

$userArray = array(
	array("Pavel", "Sokolov", "pavelgrafit@mail.ru"),
	array("Polina", "Pukhova", "pukhova@list.ru"),
	array("Test", "Tester", "test@gmail.com")
);

function writeLog ($error, $logDir)
{
	$log = date('Y-m-d H:i:s') . ' ' . $error . "\nName: " . $_POST['name'] . "\nSurname: " . 
	$_POST['surname'] . "\nEmail: " . $_POST['email'] . "\nPassword: " . $_POST['password'] . "\nRepeat_password: " . $_POST['repeat_password'] . "\n";
	file_put_contents(__DIR__ . $logDir, $log . PHP_EOL, FILE_APPEND);
}

if (($_POST["name"] == "") || ($_POST["surname"] == "") || 
($_POST["email"] == "") || ($_POST["password"] == "") || 
($_POST["repeat_password"] == ""))
{
	$result['check'] = 'Error! Fill in all the fields!';
	writelog ($result['check'], '/log.txt');
}
for ($i = 0; $i < count($userArray); ++$i)
{
if ($userArray[$i][2] == $_POST["email"])
{
	$result['check'] = 'Error! Email is already taken!';
	writelog ($result['check'], '/log.txt');
}
}
if ($_POST['password'] != $_POST['repeat_password'])
{
	$result['check'] = 'Error! Passwords do not match!';
	writelog ($result['check'], '/log.txt');
}
if (strpos($_POST["email"], '@') == False)
{
	$result['check'] = 'Error! Incorrect email!';
	writelog ($result['check'], '/log.txt');
}
if (!count($result))
{
	$result['check'] = 'Good';
	$result['name'] = $_POST["name"];
	$result['surname'] = $_POST["surname"];
	$result['email'] = $_POST["email"];
	$result['password'] = $_POST["password"];
	$result['repeat_password'] = $_POST["repeat_password"];
}

echo json_encode($result); 

?>
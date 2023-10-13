<?php
$studentId = $_REQUEST['id'];
$studentNum = $_REQUEST['num'];

// Define the log file path
$logFilePath = 'logfile.txt';

// Define the log message
$logMessage = date('Y-m-d H:i:s') . ' - '. $studentNum . ' (' . $studentId . ') accessed the website.' . PHP_EOL;

// Open the log file in append mode
$fileHandle = fopen($logFilePath, 'a');

if ($fileHandle === false) {
    die('Unable to open log file for writing.');
}

if (fwrite($fileHandle, $logMessage) === false) {
    die('Error writing to log file.');
}

// Close the file handle
fclose($fileHandle);
header('Location: ../index.php');
?>
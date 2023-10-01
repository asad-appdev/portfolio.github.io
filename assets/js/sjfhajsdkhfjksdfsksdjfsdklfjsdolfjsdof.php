<?php
// Define the log file path
$logFilePath = 'visit_log.txt';

// Get the visitor's IP address
$visitorIP = $_SERVER['REMOTE_ADDR'];

// Get the current date and time in a specific format (e.g., 'YYYY-MM-DD HH:MM:SS')
$timestamp = date('Y-m-d H:i:s');

// Create the log entry with IP, date, and time
$logEntry = "$timestamp - Visitor IP: $visitorIP\n";

// Append the log entry to the log file
file_put_contents($logFilePath, $logEntry, FILE_APPEND | LOCK_EX);
?>
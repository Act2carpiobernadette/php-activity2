<?php
// Berna

/*
Full Name: Bernadette C. Carpio
Age: 20
Course & Section: ACT2B
Address: St. Gunao San Jose Paombong Bulacan
Hobbies: Playing online games
Dream Job: N/A
Course: Associate in Computer Technology
School: Bulacan Polytechnic College
*/

$me = [
    "name" => "Bernadette",
    "age" => 20,
    "address" => "St. Gunao San Jose Paombong Bulacan",
    "hobbies" => "playing online games",
    "dream_job" => "N/A",
    "course" => "Associate in Computer Technology",
    "school" => "Bulacan Polytechnic College"
];

echo "My Personal Information\n";
echo "Name:   " . $me["name"] . "\n";
echo "Age:    " . $me["age"] . "\n";
echo "Address: " . $me["address"] . "\n";
echo "Hobbies: " . $me["hobbies"] . "\n";
echo "Dream Job: " . $me["dream_job"] . "\n";
echo "Course: " . $me["course"] . "\n";
echo "School: " . $me["school"] . "\n";

print "\nI am " . $me["name"] . ", a " . $me["course"] . " student of " . $me["school"] . ".";
?>

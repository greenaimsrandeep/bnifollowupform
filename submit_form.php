<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $category = $_POST["category"];
    $reference = $_POST["reference"];
    $company = $_POST["company"];
    $contactName = $_POST["contactName"];
    $phoneNumber = $_POST["phoneNumber"];
    $contactDetailsReceived = $_POST["contactDetailsReceived"];
    $contactedRefMember = $_POST["contactedRefMember"];
    $triangleCompleted = $_POST["triangleCompleted"];
    $businessExpected = $_POST["businessExpected"];

    // Create a CSV file with form data
    $file = fopen("leads.csv", "a");
    fputcsv($file, compact('name', 'category', 'reference', 'company', 'contactName', 'phoneNumber', 'contactDetailsReceived', 'contactedRefMember', 'triangleCompleted', 'businessExpected'));
    fclose($file);
}
?>

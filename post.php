<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $blog = $_POST["blog"];

    // Check if the file exists
    $file = "data.json";
    if (file_exists($file)) {
        $current_data = file_get_contents($file);

        $existing_data = json_decode($current_data, true);

        // Append new data to the array
        $existing_data[] = array(
            "name" => $name,
            "blog" => $blog
        );

        // Convert the array to JSON
        $json_data = json_encode($existing_data);

        // Save the updated JSON data to the file
        file_put_contents($file, $json_data);

        echo "Blog Posted. Please go back to the inital page.";
    } else {
        // If the file doesn't exist, create a new one with the current data
        $data = array(
            array(
                "name" => $name,
                "blog" => $blog
            )
        );

        // Convert the array to JSON
        $json_data = json_encode($data);

        // Save the JSON data to a new file
        file_put_contents($file, $json_data);
        echo "Blog Posted. Please go back to the inital page.";
    }
}
?>
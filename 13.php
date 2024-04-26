<?php
// Sample faculty directory
$faculty_directory = [
    ['first_name' => 'Amit', 'last_name' => 'Verma', 'phone_ext' => '3017'],
    ['first_name' => 'Sonali', 'last_name' => 'Choubey', 'phone_ext' => '3017'],
    ['first_name' => 'John', 'last_name' => 'Doe', 'phone_ext' => '1234'],
    ['first_name' => 'Jane', 'last_name' => 'Smith', 'phone_ext' => '5678'],
];

// Get form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone_ext = $_POST['phone_ext'];

// Filter faculty by entered criteria
$filtered_faculty = array_filter($faculty_directory, function($faculty) use ($first_name, $last_name, $phone_ext) {
    return
        (!$first_name || strcasecmp($faculty['first_name'], $first_name) === 0) &&
        (!$last_name || strcasecmp($faculty['last_name'], $last_name) === 0) &&
        (!$phone_ext || $faculty['phone_ext'] === $phone_ext);
});

// Display results
echo '<h2>Search Results</h2>';

if (empty($first_name) && empty($last_name) && empty($phone_ext)) {
    // Case a: List all faculty if no names or extension is entered
    foreach ($faculty_directory as $faculty) {
        echo "<p>{$faculty['first_name']} {$faculty['last_name']} - Extension: {$faculty['phone_ext']}</p>";
    }
} elseif (empty($filtered_faculty)) {
    // Case b: No matching faculty found
    echo '<p>No faculty match found.</p>';
} else {
    // Case c: Display matching entries
    foreach ($filtered_faculty as $faculty) {
        echo "<p>{$faculty['first_name']} {$faculty['last_name']} - Extension: {$faculty['phone_ext']}</p>";
    }
}

?>

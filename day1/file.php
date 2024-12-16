<?php declare(strict_types=1);

function readFileData($filePath): array
{
    // Initialize arrays for left and right sides
    $leftSideInput = [];
    $rightSideInput = [];

    // Open the file for reading
    if ($handle = fopen($filePath, 'r')) {
        // Read the file line by line
        while (($line = fgets($handle)) !== false) {
            // Split the line into two numbers
            $numbers = preg_split('/\s+/', trim($line));  // Split by whitespace
            if (count($numbers) === 2) {  // Ensure there are exactly two values
                $leftSideInput[] = (int) $numbers[0];
                $rightSideInput[] = (int) $numbers[1];
            }
        }
        fclose($handle);  // Close the file
    } else {
        throw new Exception('Error opening the file.');
    }

    // Return the data as an associative array
    return ['left' => $leftSideInput, 'right' => $rightSideInput];
}
?>
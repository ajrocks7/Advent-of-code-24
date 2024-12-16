<?php declare(strict_types=1);

require 'file.php';

class Puzzle
{
    public function executePuzzle(): void
    {
        try {
            // Specify the file path
            $filePath = 'input.txt';

            // Read the file data
            $data = readFileData($filePath);

            // Use the data
            $leftSideInput = $data['left'];
            $rightSideInput = $data['right'];

            echo $this->locationId($leftSideInput, $rightSideInput);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function locationId(array $leftSideInput, array $rightSideInput):int
    {
        sort($leftSideInput);
        sort($rightSideInput);

        $sub = [];
        $sub = array_map(function ($x, $y) {
            return abs($x - $y);
        }, $leftSideInput, $rightSideInput);

        $add = array_sum($sub);
        return $add;
    }
}

$puzzle = new puzzle();
echo $puzzle->executePuzzle();
?>
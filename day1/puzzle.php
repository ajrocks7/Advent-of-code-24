<?php declare(strict_types=1);

require 'file.php';

class Puzzle
{
    public function executePuzzle(): int
    {
        try {
            // Specify the file path
            $filePath = 'input.txt';

            // Read the file data
            $data = readFileData($filePath);

            // Use the data
            $leftSide = $data['left'];
            $rightSide = $data['right'];

            return $this->locationId($leftSide, $rightSide);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function locationId(array $leftSide, array $rightSide):int
    {
        sort($leftSide);
        sort($rightSide);

        $sub = [];
        $sub = array_map(function ($x, $y) {
            return abs($x - $y);
        }, $leftSide, $rightSide);

        $add = array_sum($sub);
        return $add;
    }
}

$puzzle = new puzzle();
echo $puzzle->executePuzzle();
?>
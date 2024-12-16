<?php declare(strict_types=1);

require 'file.php';

class Puzzle2
{
    public function executePuzzleTwo(): void
    {
        try {
            // Specify the file path
            $filePath = 'input.txt';

            // Read the file data
            $data = readFileData($filePath);

            // Use the data
            $leftSideInput = $data['left'];
            $rightSideInput = $data['right'];

            echo $this->locationIdSimilarity($leftSideInput, $rightSideInput);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function locationIdSimilarity(array $leftSideInput, array $rightSideInput):int
    {
        
        $similarCount = [];
        $total = 0;
    
        foreach($leftSideInput as $lsvalues)
        {
            $similarCount[]= count(array_keys($rightSideInput, $lsvalues));
        }


        $total+= array_sum(array_map(function ($x, $y) {
            return $x * $y;
        }, $leftSideInput, $similarCount));
       
        return $total;
    }
}

$puzzle = new puzzle2();
echo $puzzle->executePuzzleTwo();
?>
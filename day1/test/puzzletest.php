<?php declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class Puzzletest extends TestCase
{
    public function testPuzzle(): void
    {
        include __DIR__ . '/../puzzle.php';

        $leftSideInput = [3, 4, 2, 1, 3, 3];
        $rightSideInput = [4, 3, 5, 3, 9, 3];

        $puzzle = new Puzzle();
        $result = $puzzle->locationId($leftSideInput, $rightSideInput);

        $this->assertEquals($result, 11);
    }
}
?>
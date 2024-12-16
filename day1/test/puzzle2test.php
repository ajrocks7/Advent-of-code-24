<?php declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class Puzzle2test extends TestCase
{
    public function testPuzzle(): void
    {
        include __DIR__ . '/../puzzle2.php';

        $leftSideInput = [3, 4, 2, 1, 3, 3];
        $rightSideInput = [4, 3, 5, 3, 9, 3];

        $puzzle = new Puzzle2();
        $result = $puzzle->locationIdSimilarity($leftSideInput, $rightSideInput);

        $this->assertEquals($result, 31);
    }
}
?>
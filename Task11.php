<?php
class Cell
{
    public $x;
    public $y;
    public $dist;
    public $prev;

    public function __construct($x, $y, $dist, $prev)
    {
        $this->x = $x;
        $this->y = $y;
        $this->dist = $dist;
        $this->prev = $prev;
    }
    public function __toString()
    {
        return "(x = " . $this->x . ", y = " . $this->y . ") ";
    }
}
class ShortestPathBetweenCellsBFS
{
    public function shortestPath($matrix, $start, $end): array
    {
        $sx = $start[0];
        $sy = $start[1];
        $dx = $end[0];
        $dy = $end[1];
        if ($matrix[$sx][$sy] == 0 || $matrix[$dx][$dy] == 0) {
            //echo "There is no path!";
            return [];
        }
        $m = count($matrix);
        $n = count($matrix[0]);
        $cells = [];
        for ($i = 0; $i < $m; $i++) {
            $cells[$i] = [];
            for ($j = 0; $j < $n; $j++) {
                if ($matrix[$i][$j] != 0) {
                    $cells[$i][$j] = new Cell($i, $j, PHP_INT_MAX, null);
                } else {
                    $cells[$i][$j] = null;
                }
            }
        }
        // BFS
        $queue = [];
        $src = $cells[$sx][$sy];
        $src->dist = 0;
        array_push($queue, $src);
        $dest = null;
        $p = null;
        while ((!is_null($p = array_shift($queue)))) {
            if ($p->x == $dx && $p->y == $dy) {
                $dest = $p;
                break;
            }
            $this->visit($cells, $queue, $p->x - 1, $p->y, $p);
            $this->visit($cells, $queue, $p->x, $p->y - 1, $p);
            $this->visit($cells, $queue, $p->x + 1, $p->y, $p);
            $this->visit($cells, $queue, $p->x, $p->y + 1, $p);
        }

        if (is_null($dest)) {
            return [];
        } else {
            $path = [];
            $p = $dest;
            do {
                array_unshift($path, $p);
            } while (!is_null($p = $p->prev));
            return $path;
        }
    }
    private function visit($cells, &$queue, $x, $y, $parent)
    {
        if ($x < 0 || $x >= count($cells) || $y < 0 || $y >= count($cells[0]) || is_null($cells[$x][$y])) {
            return;
        }
        $dist = $parent->dist + 1;
        $p = $cells[$x][$y];
        if ($dist < $p->dist) {
            $p->dist = $dist;
            $p->prev = $parent;
            array_push($queue, $p);
        }
    }
    public static function writeAttemptToFile(string $fileName, $field, $resultOfAttempt, $start, $end)
    {
        $myfile = null;
        if (!file_exists($fileName)) {
            $myfile = fopen($fileName, "w") or die("Unable to create file:" . $fileName);
        } else {
            die("File:" . $fileName . " already exists. One file contains: one field and resulting short path!");
        }
        $data = ["field" => $field, "attempt" => $resultOfAttempt, "start" => $start, "end" => $end];
        $serData = serialize($data);
        fwrite($myfile, $serData);
        fclose($myfile);
    }
    public static function readAttemptFromFile(string $fileName)
    {
        if (!file_exists($fileName)) {
            die("File:" . $fileName . " doesn't exists:");
        } else {
            $myfile = fopen($fileName, "r") or die("Unable to open file:" . $fileName);
            $data = unserialize(fread($myfile, filesize($fileName)));
            return ShortestPathBetweenCellsBFS::printTaskAndSolution($data);
            fclose($myfile);
        }
    }

    private static function printTaskAndSolution($data)
    {
        $retrievedField = $data["field"];
        $resultStr = "Field: ";
        foreach ($retrievedField as $row) {
            $resultStr .= "<br>";
            foreach ($row as $col) {
                $resultStr .= $col . " ";
            }
        }
        $resultStr .= "<br>";
        $retrievedSrcCell = $data["start"];
        $resultStr .= "Source cell: (x = " . $retrievedSrcCell[0] . ", y = " . $retrievedSrcCell[1] . ")" . '<br>';
        $retrievedDestCell = $data["end"];
        $resultStr .= "Destination cell: (x = " . $retrievedDestCell[0] . ", y = " . $retrievedDestCell[1] . ")" . '<br>';
        $retrievedAttempt = $data["attempt"];
        $resultStr .= "Shortest path:";
        if (empty($retrievedAttempt)) {
            $resultStr .= "There is no path.";
        }
        foreach ($retrievedAttempt as $attempt) {
            $resultStr .= $attempt;
        }
        return $resultStr;
    }
}

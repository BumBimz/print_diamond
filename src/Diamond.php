<?php
class Diamond
{
    public function create($input)
    {
        $result = "";
        $bottomLine = "";
        for ($start = "A"; $start <= $input; $start++) {
            $line = $this->buildLine($start, $input);
            $result .= $line;
            if ($start != $input) {
                $bottomLine = $line . $bottomLine;
            }
        }
        return $result . $bottomLine;
    }
    public function buildLine($start, $input)
    {
        $line = "";
        if ($input != "A") {
            $line = " ";
        }
        if ($start == 'A') {
            $line .= $start;
        } else {
            $line = $start . " " . $start;
        }
        return $line .= "\n";
    }
}

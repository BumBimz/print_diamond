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
        $line = "" . $start;
        if ($start != 'A') {
            $line .= $input;
        }
        return $line .= "\n";
    }
}

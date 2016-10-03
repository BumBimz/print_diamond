<?php
class Diamond
{
    public function create($input)
    {
        $result = "";
        $bottomLine = "";
        for ($start = "A"; $start <= $input; $start++) {
            $line = "" . $start;
            if ($start != 'A') {
                $line .= $input;
            }
            $line .= "\n";
            $result .= $line;
            if ($start != $input) {
                $bottomLine = $line . $bottomLine;
            }
        }
        return $result . $bottomLine;
    }

}

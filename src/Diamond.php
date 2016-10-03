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

    private function buildLine($start, $input)
    {
        $line = "";
        $line .= $this->addSpace(ord($input) - ord($start));
        $line .= $start;
        if ($start != "A") {
            $line .= " " . $start;
        }
        return $line .= "\n";
    }

    private function addSpace($count)
    {
        $result = "";
        for ($i = 0; $i < $count; $i++) {
            $result .= " ";
        }
        return $result;
    }
}

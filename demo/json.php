<?php


class json
{

    public function __toString(): string
    {
        return json_encode(['a' => 111]);
    }

}

echo new json();
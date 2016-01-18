<?php

namespace DraperStudio\Payload;

use DraperStudio\Payload\Normalisers\CsvNormaliser;

class Csv
{
    protected $normaliser;

    public function __construct()
    {
        $this->normaliser = new CsvNormaliser();
    }

    public function serialise($input)
    {
        return $this->normaliser->serialiser()->serialise($input);
    }

    public function unserialise($input, $class = null)
    {
        return $this->normaliser->unserialiser()->unserialise($input, $class);
    }

    public function write($path, $input)
    {
        return $this->normaliser->writer()->write($path, $input);
    }

    public function read($path, $class = null)
    {
        return $this->normaliser->reader()->read($path, $class);
    }
}

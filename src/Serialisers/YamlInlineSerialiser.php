<?php

namespace DraperStudio\Payload\Serialisers;

use DraperStudio\Payload\Contracts\Serialiser;
use Symfony\Component\Yaml\Dumper;

class YamlInlineSerialiser implements Serialiser
{
    public function serialise($input)
    {
        return (new Dumper())->dump($input, true);
    }
}

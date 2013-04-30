<?php

namespace spec\SwimDB\Uploader;

use PHPSpec2\ObjectBehavior;

class FdapReader extends ObjectBehavior
{
    function it_should_be_initializable()
    {
        $this->shouldHaveType('SwimDB\Uploader\FdapReader');
    }
}

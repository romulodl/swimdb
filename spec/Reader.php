<?php

namespace spec\SwimDB\Uploader;

use PHPSpec2\ObjectBehavior;

class Reader extends ObjectBehavior
{
    function it_should_be_initializable()
    {
        $this->shouldHaveType('SwimDB\Uploader\Reader');
    }

    function it_should_convert_pdf_to_txt()
    {
        $file = __DIR__ . "/files/test.pdf";
        $this->convert_pdf_to_txt($file)->shouldReturn(true);
    }
}

<?php

namespace spec\App\Http\Middleware;

use App\Http\Middleware\VerifyCsrfToken;
use Illuminate\Contracts\Encryption\Encrypter;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class VerifyCsrfTokenSpec extends ObjectBehavior
{
    function let(Encrypter $encrypter)
    {
        $this->beConstructedWith($encrypter);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(VerifyCsrfToken::class);
    }
}

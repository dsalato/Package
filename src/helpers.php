<?php
namespace Session;

function sessions(array $array = []): Session
{
    return new Session($array);
}

<?php

interface LightableInterface
{
    public function switchOn($currentSpeed): bool;
    public function switchOff(): bool;
}
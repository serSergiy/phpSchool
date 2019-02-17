<?php

interface IQueue
{
    public function in($value);
    public function out();
}
<?php


namespace Wandxx\Support\Interfaces;


interface DefaultRequestInterface
{
    public function authorize(): bool;

    public function rules(): array;

    public function data(): array;
}
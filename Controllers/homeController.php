<?php

class homeController extends Controller
{
    public function index()
    {
        $this->carregarTamplete('home');
    }
}
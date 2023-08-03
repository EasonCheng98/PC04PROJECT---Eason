<?php

namespace App\Controllers;

class Frontend extends BaseController
{
    public function Home()
    {
        return view('home');
    }

    public function FoundItemForm()
    {
        return view('found_item_form');
    }
}

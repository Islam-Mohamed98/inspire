<?php
namespace IslamMohamed98\Inspire\Controllers;

use Illuminate\Http\Request;
use IslamMohamed98\Inspire\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire) {
        $quote = $inspire->justDoIt();

        return view('inspire::index', compact('quote'));
    }
}
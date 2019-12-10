<?php

namespace App\Http\View\Composers;

use Illuminate\Contracts\View\View;

class TestComposer{
    public function compose(View $view){
        $view->with('count', 6);
    }
}

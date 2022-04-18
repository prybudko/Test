<?php

use App\Models\Call;

class Test
{
    public function awd()
    {
        echo '<pre>';
        print_r(434);
        echo '</pre>';
        echo '23';
    }

    public function test()
    {
        $call = Call::filter($request->all())
            ->with(['staff', 'company', 'status', 'user', 'internalUser'])
            ->where('id', $id)
            ->first();
        $call = Call::filter($request->all())
            ->with(['staff', 'company', 'status', 'user', 'internalUser'])
            ->where('id', $id)
            ->first(); // now will workwesf
    }

    public function testtest()
    {
        echo 4;
    }
}

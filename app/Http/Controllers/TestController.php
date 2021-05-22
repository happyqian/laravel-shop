<?php

namespace App\Http\Controllers;

use App\Events\OrderPaid;
use App\Models\Order;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        echo "start <br />";
        $order = Order::find(14);
        event(new OrderPaid($order));
        echo 'end<br />';
    }
}

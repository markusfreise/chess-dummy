<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function move( Request $request )
    {
        
        $pos_x = strtolower($request->input('x'));
        $pos_y = $request->input('y');

        if($pos_x < "a" || $pos_x > "h" || $pos_y < 1 || $pos_y > 8)
        {
            return response()->json([
                "error" => "Invalid position"
            ]);
        }

        $pieces = [
            "queen_white" => [
                "position" => [
                    "x" => $pos_x,
                    "y" => $pos_y
                ]
            ]
        ];

        return response()->json($pieces);

    }
}

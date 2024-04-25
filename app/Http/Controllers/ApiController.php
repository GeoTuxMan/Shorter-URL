<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{


    public function LinkShort(Request $request) {

        function generateUniqueCode($length = 8) {
            // Generate unique code
            $uniqid = uniqid();

            // get first 13 chars
            $code = substr($uniqid, 0, 13);

            // Add random chars
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            $max = strlen($characters) - 1;
            for ($i = 0; $i < $length - 13; $i++) {
                $code .= $characters[mt_rand(0, $max)];
            }

            return $code;
        }

        //1 get longlink
$name = $request->input('input_name');


        //2 generating  a unique shortlink
        $uniqueCode = generateUniqueCode(10);
        //echo $uniqueCode;
        //3 insert in DB; if first arg exist:update, else: insert
        DB::table('shorturl')
    ->updateOrInsert(
        ['longlink' => $name],
        ['shortlink' => $uniqueCode]
    );
   // 4 select shortlink
    $result = DB::table('shorturl')
    ->select('longlink','shortlink')
    ->where('longlink', $name)
    ->first();

    return view('welcome', ['result' => $result]);



    }
}

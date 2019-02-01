<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public const TASK_OK = 0;
	public const TASK_UNAUTH = 401;
    public const TASK_FAIL = 500;

    public function __construct(){}

    public function returnInfo(int $code, string $message, array $result = [])
    {
        $data = array(
            'code' => $code,
            'message' => $message,
            'result' => $result,
        );
        return response()->json($data);
    }
}

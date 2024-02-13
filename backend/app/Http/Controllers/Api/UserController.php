<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;

class UserController extends Controller
{
    public function createUserPDF()
    {
        // Example Data
        $data = [
            'name' => 'Smith',
            'age'  => '24',
            'role' => 'Admin'
        ];

        $pdf = Pdf::loadView('user-pdf', compact('data'));

        return $pdf->download('user_report.pdf');
    }
}

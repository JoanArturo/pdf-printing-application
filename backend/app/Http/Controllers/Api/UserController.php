<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Mccarlosen\LaravelMpdf\Facades\LaravelMpdf as PDF;

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

        $pdf = PDF::loadView('pdfs.user', compact('data'), [], [
                'show_watermark_image' => true,
                'watermark_image_path' => 'img/logo.png',
                'watermark_image_size' => [100, 100],
            ]
        );

        return $pdf->download('user_report.pdf');
    }
}

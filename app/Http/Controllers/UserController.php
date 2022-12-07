<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class UserController extends Controller
{
    public function exportPdf(){

        $users = DB::table('tb_usuarios') ->get();
        $pdf = PDF::loadView('pdf.users', compact('users'));

        return $pdf->download('user-list.pdf');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;


class AdminController extends Controller
{
    //
    public function index()
    {
        $data = db::select(
            "
            select * from laporans l where l.status_laporan = 1
            "
        );

        $data2 = db::select(
            "
            select * from laporans l where l.status_laporan = 0
            "
        );

        return view("pengajuan", ["data" => $data], ["data2" => $data2]);
    }

    public function ditemukan()
    {
        $data = db::select(
            "
            select * from laporans l where l.status_laporan = 2 and l.status = 'ditemukan'
            "
        );

        return view("ditemukan", ["data" => $data]);
    }

    public function dicari()
    {
        $data = db::select(
            "
            select * from laporans l where l.status_laporan = 2 and l.status = 'dicari'
            "
        );

        return view("kehilangan", ["data" => $data]);
    }

    public function postingan()
    {
        $data = db::select(
            "
            select * from laporans l where l.status_laporan = 2 
            "
        );

        return view("postingan", ["data" => $data]);
    }

    public function postingan_selesai()
    {
        $data = db::select(
            "
            select * from laporans l where l.status_laporan = 3 
            "
        );

        return view("postingan_selesai", ["data" => $data]);
    }
}

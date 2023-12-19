<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class AtkController extends Controller
{
    public function __construct()
    {
        helper('form'); // Memuat Form Helper
    }

    public function index()
    {
        // Logika untuk menampilkan daftar ATK
    }

    public function add()
    {
        echo view('atk_form');
    }

    public function save()
    {
        // Logika untuk menyimpan data ATK
    }
}

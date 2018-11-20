<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('admin/login/login');
    }

    public function index()
    {
    	return view('admin/index');
    }

    public function inbox()
    {
        return view('admin/inbox');
    }

    public function inbox_detail()
    {
        return view('admin/inbox_detail');
    }

     public function transaksi()
    {
        return view('admin/transaksi');
    }

     public function transaksi_detail()
    {
        return view('admin/transaksi_detail');
    }

     public function user()
    {
        return view('admin/user');
    }

     public function user_detail()
    {
        return view('admin/user_detail');
    }

     public function mitra()
    {
        return view('admin/mitra');
    }

     public function mitra_detail()
    {
        return view('admin/mitra_detail');
    }

     public function kategori()
    {
        return view('admin/kategori');
    }

     public function add_kategori()
    {
        return view('admin/add_kategori');
    }

     public function edit_kategori()
    {
        return view('admin/edit_kategori');
    }

     public function admin()
    {
        return view('admin/admin');
    }

     public function add_admin()
    {
        return view('admin/add_admin');
    }

     public function edit_admin()
    {
        return view('admin/edit_admin');
    }
}

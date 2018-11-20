<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', 'AdminController@index')->name('index');

Route::get('/admin/index', 'AdminController@index')->name('index');

Route::get('/admin/login', 'AdminController@login');

Route::get('/admin/inbox', 'AdminController@inbox')->name('inbox');

Route::get('/admin/inbox_detail', 'AdminController@inbox_detail')->name('inbox_detail');

Route::get('admin/transaksi', 'AdminController@transaksi')->name('transaksi');

Route::get('admin/transaksi_detail', 'AdminController@transaksi_detail')->name('transaksi_detail');

Route::get('admin/user', 'AdminController@user')->name('user');

Route::get('admin/user_detail', 'AdminController@user_detail')->name('user_detail');

Route::get('admin/mitra', 'AdminController@mitra')->name('mitra');

Route::get('admin/mitra_detail', 'AdminController@mitra_detail')->name('mitra_detail');

Route::get('admin/kategori', 'AdminController@kategori')->name('kategori');

Route::get('admin/add_kategori', 'AdminController@add_kategori')->name('add_kategori');

Route::get('admin/edit_kategori', 'AdminController@edit_kategori')->name('edit_kategori');

Route::get('admin/admin', 'AdminController@admin')->name('admin');

Route::get('admin/add_admin', 'AdminController@add_admin')->name('add_admin');

Route::get('admin/edit_admin', 'AdminController@edit_admin')->name('edit_admin');
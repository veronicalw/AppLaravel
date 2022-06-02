<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    //
    protected $table = 'tb_peminjaman_tb';
    protected $fillable = ['ketua_kegiatan','email','lab','level','perangkat','keterangan','tanggal_mulai','tanggal_selesai','jam_mulai','jam_selesai','daftar_nama','dosen_pembina','keperluan','kontak_ketua','dosen_pembina','app_laboran','app_kalab','app_kajur','app_pudir'];
    public $timestamps = false;
    protected $primaryKey = 'id';
}

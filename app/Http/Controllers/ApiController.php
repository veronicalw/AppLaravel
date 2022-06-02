<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pinjam;
use App\Mhs;
use App\Notif;
class ApiController extends Controller
{
    //

    public function loginMhs($nim){
        
    }
    public function registerMhs(Request $request){
        $mhs = new Mhs;
        $mhs->nim = $request->nim;
        $mhs->namaMhs = $request->namaMhs;
        $mhs->emailMhs = $request->emailMhs;
        $mhs->password = $request->password;
        $mhs->save();

        return response()->json([
        "message" => "Successfully Registered!"
    ], 201);
    }
    public function getAllPinjam(){
    	$pinjam = Pinjam::get()->toJson(JSON_PRETTY_PRINT);
    	return response($pinjam, 200);
    }
    public function storePinjam(Request $request){
    	$pinjam = new Pinjam;
    	$pinjam->ketua_kegiatan = $request->ketua_kegiatan;
        $pinjam->email = $request->email;
    	$pinjam->lab = $request->lab;
    	$pinjam->level = $request->level;
        $pinjam->perangkat = $request->perangkat;
        $pinjam->keterangan = $request->keterangan;
    	$pinjam->tanggal_mulai = $request->tanggal_mulai;
    	$pinjam->tanggal_selesai = $request->tanggal_selesai;
    	$pinjam->jam_mulai = $request->jam_mulai;
    	$pinjam->jam_selesai = $request->jam_selesai;
    	$pinjam->daftar_nama = $request->daftar_nama;
    	$pinjam->keperluan = $request->keperluan;
    	$pinjam->kontak_ketua = $request->kontak_ketua;
        $pinjam->dosen_pembina = $request->dosen_pembina;
    	$pinjam->app_laboran = $request->app_laboran;
    	$pinjam->app_kalab = $request->app_kalab;
    	$pinjam->app_kajur = $request->app_kajur;
    	$pinjam->app_pudir = $request->app_pudir;
    	$pinjam->save();

    	return response()->json([
        "message" => "Pengajuan Berhasil!"
    ], 201);
    }
    public function getPinjam($id){
    	if(Pinjam::where('id',$id)->exists()){
    		$pinjam = Pinjam::where('id',$id)->get()->toJson(JSON_PRETTY_PRINT);
    		return response($pinjam,200);
    	}
    }
    public function updatePinjam(Request $request, $id){
    	if(Pinjam::where('id',$id)->exists()){
    		$pinjam = Pinjam::find($id);
    		$pinjam->ketua_kegiatan = is_null($request->ketua_kegiatan) ? $pinjam->ketua_kegiatan : $request->ketua_kegiatan;
            $pinjam->email = is_null($request->email) ? $pinjam->email : $request->email;
    		$pinjam->lab = is_null($request->lab) ? $pinjam->lab : $request->lab;
    		$pinjam->level = is_null($request->level) ? $pinjam->level : $request->level;
            $pinjam->perangkat = is_null($request->perangkat) ? $pinjam->perangkat : $request->perangkat;
            $pinjam->keterangan = is_null($request->keterangan) ? $pinjam->keterangan : $request->keterangan;
    		$pinjam->tanggal_mulai = is_null($request->tanggal_mulai) ? $pinjam->tanggal_mulai : $request->tanggal_mulai;
    		$pinjam->tanggal_selesai = is_null($request->tanggal_selesai) ? $pinjam->tanggal_selesai : $request->tanggal_selesai;
    		$pinjam->jam_mulai = is_null($request->jam_mulai) ? $pinjam->jam_mulai : $request->jam_mulai;
    		$pinjam->jam_selesai = is_null($request->jam_selesai) ? $pinjam->jam_selesai : $request->jam_selesai;
    		$pinjam->daftar_nama = is_null($request->daftar_nama) ? $pinjam->daftar_nama : $request->daftar_nama;
    		$pinjam->keperluan = is_null($request->keperluan) ? $pinjam->keperluan : $request->keperluan;
    		$pinjam->kontak_ketua = is_null($request->kontak_ketua) ? $pinjam->kontak_ketua : $request->kontak_ketua;
            $pinjam->dosen_pembina = is_null($request->dosen_pembina) ? $pinjam->dosen_pembina : $request->dosen_pembina;
    		$pinjam->app_laboran = is_null($request->app_laboran) ? $pinjam->app_laboran : $request->app_laboran;
    		$pinjam->app_kalab = is_null($request->app_kalab) ? $pinjam->app_kalab : $request->app_kalab;
    		$pinjam->app_kajur = is_null($request->app_kajur) ? $pinjam->app_kajur : $request->app_kajur;
    		$pinjam->app_pudir = is_null($request->app_pudir) ? $pinjam->app_pudir : $request->app_pudir;
    		$pinjam->save();
    		return response()->json([
            "message" => "Perubahan Berhasil DiLakukan!"
        ], 200);
    	} else {
        return response()->json([
            "message" => "Pinjam not found"
        ], 404);
    }
	}
    public function deletePinjam($id){
    	$pinjam = Pinjam::find($id);
    	$pinjam->delete();
    	return "Data Berhasil diHapus";
    }
    public function storeTokenExpo(Request $request){
        $expo = new Notif;
        $expo->token_expo = $request->token_expo;
        $expo->save();
    }
    public function getToken(){
        $expo = Notif::get()->toJson(JSON_PRETTY_PRINT);
        return response($expo, 200);
    }
}

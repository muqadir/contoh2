<?php

namespace App\Http\Controllers;
// use App\Contact;

use Illuminate\Http\Request;
use App\Models\Antianpoli;
use DB;
use PDF;
use Carbon\Carbon;
use charlieuki\ReceiptPrinter\ReceiptPrinter as ReceiptPrinter;



class AmbilAntrianController extends Controller
{
    public function index()
    {
        // return 'ambil nomor antri';
        return view('antri.nomor');
    }



        public function amampoli (Request $request){
            
//    dd(Carbon::now()->format('d-m-Y H:i:s'));
            $request->validate([
                "name" => "required"
              
            ]);
         
            // DB::table("antianpolis")->insert([
            //     "name" => $request->name,
            //     "created_at" => Carbon::now(),
            // ]);

            $antrianId = DB::table('antianpolis')->insertGetId(
                [ 
                    "name" => $request->name,
                    "created_at" => Carbon::now(),
                 ]
            );

            $antrianB = DB::table('antianpolis')->where('id',$antrianId)->first();


            
             // Set params
       
        $instansi = 'RUMAH SAKIT JIWA ACEH';
        $address = 'Jln Prof Dr. Syarief Thayeb No. 24 ';
        $phone = 'Telp : (0651)-32010';
        $namaantrian = $antrianB->name; 
        $noantrian = $antrianB->id; 
        $tanggal = $antrianB->created_at;
        

        // Init printer
        $printer = new ReceiptPrinter;
        $printer->init(
            config('receiptprinter.connector_type'),
            config('receiptprinter.connector_descriptor')
        );

        // // Set store info
        // $printer->setAntrian($store_name, $store_address, $store_phone, $store_email, $store_website);

        $printer->setAntrian($instansi, $address, $phone, $namaantrian, $noantrian, $tanggal);

        
        // // Print receipt
        $printer->printAntrian();
            
        return redirect()->back();
        }



        

        
}

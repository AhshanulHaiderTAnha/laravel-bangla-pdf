<?php

namespace App\Http\Controllers;

use App\Services\PdfService;
use Illuminate\Http\Request;
use Mccarlosen\LaravelMpdf\Facades\LaravelMpdf as PDF;
use Mpdf\MpdfException;

class CLHGPDFController extends Controller
{
    public function showBanglaPdf(){
        // $data["paragraphContent"] = (new PdfService())->getPdfContents();
        $data["paragraphContent"] = "আমানতকারীদের স্বার্থ রক্ষা করতে বেসরকারি ব্যাংকের স্বতন্ত্র পরিচালকের ব্যবস্থা করা হয়েছিল। এই নীতি মেনে সব ব্যাংকই স্বতন্ত্র পরিচালক নিয়োগ দিয়েছে। কিন্তু ব্যাংকাররাই এখন তাঁদের বলছেন, ‘ভাই-মামাতো ভাই’। অর্থাৎ তাঁরা মালিকদেরই ঘনিষ্ঠ বা আস্থাভাজন। আর বেশির ভাগ ক্ষেত্রে তাঁরা মালিকদেরই স্বার্থ দেখছেন।

        ফলে প্রশ্ন উঠেছে, বেসরকারি ব্যাংকের স্বতন্ত্র পরিচালকদের ভূমিকা নিয়ে। কারণ, স্বতন্ত্র পরিচালক থাকার পরও কয়েকটি ব্যাংক নামে-বেনামে ও কাগুজে কোম্পানির নামে ঋণ দিয়েছে। এতে তারল্যসংকটে পড়েছে এসব ব্যাংক। আর আমানতকারীরা স্বস্তি পাওয়ার বদলে আতঙ্কগ্রস্ত হয়েছেন। এর প্রভাব পড়েছে পুরো ব্যাংক খাতে। সব মিলিয়ে স্বতন্ত্র পরিচালক হিসেবে কাদের নিয়োগ দিচ্ছে ব্যাংকগুলো, সে আলোচনাও এখন নতুন করে শুরু হয়েছে।";

        $pdf = PDF::loadView('pdf.pdf-read', $data);

         $pdf->stream('YourPdfRename.pdf');
         return $pdf->download('pdxf.pdf');
    }
}

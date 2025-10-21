<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'ad'=>'required|string|max:50',
            'soyad'=>'required|string|max:50',
            'yas'=>'required|integer|min:18',
            'cinsiyet'=>'required',
            'email'=>'required|email',
            'telefon'=>'required|string',
            'adres'=>'required|string',
            'medeni_durum'=>'required',
            'egitim_durumu'=>'required',
            'okul_adi'=>'required',
            'mezuniyet_yili'=>'required|integer',
            'hobiler'=>'required',
            'sigara'=>'required',
            'alkol'=>'required',
            'dil'=>'required',
            'programlama'=>'required',
            'bilgisayar_bilgisi'=>'required',
            'surucu_belgesi'=>'required',
            'askerlik'=>'required',
            'referans_adi'=>'required',
            'referans_tel'=>'required',
            'pozisyon'=>'required',
            'calisma_suresi'=>'required',
            'maas_beklentisi'=>'required',
            'ek_bilgiler'=>'required',
            'dogum_tarihi'=>'required|date',
            'tc'=>'required|string',
            'sirket_adi'=>'required',
            'departman'=>'required',
            'linkedin'=>'required|url',
            'github'=>'required|url',
            'linkedin'=>'required|url',
            'ulke'=>'required',
            'sehir'=>'required',
            'ilce'=>'required',
            'posta_kodu'=>'required',
            'telefon2'=>'required',
            'acil_kisi'=>'required',
            'acil_telefon'=>'required',
            'sifre'=>'required|string|min:6|confirmed',
        ]);

        return back()->with('success', 'Başvurunuz başarıyla gönderildi!');
    }
}

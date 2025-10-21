<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>İnsan Kaynakları Başvuru Formu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            padding: 30px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        form {
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            max-width: 900px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin-top: 12px;
            font-weight: bold;
            color: #333;
        }
        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 6px;
            transition: border-color 0.3s;
        }
        input.error, select.error, textarea.error {
            border-color: red;
        }
        .inline {
            display: inline-block;
            margin-right: 15px;
        }
        button {
            margin-top: 20px;
            background: #3490dc;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background: #2779bd;
        }
        small {
            color: red;
        }
        .success {
            text-align: center;
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2>İnsan Kaynakları Başvuru Formu</h2>

@if(session('success'))
    <p class="success">{{ session('success') }}</p>
@endif

<form action="{{ route('form.submit') }}" method="POST">
    @csrf

    <!-- Kişisel Bilgiler -->
    <h3>Kişisel Bilgiler</h3>

    <label>Ad:</label>
    <input type="text" name="ad" value="{{ old('ad') }}" class="@error('ad') error @enderror">
    @error('ad') <small>{{ $message }}</small> @enderror

    <label>Soyad:</label>
    <input type="text" name="soyad" value="{{ old('soyad') }}" class="@error('soyad') error @enderror">
    @error('soyad') <small>{{ $message }}</small> @enderror

    <label>Yaş:</label>
    <input type="number" name="yas" value="{{ old('yas') }}" class="@error('yas') error @enderror">
    @error('yas') <small>{{ $message }}</small> @enderror

    <label>Cinsiyet:</label>
    <div class="inline"><input type="radio" name="cinsiyet" value="Erkek" {{ old('cinsiyet')=='Erkek'?'checked':'' }}> Erkek</div>
    <div class="inline"><input type="radio" name="cinsiyet" value="Kadın" {{ old('cinsiyet')=='Kadın'?'checked':'' }}> Kadın</div>
    @error('cinsiyet') <small>{{ $message }}</small> @enderror

    <label>Doğum Tarihi:</label>
    <input type="date" name="dogum_tarihi" value="{{ old('dogum_tarihi') }}" class="@error('dogum_tarihi') error @enderror">
    @error('dogum_tarihi') <small>{{ $message }}</small> @enderror

    <label>TC Kimlik No:</label>
    <input type="text" name="tc" value="{{ old('tc') }}" class="@error('tc') error @enderror">
    @error('tc') <small>{{ $message }}</small> @enderror

    <label>E-posta:</label>
    <input type="email" name="email" value="{{ old('email') }}" class="@error('email') error @enderror">
    @error('email') <small>{{ $message }}</small> @enderror

    <label>Telefon (1):</label>
    <input type="text" name="telefon" value="{{ old('telefon') }}" class="@error('telefon') error @enderror">
    @error('telefon') <small>{{ $message }}</small> @enderror

    <label>Telefon (2):</label>
    <input type="text" name="telefon2" value="{{ old('telefon2') }}" class="@error('telefon2') error @enderror">
    @error('telefon2') <small>{{ $message }}</small> @enderror

    <label>Adres:</label>
    <textarea name="adres" class="@error('adres') error @enderror">{{ old('adres') }}</textarea>
    @error('adres') <small>{{ $message }}</small> @enderror

    <label>Ülke:</label>
    <input type="text" name="ulke" value="{{ old('ulke') }}" class="@error('ulke') error @enderror">
    @error('ulke') <small>{{ $message }}</small> @enderror

    <label>Şehir:</label>
    <input type="text" name="sehir" value="{{ old('sehir') }}" class="@error('sehir') error @enderror">
    @error('sehir') <small>{{ $message }}</small> @enderror

    <label>İlçe:</label>
    <input type="text" name="ilce" value="{{ old('ilce') }}" class="@error('ilce') error @enderror">
    @error('ilce') <small>{{ $message }}</small> @enderror

    <label>Posta Kodu:</label>
    <input type="text" name="posta_kodu" value="{{ old('posta_kodu') }}" class="@error('posta_kodu') error @enderror">
    @error('posta_kodu') <small>{{ $message }}</small> @enderror

    <label>Medeni Durum:</label>
    <select name="medeni_durum" class="@error('medeni_durum') error @enderror">
        <option value="">Seçiniz</option>
        <option value="Bekar" {{ old('medeni_durum')=='Bekar'?'selected':'' }}>Bekar</option>
        <option value="Evli" {{ old('medeni_durum')=='Evli'?'selected':'' }}>Evli</option>
    </select>
    @error('medeni_durum') <small>{{ $message }}</small> @enderror

    <!-- Eğitim -->
    <h3>Eğitim Bilgileri</h3>

    <label>Eğitim Durumu:</label>
    <select name="egitim_durumu" class="@error('egitim_durumu') error @enderror">
        <option value="">Seçiniz</option>
        <option value="Lise">Lise</option>
        <option value="Üniversite">Üniversite</option>
        <option value="Yüksek Lisans">Yüksek Lisans</option>
    </select>
    @error('egitim_durumu') <small>{{ $message }}</small> @enderror

    <label>Okul Adı:</label>
    <input type="text" name="okul_adi" value="{{ old('okul_adi') }}" class="@error('okul_adi') error @enderror">
    @error('okul_adi') <small>{{ $message }}</small> @enderror

    <label>Mezuniyet Yılı:</label>
    <input type="number" name="mezuniyet_yili" value="{{ old('mezuniyet_yili') }}" class="@error('mezuniyet_yili') error @enderror">
    @error('mezuniyet_yili') <small>{{ $message }}</small> @enderror

    <label>Yabancı Diller:</label>
    <input type="text" name="dil" value="{{ old('dil') }}" class="@error('dil') error @enderror">
    @error('dil') <small>{{ $message }}</small> @enderror

    <label>Bilgisayar Bilgisi:</label>
    <textarea name="bilgisayar_bilgisi" class="@error('bilgisayar_bilgisi') error @enderror">{{ old('bilgisayar_bilgisi') }}</textarea>
    @error('bilgisayar_bilgisi') <small>{{ $message }}</small> @enderror

    <!-- İş Bilgileri -->
    <h3>İş Deneyimi</h3>

    <label>Çalıştığınız Şirket Adı:</label>
    <input type="text" name="sirket_adi" value="{{ old('sirket_adi') }}" class="@error('sirket_adi') error @enderror">
    @error('sirket_adi') <small>{{ $message }}</small> @enderror

    <label>Departman:</label>
    <input type="text" name="departman" value="{{ old('departman') }}" class="@error('departman') error @enderror">
    @error('departman') <small>{{ $message }}</small> @enderror

    <label>Pozisyon:</label>
    <input type="text" name="pozisyon" value="{{ old('pozisyon') }}" class="@error('pozisyon') error @enderror">
    @error('pozisyon') <small>{{ $message }}</small> @enderror

    <label>Çalışma Süresi:</label>
    <input type="text" name="calisma_suresi" value="{{ old('calisma_suresi') }}" class="@error('calisma_suresi') error @enderror">
    @error('calisma_suresi') <small>{{ $message }}</small> @enderror

    <label>Maaş Beklentisi:</label>
    <input type="number" name="maas_beklentisi" value="{{ old('maas_beklentisi') }}" class="@error('maas_beklentisi') error @enderror">
    @error('maas_beklentisi') <small>{{ $message }}</small> @enderror

    <!-- Ek Bilgiler -->
    <h3>Ek Bilgiler</h3>

    <label>Hobiler:</label>
    <textarea name="hobiler" class="@error('hobiler') error @enderror">{{ old('hobiler') }}</textarea>
    @error('hobiler') <small>{{ $message }}</small> @enderror

    <label>Sigara Kullanımı:</label>
    <select name="sigara" class="@error('sigara') error @enderror">
        <option value="">Seçiniz</option>
        <option value="Evet">Evet</option>
        <option value="Hayır">Hayır</option>
    </select>
    @error('sigara') <small>{{ $message }}</small> @enderror

    <label>Alkol Kullanımı:</label>
    <select name="alkol" class="@error('alkol') error @enderror">
        <option value="">Seçiniz</option>
        <option value="Evet">Evet</option>
        <option value="Hayır">Hayır</option>
    </select>
    @error('alkol') <small>{{ $message }}</small> @enderror

    <label>LinkedIn Profili:</label>
    <input type="url" name="linkedin" value="{{ old('linkedin') }}" class="@error('linkedin') error @enderror">
    @error('linkedin') <small>{{ $message }}</small> @enderror

    <label>GitHub Profili:</label>
    <input type="url" name="github" value="{{ old('github') }}" class="@error('github') error @enderror">
    @error('github') <small>{{ $message }}</small> @enderror

    <label>Acil Durumda Aranacak Kişi:</label>
    <input type="text" name="acil_kisi" value="{{ old('acil_kisi') }}" class="@error('acil_kisi') error @enderror">
    @error('acil_kisi') <small>{{ $message }}</small> @enderror

    <label>Acil Kişi Telefon:</label>
    <input type="text" name="acil_telefon" value="{{ old('acil_telefon') }}" class="@error('acil_telefon') error @enderror">
    @error('acil_telefon') <small>{{ $message }}</small> @enderror

    <label>Referans Adı:</label>
    <input type="text" name="referans_adi" value="{{ old('referans_adi') }}" class="@error('referans_adi') error @enderror">
    @error('referans_adi') <small>{{ $message }}</small> @enderror

    <label>Referans İletişim:</label>
    <input type="text" name="referans_tel" value="{{ old('referans_tel') }}" class="@error('referans_tel') error @enderror">
    @error('referans_tel') <small>{{ $message }}</small> @enderror

    <label>Ek Bilgiler:</label>
    <textarea name="ek_bilgiler" class="@error('ek_bilgiler') error @enderror">{{ old('ek_bilgiler') }}</textarea>
    @error('ek_bilgiler') <small>{{ $message }}</small> @enderror

    <label>Şifre:</label>
    <input type="password" name="sifre" class="@error('sifre') error @enderror">
    @error('sifre') <small>{{ $message }}</small> @enderror

    <label>Şifre (Tekrar):</label>
    <input type="password" name="sifre_confirmation">

    <button type="submit">Başvuruyu Gönder</button>
</form>

</body>
</html>

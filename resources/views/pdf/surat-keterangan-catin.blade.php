<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Surat Keterangan</title>
    <style>
        @page {
            margin: 0;
            size: A4;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, Helvetica, sans-serif;
            padding: 1.6cm 2.5cm;
            font-size: 14px;
            line-height: 1;
        }

        .noreg {
           text-align: right;
           margin-bottom: 20px;
        }
        
        /* Header dengan logo */
        .header {
            color: black;
            text-align: center;
            border-bottom: 3px solid #000000;
            padding-bottom: 6px;
            margin-bottom: 20px;
            position: relative;
            min-height: 100px;
            line-height: 1.2;
        }

        .header .logo-container {
            position: relative;
            bottom: 0px
            /* height: 10px; */
            /* margin-bottom: 5px; */
        }

        .header img {
            position: absolute;
            width: 80px;
            /* height: 80px; */
            object-fit: cover;
        }

        .header .logo-left {
            position: absolute;
            left: 0;
            top: 0;
        }
        
        .header .logo-right {
            position: absolute;
            right: 0;
            top: 0;
        }

        .header .uptd {
            font-size: 20px;=
            font-weight: bold;
            color: black;
            /* margin: 3px 0; */
        }
        
        .header .alamat {
            font-size: 14px;
            color: black;
        }
        
        .header h2 {
            color: rgba(0, 0, 0, 0.768);
            /* margin: 5px 0; */
            font-size: 14px;
            font-weight: bold;
        }
        
        .header p {
            font-size: 11px;
            /* margin: 2px 0; */
            color: black;
        }

        .header a {
            /* color: black; */
            text-decoration: none;
        }
        
        /* Title */
        .title {
            text-align: center;
            margin: 15px 0;
        }

        .title .kepala {
            font-weight: bold;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .title .nomor {
            color: #101010;
            font-size: 14px;
        }

        /* Sub Title */
        .sub-title {
            text-align: justify;
            /* margin: 15px 0; */
            line-height: 1.4;
        }

        /* Content */
        .content {
            /* padding: 0 25px; */
            /* margin: 15px 0; */
        }
        
        .section {
            margin-bottom: 20px;
        }
        
        .section-title {
            color: black;
            /* font-size: 13px; */
            margin-bottom: 10px;
            font-weight: bold;
        }
        
        /* Data Row - Gunakan table untuk kompatibilitas DomPDF */
        .data-row {
            margin: 5px 0;
            width: 100%;
            page-break-inside: avoid;
        }
        
        .data-row table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .data-label {
            width: 180px;
            vertical-align: top;
            padding: 2px 0;
        }
        
        .data-value {
            vertical-align: top;
            padding: 2px 0;
        }

        .catatan-list {
            margin-top: 15px;
        }

        .catatan-list .dengancatatan {
            margin: 2px 0;
        }
        .catatan-list p {
            /* margin: 3px 0; */
            line-height: 1.2;
        }
        
        .font-bold {
            font-weight: bold;
        }
        
        .underline {
            text-decoration: underline;
        }

        .keperluan-section {
            /* margin: 20px 0; */
            /* line-height: 1.6; */
        }

        .keperluan-section p {
            margin: 8px 0;
        }

        /* Signature - Gunakan table untuk positioning */
        .signature {
            margin-top: 30px;
            margin-right: 0px;
            width: 100%;
        }

        .signature .table-right {
            position: relative;
        }
        
        .signature table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .signature-box {
            position: absolute;
            right: 0;
            /* border: 2px#000000 ; */
            border-width: 2px;
            border: black;
            text-align: left;
            vertical-align: right;
        }

        .signature-title {
            /* font-size: 12px; */
            margin-bottom: 60px;
            line-height: 1.5;
        }
        
        .signature-name {
            font-weight: bold;
            /* font-size: 12px; */
            margin: 2px 0;
        }
        
        .signature-id {
            /* font-size: 11px; */
            margin: 2px 0;
        }

        .signature-logo {
            margin-top: 30px;
        }

        .signature-logo img {
            width: 150px;
            height: auto;
        }
        

        .coret {
            text-decoration: line-through;
        }
        /* Clearfix utility */
        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }

    </style>
</head>
<body>
    <div class="noreg">No.Reg: {{$surat->no_reg ? 0000 : 0000 }}</div>
    <div class="header">
        <div class="logo-container">
            <img src="{{ asset('storage/gambar/logo-tarakan.png') }}" class="logo-left" alt="Logo Tarakan">
            <img src="{{ asset('storage/gambar/logo-puskesmas.png') }}" class="logo-right" alt="Logo Puskesmas">
        </div>
        
        <p style="font-size : 16px">PEMERINTAH KOTA TARAKAN</p>
        <p style="font-size : 16px">DINAS KESEHATAN</p>
        <h2 class="uptd">UPTD PUSKESMAS PANTAI AMAL</h2>
        <p class="alamat" style="font-size : 16px">Jalan Sei Kayan RT 03 Kelurahan Pantai Amal</p>
        <p class="alamat" style="font-size : 16px">Kota Tarakan 77129</p>
        <p style="font-size : 12px">Laman: <a href="http://dinkes.tarakankota.go.id/pkm-pa">http://dinkes.tarakankota.go.id/pkm-pa</a></p>
        <p style="font-size : 12px">Pos-el: <a href="mailto:pkm.pantaiamal@gmail.com">pkm.pantaiamal@gmail.com</a></p>
    </div>

    <div class="title">
        <div class="kepala">SURAT KETERANGAN</div>
        <p class="nomor">Nomor: {{ $surat->regisCatin->nomor_kir ? $surat->regisCatin->nomor_kir : 'Belum diisi' }}</p>
    </div>

    <div class="sub-title">
       <p>Yang bertanda tangan di bawah ini
        </p>
    </div>

    <div class="content">
        <div class="section">
            <div class="data-row">
                <table>
                    <tr>
                        <td class="data-label">Nama</td>
                        <td class="data-value">: {{ $surat ? $surat->bidan->nama : 'Belum diisi' }}</td>
                    </tr>
                </table>
            </div>
            <div class="data-row">
                <table>
                    <tr>
                        <td class="data-label">NIP</td>
                        <td class="data-value">: {{ $surat ? $surat->bidan->nip : 'Belum diisi' }}</td>
                    </tr>
                </table>
            </div>
            <div class="data-row">
                <table>
                    <tr>
                        <td class="data-label">Pangkat/Golongan</td>
                        <td class="data-value">: {{ $surat ? $surat->bidan->pangkat : 'Belum diisi' }}</td>
                    </tr>
                </table>
            </div>
            <div class="data-row">
                <table>
                    <tr>
                        <td class="data-label">Jabatan</td>
                        <td class="data-value">: {{ $surat ? $surat->bidan->jabatan : 'Belum diisi' }}</td>
                    </tr>
                </table>
            </div>

            <div class="sub-title" style="margin : 8px 0px;">
                <p>Menerangkan :
                </p>
            </div>

            <div class="data-row">
                <table>
                    <tr>
                        <td class="data-label">Nama</td>
                        <td class="data-value">: {{ $surat ? $surat->nama : 'Belum diisi' }}</td>
                    </tr>
                </table>
            </div>

            <div class="data-row">
                <table>
                    <tr>
                        <td class="data-label">Tempat/ Tanggal Lahir</td>
                        <td class="data-value">: {{ $surat ?  $surat->tempat_lahir : 'Belum diisi' }}, {{ $surat ? \Carbon\Carbon::parse($surat->tanggal_lahir)->translatedFormat('d F Y') : 'Belum diisi' }}</td>
                    </tr>
                </table>
            </div>
            {{-- <div class="data-row">
                <table>
                    <tr>
                        <td class="data-label">Jenis Kelamin</td>
                        <td class="data-value">: {{ $surat ? $surat->jenis_kelamin : 'Belum diisi' }}</td>
                    </tr>
                </table>
            </div> --}}
            {{-- <div class="data-row">
                <table>
                    <tr>
                        <td class="data-label">Agama</td>
                        <td class="data-value">: {{ $surat ? $surat->agama : 'Belum diisi' }}</td>
                    </tr>
                </table>
            </div> --}}
            <div class="data-row">
                <table>
                    <tr>
                        <td class="data-label">Pekerjaan</td>
                        <td class="data-value">: {{ $surat ? $surat->pekerjaan : 'Belum diisi' }}</td>
                    </tr>
                </table>
            </div>
            <div class="data-row">
                <table>
                    <tr>
                        <td class="data-label">Alamat</td>
                        <td class="data-value">: {{ $surat ? $surat->alamat : 'Belum diisi' }}</td>
                    </tr>
                </table>
            </div>

            {{-- <div class="catatan-list">
                <p class="dengancatatan">Dengan catatan :</p>
                @php
                    $options = [
                        'a' => 'Memenuhi syarat untuk semua jenis pekerjaan',
                        'b' => 'Memenuhi syarat untuk pekerjaan tertentu',
                        'c' => 'Harap kontrol penyakitnya',
                    ];
                @endphp

                @foreach($options as $key => $text)
                    <p class="{{ $surat->catatan === $text ? 'font-bold underline' : '' }}">
                        {{ $key }}. {{ $text }}
                    </p>
                @endforeach

                @if (!empty($surat->catatan_tambahan))
                    <p class="font-bold underline">
                        d. {{$surat->catatan_tambahan}}
                    </p>
                @endif
            </div> --}}
            <div class="catatan-list">
                <p class="dengancatatan">Dengan catatan :</p>

                @php
                    $catatans = $surat->catatans ?? collect();
                @endphp

                @if($catatans->count() > 0)
                    @foreach($catatans as $index => $catatan)
                        <p class="{{ $catatan->dipilih ? 'font-bold underline' : '' }}">
                            {{ chr(97 + $index) }}. {{ $catatan->catatan }}
                        </p>
                    @endforeach
                @else
                    {{-- Fallback jika tidak ada catatan --}}
                    <p>a. Memenuhi syarat untuk semua jenis pekerjaan</p>
                    <p>b. Memenuhi sya  rat untuk pekerjaan tertentu</p>
                    <p>c. Harap kontrol penyakitnya</p>
                @endif

                @if (!empty($surat->catatan_tambahan))
                    <p class="font-bold underline">
                        {{ chr(97 + $catatans->count()) }}. {{ $surat->catatan_tambahan }}
                    </p>
                @endif
            </div>
        </div>
    </div>

    <div class="keperluan-section">
        <p class="font-bold">
            Surat keterangan ini dibuat untuk keperluan : {{ $surat->regisCatin->keperluan ? $surat->regisCatin->keperluan : 'Belum diisi' }} 
        </p>
        <p>
            Surat Keterangan ini berlaku 6 (Enam) bulan sejak dikeluarkan.
        </p>
        <p>
            Demikian surat keterangan ini dibuat untuk diketahui dan dipergunakan sebagaimana mestinya.
        </p>
    </div>

    <div class="signature">
        <table>
            <tr>
                <td width="50%"></td>
                <td width="50%" class="table-right">
                    <div class="signature-box">
                        <div class="signature-title">
                            Tarakan, {{ $surat->regisCatin->tanggal ? \Carbon\Carbon::parse($surat->regisCatin->tanggal)->translatedFormat('d F Y') : 'Belum diisi' }}<br>
                            {{ $surat->bidan->jabatan ? $surat->bidan->jabatan : 'Dokter Penguji Kesehatan' }}
                        </div>
                        <div class="signature-name">{{ $surat->bidan->nama ? $surat->bidan->nama : 'dr. Rahim' }}</div>
                        <div class="">{{ $surat ? $surat->bidan->jabatan : 'Penata Muda Tk.I,III/b' }}</div>
                        <div class="signature-id">
                            @if(!empty($surat->bidan->nip))
                                NIP. {{ $surat->bidan->nip }}
                            @elseif(!empty($surat->bidan->sipd))
                                SIPD. {{ $surat->bidan->sipd }}
                            @else
                                -
                            @endif
                        </div>
                        <div class="signature-logo">
                            <img src="{{ asset('storage/gambar/berakhlak2.png') }}" alt="BerAKHLAK">
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>

</body>
<script>
    window.onload = function () {
        window.print();
    }
</script>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil Laporan</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        body{
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color:#333;
            text-align:center;
            font-size:18px;
            margin:0;
        }
        .container{
            margin:0 auto;
            margin-top:35px;
            padding:40px;
            width:750px;
            height:auto;
            background-color:#fff;
        }

        caption{
            font-size:28px;
            margin-bottom:15px;
            text-align: center;
        }
        table{
            border:1px solid #333;
            border-collapse:collapse;
            margin:0 auto;
            width:740px;
        }
        td, tr, th{
            padding:12px;
            border:1px solid #333;
            width:185px;
        }
        th{
            background-color: #00FFFF;
        }
        h4, p{
            margin:0px;
        }
    </style>
</head>
<body>
    <div class="container">
        <table>
            <caption>
                Laporan Siswa
            </caption>
            <caption>
            Bogor,26-Januari-2020</caption>
            <thead>
                <tr>
             
                    <th colspan="3"> Nis <strong>:{{ $siswa->nis }}</strong></th>
                    </tr>
                    <tr>
                    <th colspan="3">  Nama <strong>:{{ $siswa->nama }}</strong></th>
                    </tr>
                    <tr>
                    <th colspan="3">Alamat <strong>:{{ $siswa->alamat }}</strong></th>
                    </tr>
                    <tr>
                    <th colspan="3">Agama <strong>:{{ $siswa->agama }}</strong></th>
                    </tr>
                    <tr>
                    <th colspan="3">Jurusan <strong>:{{ $siswa->jurusan}}</strong></th>
                    </tr>
                    <tr>
                    <th colspan="3">Rombel <strong>:{{ $siswa->rombel }}</strong></th>
                    </tr>
                    <tr>
                    <th colspan="3">No HP <strong>:{{ $siswa->nohp }}</strong></th>
                    </tr>
                    <tr>
                    <th colspan="3">Pembimbing <strong>:{{ $siswa->pembimbing }}</strong></th>
                    </tr>
                    <tr>
                    <th colspan="3">Rayon <strong>:{{ $siswa->rayon }}</strong></th>
                    </tr>
                    
        </table>
    </div>
</body>
</html>
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
                Hasil Data Hari Ini Siswa-Siswi Melanggar Peraturan 
            </caption>
            <caption>
            Bogor,13-Januari-2020</caption>
            <thead>
                <tr>
                    <th colspan="3"> Kode Kejadian <strong>:{{ $data_kasus->datakasus }}</strong></th>
                    </tr>
                    <tr>
                    <th colspan="3">  Nama <strong>:{{ $data_kasus->kategori }}</strong></th>
                    </tr>
                    <tr>
                    <th colspan="3">Poin <strong>:{{ $data_kasus->kasus}}</strong></th>
                    </tr>
                    <tr>
                    <th colspan="3"> Kategori <strong>:{{ $data_kasus->poin}}</strong></th>
                    </tr>
                   
                    
        </table>
    </div>
</body>
</html>
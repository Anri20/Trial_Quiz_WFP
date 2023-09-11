<!DOCTYPE html>
<html lang="en">

<head>
    <title>Library</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Libraries</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Akun</th>
                    <th>Judul Video</th>
                    <th>Jumlah View</th>
                    <th>Waktu Upload</th>
                    <th>Durasi Video</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < sizeof($data); $i++)
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td>{{ $data[$i]->nama_akun }}</td>
                        <td>{{ $data[$i]->judul_video }}</td>
                        <td>{{ number_format($data[$i]->jumlah_view) }}</td>
                        <td>{{ $data[$i]->waktu_upload_video }}</td>
                        <td>{{ $data[$i]->durasi_menit_video }} menit</td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>

</body>

</html>

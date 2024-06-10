<!DOCTYPE html>
<html>
<head>
    <title>Mahasiswa dengan GPA Tertinggi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Mahasiswa dengan GPA Tertinggi</h2>
        @if ($topStudent)
            <p><strong>ID:</strong> {{ $topStudent->id }}</p>
            <p><strong>Nomor Mahasiswa:</strong> {{ $topStudent->student_number_571 }}</p>
            <p><strong>Nama Mahasiswa:</strong> {{ $topStudent->student_name_571 }}</p>
            <p><strong>Jenis Kelamin:</strong> {{ $topStudent->gender_571 }}</p>
            <p><strong>GPA:</strong> {{ $topStudent->gpa_571 }}</p>
        @else
            <p>Tidak ada data mahasiswa.</p>
        @endif
    </div>
</body>
</html>

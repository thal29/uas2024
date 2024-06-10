<!DOCTYPE html>
<html>
<head>
    <title>Cari Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Cari Mahasiswa</h2>
        <form action="{{ route('searchStudent') }}" method="GET">
            <div class="form-group">
                <label for="student_name_571">Nama Mahasiswa:</label>
                <input type="text" class="form-control" name="student_name_571" id="student_name_571" value="{{ $name ?? '' }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Cari</button>
        </form>

        @if (isset($students))
            <h3>Hasil Pencarian</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nomor Mahasiswa</th>
                        <th>Nama Mahasiswa</th>
                        <th>Jenis Kelamin</th>
                        <th>GPA</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->student_number_571 }}</td>
                            <td>{{ $student->student_name_571 }}</td>
                            <td>{{ $student->gender_571 }}</td>
                            <td>{{ $student->gpa_571 }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</body>
</html>

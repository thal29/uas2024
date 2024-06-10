<!DOCTYPE html>
<html>
<head>
    <title>Form Perhitungan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Form Perhitungan</h2>
        <form action="{{ route('hitung') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="total_belanja">Total Belanja:</label>
                <input type="number" class="form-control" name="total_belanja" id="total_belanja" required>
            </div>
            <div class="form-group">
                <label for="diskon">Diskon (%):</label>
                <input type="number" class="form-control" name="diskon" id="diskon" required>
            </div>
            <div class="form-group">
                <label for="member_card">Member Card:</label><br>
                <input type="radio" name="member_card" value="ada" required> Ada<br>
                <input type="radio" name="member_card" value="tidak"> Tidak<br>
            </div>
            <div class="form-group">
                <label for="potongan_lainnya">Potongan Lainnya:</label>
                <input type="number" class="form-control" name="potongan_lainnya" id="potongan_lainnya" required>
            </div>
            <button type="submit" class="btn btn-primary">Hitung</button>
        </form>
    </div>
</body>
</html>

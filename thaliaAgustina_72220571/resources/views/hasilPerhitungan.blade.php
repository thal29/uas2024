<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Hasil Perhitungan</h2>
        <p><strong>Total Belanja:</strong> {{ $total_belanja }}</p>
        <p><strong>Diskon (%):</strong> {{ $diskon * 100 }}</p>
        <p><strong>Potongan Member Card:</strong> {{ $member_card }}</p>
        <p><strong>Potongan Lainnya:</strong> {{ $potongan_lainnya }}</p>
        <p><strong>Total Bayar:</strong> {{ $total_bayar }}</p>
        <a href="{{ url('/perhitungan') }}" class="btn btn-secondary">Kembali ke Form</a>
    </div>
</body>
</html>

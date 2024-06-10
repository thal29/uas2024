<!DOCTYPE html>
<html>
<head>
    <title>Form B</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Form B</h2>
        <p><strong>Text:</strong> {{ $data['text'] }}</p>
        <p><strong>Radio:</strong> {{ $data['radio'] }}</p>
        <p><strong>Select:</strong> {{ $data['select'] }}</p>
        <a href="{{ url('/formA') }}" class="btn btn-secondary">Back to Form A</a>
    </div>
</body>
</html>

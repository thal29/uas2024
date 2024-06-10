<!DOCTYPE html>
<html>
<head>
    <title>Form A</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Form A</h2>
        <form action="{{ route('handleForm') }}" method="POST">
            @csrf 
            <div class="form-group">
                <label for="text">Text:</label>
                <input type="text" class="form-control" name="text" id="text" required>
            </div>
            <div class="form-group">
                <label for="radio">Radio:</label><br>
                <input type="radio" name="radio" value="Option 1" required> Option 1<br>
                <input type="radio" name="radio" value="Option 2"> Option 2<br>
            </div>
            <div class="form-group">
                <label for="select">Select:</label>
                <select class="form-control" name="select" id="select" required>
                    <option value="Value 1">Value 1</option>
                    <option value="Value 2">Value 2</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>

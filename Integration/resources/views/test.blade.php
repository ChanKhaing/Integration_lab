<!DOCTYPE html>
<html>
<head>
    <title>API Test</title>
</head>
<body>
    <form action="{{ url('/apitest') }}" method="POST">
        @csrf
        <button type="submit">Send API Request</button>
    </form>
</body>
</html>

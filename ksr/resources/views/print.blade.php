<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>My PDF Document</title>
  <style>
    body { font-family: Arial, sans-serif; }
    h1 { color: #007bff; }
    p { font-size: 1.2em; }
  </style>
</head>
<body>
  <h1>Hello, world!</h1>
  <p>This is a sample PDF generated using Dompdf.</p>
  <a href="{{ route('download.pdf') }}">Download PDF</a>
  <br>
  <iframe src="{{ route('view.pdf') }}" width="100%" height="500px"></iframe>
</body>
</html>

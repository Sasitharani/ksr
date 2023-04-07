<?php

// Include the Dompdf library autoload file using the __DIR__ constant
require_once 'C:\projects\laravel\CRUD\ksr\vendor\autoload.php';
$dompdf = new Dompdf\Dompdf();

if(isset($is_clicked)){
  echo "check";
  // HTML code to convert to PDF
  $html = '
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
  <div>
    <h1>Hello, world!</h1>
    <p>This is a sample PDF generated using Dompdf.</p>
  </div>
</body>
</html>
';
$is_clicked = false;

$dompdf->loadHtml($html);

// Set paper size and orientation (optional)
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to the browser
$dompdf->stream('my-document.pdf');

}else{
$is_clicked = false;
print($is_clicked);
}

print($is_clicked);
// Create a new Dompdf instance
$dompdf = new Dompdf\Dompdf();
?>



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
  <p>This is a sample of PDF generated using Dompdf.</p>
  <a href="data:application/pdf;base64,' . base64_encode($dompdf->output()) . '" target="_blank">View PDF</a>
</body>
</html>
<button id="generate-pdf">Generate PDF</button>

<a href="{{ Route('pdf2', ['is_clicked' => $is_clicked]) }}">PDF Generate</a>
<a href="{{ Route('pdf3') }}">PDF Generate 3</a>


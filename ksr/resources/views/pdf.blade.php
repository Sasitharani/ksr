<?php
// Include the Dompdf library autoload file using the __DIR__ constant
require_once 'C:\projects\laravel\CRUD\ksr\vendor\autoload.php';

// Create a new Dompdf instance
$dompdf = new Dompdf\Dompdf();



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
  <h1>Hello, world!</h1>
  <p>This is a sample PDF generated using Dompdf.</p>
  <a href="data:application/pdf;base64,' . base64_encode($dompdf->output()) . '" target="_blank">View PDF</a>
</body>
</html>
<button id="generate-pdf">Generate PDF</button>


';

// // Load the HTML into the Dompdf instance

// $dompdf->loadHtml($html);
// $s='s';

// echo $s;

// // Set paper size and orientation (optional)
// $dompdf->setPaper('A4', 'portrait');

// // Render the HTML as PDF
// $dompdf->render();

// // Output the generated PDF to the browser
// $dompdf->stream('my-document.pdf');
// $s='s';

echo $html;

?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dompdf/0.8.6/dompdf.min.js" integrity="sha512-Hr9UpaSJWp+a8cKm+s+3Fw7ADdMCKbDZJvAW58Ez56f9V5O5B5y5G5CJ6UH0oUcRKgJ/Lz6Ro1lDy1UK+nmC0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$(document).ready(function() {
    $('#generate-pdf').click(function() {
        var html = 'HTML code to convert to PDF';
        var dompdf = new Dompdf();
        dompdf.loadHtml(html);
        dompdf.setPaper('A4', 'portrait');
        dompdf.render();
        var pdf = dompdf.output();
        var blob = new Blob([pdf], { type: 'application/pdf' });
        var url = URL.createObjectURL(blob);
        window.open(url, '_blank');
    });
});
</script>

<?php
// Load autoloader (using Composer)
require __DIR__ . '/vendor/autoload.php';
$pdf = new TCPDF();                 // create TCPDF object with default constructor args
$pdf->AddPage();                    // pretty self-explanatory
$html = '<html>
<head>
    <meta charset="UTF-8">
    <title>Cum a reuşit un profesor din România sa construiască  o afacere de peste 30 milioane de euro. El a reuşit deşi s-a luptat cu toti giganţii străini de pe piaţă  </title>
</head>
<body>

<h1 style="text-align: center">
    <br>Cum a reuşit un profesor din România
    </br>
    sa construiască o afacere de peste 30
    milioane de euro.
    <br>El a reuşit deşi s-a luptat cu toti giganţii străini de pe piaţă</br>
</h1>
<h1 style="text-align: center">
    <br>Cum a reuşit un profesor din România
    </br>
    sa construiască o afacere de peste 30
    milioane de euro.
    <br>El a reuşit deşi s-a luptat cu toti giganţii străini de pe piaţă</br>
</h1>

<img src="andrei.jpg">
</body>
</html>' ;     // 1 is line height
$pdf->writeHTML($html,true,false,true,false,'');
$pdf->Output('hello_world.pdf');    // send the file inline to the browser (default).

?>

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class   PdfController extends Controller
{

  function pdfPrueba(){
    echo("Hola soy un dinosaurio");
  }

   function generatingPdf(){
     $html_content ='<h1> Generate a PDF using </h1>  <img src="https://upload.wikimedia.org/wikipedia/commons/e/e8/Google_Drive_logo.svg" style="width:100px;height:80px;>';
     PDF::SetTitle('Sample PDF');
     PDF::AddPage();
     PDF::writeHTML($html_content,true,false,true,false,'');

     PDF::Image('imagen.jpg', 15, 140, 75, 113, 'JPG', '', '', true, 150, '', false, false, 1, false, false, false);
     PDF::Output('ejemplo.pdf');
   }

}

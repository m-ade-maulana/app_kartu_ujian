<?php

namespace App\Libraries;

use Dompdf\Dompdf;
use Dompdf\Options;
use Dompdf\Image;

class Pdfgenerator
{
    public function generate($html, $filename = '', $paper = '')
    {
        $options = new Options();
        $options->set('isRemoteEnabled', FALSE);
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper($paper, 'portrait');
        $dompdf->render();
        $dompdf->stream($filename . ".pdf", ['Attachment' => true]);
    }
}

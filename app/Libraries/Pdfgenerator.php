<?php

namespace App\Libraries;

use Dompdf\Dompdf;
use Dompdf\Options;
use Dompdf\Image;;

class Pdfgenerator
{
    public function generate($html, $filename = '', $paper = '', $stream = TRUE)
    {
        $options = new Options();
        $options->set('isRemoteEnabled', TRUE);
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper($paper, 'portrait');
        $dompdf->render();
        if ($stream) {
            $dompdf->stream($filename . ".pdf", ['Attachment' => 0]);
            exit();
        } else {
            return $dompdf->output();
        }
    }
}

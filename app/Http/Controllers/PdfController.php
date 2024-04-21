<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Intervention\Image\Facades\Image;


class PdfController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function generatePdf(Request $request)
    {
        $author = $request->input('author');
        $title = $request->input('title');
        $pageNumbers = $request->input('page_numbers');

        $frontCoverHtml = view('front_cover', compact('author', 'title'))->render();
        $backCoverHtml = view('back_cover', compact('author', 'title'))->render();

        $innerPagesHtml = '';
        for ($i = 1; $i <= $pageNumbers; $i++) {
            $innerPagesHtml .= view('inner_page', ['pageNumber' => $i])->render();
        }

        $html = $frontCoverHtml . $innerPagesHtml . $backCoverHtml;

        $pdf = PDF::loadHTML($html);

        return $pdf->download('book.pdf');
    }
}

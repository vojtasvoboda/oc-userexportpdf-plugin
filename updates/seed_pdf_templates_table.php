<?php namespace VojtaSvoboda\UserExportPdf\Updates;

use File;
use Renatio\DynamicPDF\Models\PDFLayout;
use Renatio\DynamicPDF\Models\PDFTemplate;
use Schema;
use Seeder;

class SeedPdfTemplatesTable extends Seeder
{
    public function run()
    {
        if (!Schema::hasTable('renatio_dynamicpdf_pdf_templates')) {
            return false;
        }

        $layout = PDFLayout::where('code', 'rainlab::user')->first();

        PDFTemplate::create([
            'title' => 'User profil',
            'description' => "User's PDF card template",
            'layout' => $layout,
            'code' => 'rainlab::user',
            'content_html' => File::get(__DIR__ . '/templates/user.htm'),
        ]);
    }
}

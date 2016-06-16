<?php namespace VojtaSvoboda\UserPdfExport\Updates;

use File;
use Renatio\DynamicPDF\Models\Layout;
use Schema;
use Seeder;

class SeedPdfLayoutsTable extends Seeder
{
    public function run()
    {
        if (!Schema::hasTable('renatio_dynamicpdf_pdf_layouts')) {
            return false;
        }

        Layout::create([
            'name' => 'Users PDF layout',
            'code' => 'rainlab::user',
            'content_html' => File::get(__DIR__ . '/templates/layout.htm'),
            'content_css' => File::get(__DIR__ . '/templates/style.css'),
        ]);
    }
}

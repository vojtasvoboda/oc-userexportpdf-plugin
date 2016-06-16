<?php namespace VojtaSvoboda\UserExportPdf\Updates;

use File;
use Renatio\DynamicPDF\Models\Layout;
use Renatio\DynamicPDF\Models\Template;
use Schema;
use Seeder;

class SeedPdfTemplatesTable extends Seeder
{
    public function run()
    {
        if (!Schema::hasTable('renatio_dynamicpdf_pdf_templates')) {
            return false;
        }

        $layout = Layout::where('code', 'rainlab::user')->first();

        Template::create([
            'title' => 'User profil',
            'description' => "User's PDF card template",
            'layout' => $layout,
            'code' => 'rainlab::user',
            'content_html' => File::get(__DIR__ . '/templates/user.htm'),
        ]);
    }
}

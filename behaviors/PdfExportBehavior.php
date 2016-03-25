<?php namespace VojtaSvoboda\UserExportPdf\Behaviors;

use Backend\Classes\ControllerBehavior;
use Config;
use Exception;
use October\Rain\Exception\ApplicationException;
use RainLab\User\Models\User;
use Renatio\DynamicPDF\Models\PDFTemplate;
use Response;
use Str;

class PdfExportBehavior extends ControllerBehavior
{
    public function pdf($id)
    {
        $user = User::find($id);
        if (!$user) {
            throw new ApplicationException('User not found.');
        }

        $templateCode = Config::get('vojtasvoboda.userexportpdf::config.template', 'rainlab::user');
        $data = ['user' => $user];
        $params = [
            'filename' => Str::slug($user->name . '-' . $user->username) . ".pdf",
            'content_disposition' => 'attachment',
        ];

        try {
            // waiting for Renatio.DynamicPDF merge pull request
            return PDFTemplate::render($templateCode, $data, $params);

        } catch (Exception $e) {
            throw new ApplicationException($e->getMessage());
        }
    }
}

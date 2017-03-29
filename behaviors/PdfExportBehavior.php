<?php namespace VojtaSvoboda\UserExportPdf\Behaviors;

use App;
use Backend\Classes\ControllerBehavior;
use Config;
use Exception;
use October\Rain\Exception\ApplicationException;
use RainLab\User\Models\User;
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
        $data = [
            'user' => $user,
        ];
        $filename = Str::slug($user->name . '-' . $user->username) . ".pdf";

        try {
            /** @var PDFWrapper $pdf */
            $pdf = App::make('dynamicpdf');

            return $pdf
                ->setOptions(['logOutputFile' => storage_path('temp/log.htm')])
                ->loadTemplate($templateCode, $data)
                ->download($filename);

        } catch (Exception $e) {
            throw new ApplicationException($e->getMessage());
        }
    }
}

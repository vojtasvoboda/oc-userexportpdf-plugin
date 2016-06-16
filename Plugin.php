<?php namespace VojtaSvoboda\UserExportPdf;

use Backend;
use Event;
use Lang;
use RainLab\User\Controllers\Users as UserController;
use RainLab\User\Models\User as UserModel;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public $require = [
        'RainLab.User',
        'Renatio.DynamicPDF',
    ];

    public function pluginDetails()
    {
        return [
            'name' => 'vojtasvoboda.userexportpdf::lang.plugin.name',
            'description' => 'vojtasvoboda.userexportpdf::lang.plugin.description',
            'author' => 'Vojta Svoboda',
            'icon' => 'icon-file-pdf-o',
        ];
    }

    public function boot()
    {
        UserController::extend(function($controller) {
            $controller->implement[] = 'VojtaSvoboda.UserExportPdf.Behaviors.PdfExportBehavior';
        });

        // extend user listing
        Event::listen('backend.list.extendColumns', function($widget)
        {
            // Only for the User controller
            if (!$widget->getController() instanceof UserController) {
                return;
            }

            // Only for the User model
            if (!$widget->model instanceof UserModel) {
                return;
            }

            // Add an extra birthday column
            $widget->addColumns([
                'export' => [
                    'label' => 'vojtasvoboda.userexportpdf::lang.list.export.column',
                    'sortable' => false,
                    'clickable' => false,
                ],
            ]);
        });

        // extend export column value to add export button
        Event::listen('backend.list.overrideColumnValue', function($widget, $model, $column, $value)
        {
            // Only for the User model
            if (!$model instanceof UserModel) {
                return;
            }

            if ($column->columnName == 'export')
            {
                $button = '<a';
                $button .= ' href="' . url('/backend/rainlab/user/users/pdf/' . $model->id) . '"';
                $button .= ' class="btn btn-xs btn-warning"';
                $button .= '>' . Lang::get('vojtasvoboda.userexportpdf::lang.list.export.button') . '</a>';

                return $button;
            }
        });
    }

    public function registerPermissions()
    {
        return [
            'vojtasvoboda.userexportpdf.export' => [
                'tab' => 'vojtasvoboda.userexportpdf::lang.permission.tab',
                'label' => 'vojtasvoboda.userexportpdf::lang.permission.export',
            ],
        ];
    }
}

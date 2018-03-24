# User export to PDF plugin for OctoberCMS

[![Codacy](https://img.shields.io/codacy/17ce271f07de4c6ea61fb5c323f46bda.svg)](https://www.codacy.com/app/vojtasvoboda/oc-userexportpdf-plugin/dashboard)
[![Scrutinizer Coverage](https://img.shields.io/scrutinizer/g/vojtasvoboda/oc-userexportpdf-plugin.svg)](https://scrutinizer-ci.com/g/vojtasvoboda/oc-userexportpdf-plugin/?branch=master)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](https://github.com/vojtasvoboda/oc-userexportpdf-plugin/blob/master/LICENSE.md)

Create nice user's profile PDF with one click! Plugin is delivered with prepared PDF template which you can easily update.

Compatible with all plugins extending RainLab.User such as RainLab.Location, RainLab.UserPlus - just update PDF template and add new fields!

Tested with the OctoberCMS's build 420 (Laravel 5.5).

## Dependencies

- [Renatio.DynamicPDF](http://octobercms.com/plugin/renatio-dynamicpdf)
- [Rainlab.User](http://octobercms.com/plugin/rainlab-user)

## Installation

1. Install plugin VojtaSvoboda.UserExportPdf from your Backend -> Settings -> System -> Updates -> Install plugins.
2. Update PDF templates at PDF section available from main menu.

## Change PDF template

Just copy `/plugins/vojtasvoboda/userexportpdf/config/config.php` file to `/config/vojtasvoboda/userexportpdf/config.php` and update it with own values.

## Future plans

- [ ] skip seeding layout/template when already exists with same code
- [ ] generate PDF also with Gravatars, not only local avatar images
- [ ] fix Codacy grade from B to A
- [ ] move template code as a pdf() method parameter so we can override it (issue #5)

**Feel free to send pullrequest!**

## Contributing

Please send Pull Request to master branch.

## License

User export PDF plugin is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT) same as OctoberCMS platform.

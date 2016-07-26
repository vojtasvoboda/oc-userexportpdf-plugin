# User export to PDF plugin for OctoberCMS

[![Codacy](https://img.shields.io/codacy/e27821fb6289410b8f58338c7e0bc686.svg)](https://www.codacy.com/app/vojtasvoboda/oc-userexportpdf-plugin/dashboard)
[![Scrutinizer Coverage](https://img.shields.io/scrutinizer/g/vojtasvoboda/oc-userexportpdf-plugin.svg)](https://scrutinizer-ci.com/g/vojtasvoboda/oc-userexportpdf-plugin/?branch=master)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](https://github.com/vojtasvoboda/oc-userexportpdf-plugin/blob/master/LICENSE.md)

Create nice user's profile PDF with one click! Plugin is delivered with prepared PDF template which you can easily update.

Compatible with all plugins extending RainLab.User such as RainLab.Location, RainLab.UserPlus - just update PDF template and add new fields!

Tested with the latest stable OctoberCMS build 349.

## Dependencies

- [Renatio.DynamicPDF](http://octobercms.com/plugin/renatio-dynamicpdf)
- [Rainlab.User](http://octobercms.com/plugin/rainlab-user)

## Installation

1. Install plugin VojtaSvoboda.UserExportPdf from your Backend -> Settings -> System -> Updates -> Install plugins.
2. Update PDF template at Backend -> Settings -> PDF -> PDF Templates.

## Change PDF template

Just copy `/plugins/vojtasvoboda/userexportpdf/config/config.php` file to `/config/vojtasvoboda/userexportpdf/config.php` and update it with own values.

## Future plans

**Feel free to send pullrequest!**

- [ ] skip seeding layout/template when already exists with same code

## License

User export PDF plugin is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT) same as OctoberCMS platform.

## Contributing

Please send Pull Request to master branch.

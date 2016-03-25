# User export to PDF plugin for OctoberCMS

Create nice user's profile PDF with one click! Plugin is delivered with prepared PDF template which you can easily update.

Compatible with all plugins extending RainLab.User such as RainLab.Location, RainLab.UserPlus - just update PDF template and add new fields!

Required plugins: [Renatio.DynamicPDF](http://octobercms.com/plugin/renatio-dynamicpdf)

## Installation

1. Install plugin VojtaSvoboda.UserExportPdf from your Backend -> Settings -> System -> Updates -> Install plugins.
2. Update PDF template at Backend -> Settings -> PDF -> PDF Templates.

## Switch to different template

Just copy `/plugins/vojtasvoboda/userexportpdf/config/config.php` file to `/config/vojtasvoboda/userexportpdf/config.php` and update it with own values.

## Future plans

**Feel free to send pullrequest!**

- [ ] set PDF filename by user's name and username (done - waiting for merge pull request)
- [ ] download PDF as file, don't open it in new tab (done - waiting for merge pull request)

## License

User export PDF plugin is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT) same as OctoberCMS platform.

## Contributing

Please send Pull Request to master branch.

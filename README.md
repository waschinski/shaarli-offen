# shaarli-offen
A [Shaarli](https://github.com/shaarli/Shaarli) plugin that adds [Offen](https://github.com/offen/offen) tracking code to Shaarli pages.

## Requirements
You need to have [Offen](https://github.com/offen/offen) running on your server.

## Installation
1. Place the folder (`offen`) in the `plugins/` folder of your Shaarli installation.
2. Enable the plugin in the Plugin Administration page.
3. Enter the required parameters on the page:
   * OFFEN_URL: The domain of your Offen setup without protocol (the plugin expects https) e.g. `offen.example.com`
   * OFFEN_ACCOUNTID: The account ID of the Offen account you want to use

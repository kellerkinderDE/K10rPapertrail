# K10rPapertrail
This plugin forwards plugin- and corelogger messages to [papertrailapp.com](https://papertrailapp.com)
## Requirements
* Shopware 5.2
* Socket Extension for PHP

## Installation
### Installation using composer
* Change to your root installation of Shopware
* Run command `composer require k10r/papertrail`

### Installation using ZIP Package
* Download the ZIP or clone this repository into your `custom/plugins/` folder.

### Usage
* Activate the plugin via PluginManager
* Set the [papertrailapp.com](https://papertrailapp.com) log destination server and port in the plugin settings. 
You find these information in your Papertrail account [https://papertrailapp.com/account/destinations](https://papertrailapp.com/account/destinations).

## License
MIT licensed, see `LICENSE.md`

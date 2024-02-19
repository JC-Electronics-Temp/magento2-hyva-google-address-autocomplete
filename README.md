# Hyva Google Address Autocomplete by JC-Electronics / Youwe

This module adds the possibility to add address autocompletion by using Google Places API.

## Installation

The package can be installed using composer with the following commands:

```bash
composer require jc-electronics/magento2-hyva-google-address-autocomplete
bin/magento module:enable JcElectronics_HyvaGoogleAddressAutocomplete
bin/magento setup:upgrade
```

## Usage

To use the module, make sure you have an active Google Places API Key. This is needed to make
the extension work properly.

There's some configuration that needs to be set in JC-Electronics > Address Autocomplete:

* Enabled: Enable or disable the module
* Google API key: The API key from Google to use with this module

## Contributing

Pull requests are welcome. For major changes, please open an issue first
to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License

[MIT](https://choosealicense.com/licenses/mit/)
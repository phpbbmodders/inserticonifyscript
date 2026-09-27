# Insert Iconify Script

Loads the [Iconify](https://iconify.design/) script before `</body>` on every page, so Iconify icons can be used in templates and posts.

## Installation

Copy the extension to `phpBB/ext/phpbbmodders/inserticonifyscript`.

Go to "ACP" > "Customise" > "Extensions" and enable the "Insert Iconify Script" extension.

### Upgrading from `modders/inserticonifyscript`

This extension was previously published as `modders/inserticonifyscript`. To switch:

1. Disable the old "Insert Iconify Script" extension in the ACP (do not delete its data; it has none).
2. Delete the `phpBB/ext/modders/inserticonifyscript` folder.
3. Upload this version to `phpBB/ext/phpbbmodders/inserticonifyscript` and enable it. The old extension's leftover record is removed automatically.
4. Purge the board cache (ACP > General > Purge the cache).

## License

[GPLv2](license.txt)

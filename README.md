# Insert Iconify Script

[![Tests](https://github.com/phpbbmodders/inserticonifyscript/actions/workflows/tests.yml/badge.svg)](https://github.com/phpbbmodders/inserticonifyscript/actions/workflows/tests.yml) [![Lint](https://github.com/phpbbmodders/inserticonifyscript/actions/workflows/lint.yml/badge.svg)](https://github.com/phpbbmodders/inserticonifyscript/actions/workflows/lint.yml)

Loads the Iconify icon script on every page so Iconify icons can be used in templates and posts.

## Features

- Adds the [Iconify](https://iconify.design/) 3 script before `</body>` on every page.
- No settings: enable it and use Iconify markup, e.g. `<span class="iconify" data-icon="mdi:home"></span>`, in templates or posts that allow HTML.

## Requirements

- phpBB 3.3.0 or later
- PHP 7.4 or later

## Installation

1. Copy the extension to `/ext/phpbbmodders/inserticonifyscript`
2. In the Administration Control Panel, go to **Customise → Manage extensions**
3. Enable the **Insert Iconify Script** extension

### Upgrading from `modders/inserticonifyscript`

This extension was previously published as `modders/inserticonifyscript`. To switch:

1. Disable the old "Insert Iconify Script" extension in the ACP (do not delete its data; it has none).
2. Delete the `phpBB/ext/modders/inserticonifyscript` folder.
3. Upload this version to `phpBB/ext/phpbbmodders/inserticonifyscript` and enable it. The old extension's leftover record is removed automatically.
4. Purge the board cache (ACP > General > Purge the cache).

If you disable the old extension from the command line (`bin/phpbbcli.php`) instead of the ACP, run `bin/phpbbcli.php cache:purge` before enabling the new one; the command-line disable doesn't clear the cache.

## Contributing

Contributions are welcome!

- **Bug reports**: [Open an issue](https://github.com/phpbbmodders/inserticonifyscript/issues).
- **Everything else** (questions, feature requests, ideas, general discussion): [Use Discussions](https://github.com/orgs/phpbbmodders/discussions), or the [community forum](https://www.phpbbmodders.com/community/).
- Pull requests are welcome for bug fixes or discussed features.

## Acknowledgments

- Code review, bug fixes, and documentation assisted by [Claude](https://www.anthropic.com/claude).

## License

This extension is licensed under the **GNU General Public License v2.0**.

See [license.txt](license.txt) for more information.

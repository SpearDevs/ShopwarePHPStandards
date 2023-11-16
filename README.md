# SpearDevs PHP Standards

## Features

SpearDevs PHP Shopware Standards package contains:

* Psalm
* Easy Coding Standards
* PHPUnit
* Shopware testing bootstrap
* GitHub Action workflow

## Installation

### Configure `composer.json`

```json
{
    "extra": {
        "symfony": {
            "endpoint": [
                "https://api.github.com/repos/speardevs/recipes/contents/index.json",
                "flex://defaults"
            ]
        }
    },
    "repositories": [
        {
            "type": "vcs",
            "url": "git@github.com:SpearDevs/shopware-coding-standards.git"
        }
    ]
}
```

### Install with Composer

```shell
composer require speardevs/shopware-php-standards --dev
```

### Allow to execute recipes

![img.png](images/recipes.png)

### Generate project composer token

Generate token [here](https://github.com/settings/tokens/new?scopes=repo&description=GitHub%20Actions%20Composer) and
create new GitHub Action's secret key `SPEARDEVS_PIPELINES_KEY` with generated token.

## Notes

### PHP

Default PHP version in package is defined as `8.2`. If adjustment is needed then update following files:

* `.github/workflows/speardevs-shopware-coding-standards.yaml` - set correct PHP version for `php-version` key
* `rector.php` - replace `LevelSetList::UP_TO_PHP_82` set list name with proper version;
  example: `LevelSetList::UP_TO_PHP_74`

### PHPUnit

Remember to change the plugin name in `tests/TestBoostrap.php`.

If project has no implemented tests, comment `Run PHPUnit tests` step in pipeline defined
in `.github/workflows/speardevs-shopware-coding-standards.yaml` to pass correctly job.


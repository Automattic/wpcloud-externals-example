# wpcloud-externals-example
Example outline of WP Cloud externals.

#### General Structure

```
{your-repo-name}/
    wordpress/
        mu-plugins/
            {example-mu-plugin-dir-a}/
            {example-mu-plugin-dir-loader-a.php}
            {example-standalone-single-file-mu-plugin-b.php}
        plugins/
            {my-custom-plugin-a}/
                latest -> {2.2.1} # symlink to current version
                {2.2.1}/ # directory with the current version
            {my-custom-plugin-b}/
                latest -> {1.2.4} # symlink to current version
                {1.2.4}/ # directory with the current version
        themes/
            {my-custom-theme-a}/
                latest -> {3.1.1} # symlink to current version
                {3.1.1}/ # directory with the current version
```

* Additional support is available for commands which may be placed under `usr/local/bin` and one-off PHP scripts under `scripts`.


#### Restrictions

The following may not be included in your externals. Refrain from using `atomic` or `wpcloud` in file names.

- `scripts/at-wpcli-config.php`
- `scripts/atomic-.*`
- `scripts/cache-control.php`
- `scripts/env.php`
- `scripts/wpcloud-.*`
- `usr/local/bin/atomic-.*`
- `usr/local/bin/exec2json`
- `usr/local/bin/php`
- `usr/local/bin/wp`
- `usr/local/bin/wp-cli`
- `usr/local/bin/wpcloud-.*`
- `usr/local/bin/wpe`
- `usr/local/bin/wps`
- `wordpress/drop-ins/advanced-cache.php`
- `wordpress/drop-ins/atomic-.*`
- `wordpress/drop-ins/object-cache.php`
- `wordpress/drop-ins/wpcloud-.*`
- `wordpress/mu-plugins/atomic.php`
- `wordpress/mu-plugins/atomic-.*`
- `wordpress/mu-plugins/wpcloud-.*`
- `wordpress/plugins/akismet`
- `wordpress/plugins/atomic-.*`
- `wordpress/plugins/jetpack`
- `wordpress/plugins/wpcloud-.*`
- `wordpress/themes/atomic-.*`
- `wordpress/themes/wpcloud-.*`


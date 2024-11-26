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

The following may not be included in your externals.

scripts/at-wpcli-config.php
scripts/cache-control.php
scripts/env.php
wordpress/plugins/akismet
wordpress/plugins/jetpack
wordpress/drop-ins/advanced-cache.php
wordpress/drop-ins/object-cache.php
wordpress/mu-plugins/atomic.php
usr/local/bin/exec2json
usr/local/bin/php
usr/local/bin/wp
usr/local/bin/wp-cli
usr/local/bin/wpe
usr/local/bin/wps
wordpress/mu-plugins/atomic-.*
wordpress/drop-ins/atomic-.*
wordpress/plugins/atomic-.*
wordpress/themes/atomic-.*
scripts/atomic-.*
usr/local/bin/atomic-.*
wordpress/mu-plugins/wpcloud-.*
wordpress/drop-ins/wpcloud-.*
wordpress/plugins/wpcloud-.*
wordpress/themes/wpcloud-.*
scripts/wpcloud-.*
usr/local/bin/wpcloud-.*

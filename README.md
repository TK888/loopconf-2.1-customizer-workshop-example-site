#LoopConf Customizer Workshop Example Site
##LoopConf - February, 2017

This site is an example site for the LoopConf 2.1 customizer workshop (February, 2017).  

###Getting Started
You must have an existing local development environment for use.

#### Cloning the entire repo
1. Download the `master` branch of this repository - either using Git or downloading the [`.zip` file](https://github.com/ataylorme/loopconf-2.1-customizer-workshop-example-site/archive/master.zip).

1. Download the `master` branch of the [customizer hero plugin](https://github.com/ataylorme/customize-hero) - either using Git or downloading the [`.zip` file](https://github.com/ataylorme/customize-hero/archive/master.zip).

1. Set the directory as the site root locally.

1. Move the customize hero plugin to `wp-content/plugins` of your local example site.

1. Import `loopconf-2.1-2017-customizer-workshop-example-site-db.sql.gz` locally.

1. Use [WP-CLI search/replace](https://wp-cli.org/commands/search-replace/) to update the local URL if you are using something other than `https://customizer-workshop-example.dev`.

1. Update the database connection configuration in `wp-config.php`.

1. Login to `wp-admin` with the username `customizer` and password `customizer`.

#### Setup on an existing WordPress installation
1. Install WordPress `4.7.2` locally.

1. Download the `master` branch of this repository - either using Git or downloading the [`.zip` file](https://github.com/ataylorme/loopconf-2.1-customizer-workshop-example-site/archive/master.zip).

1. Ensure you have the `twentysixteen` theme installed.

1. Move the `twentysixteen-child` theme to `wp-content/themes` of your local installation.

1. Activate the the `twentysixteen-child` theme.

1. Download the `master` branch of the [customizer hero plugin](https://github.com/ataylorme/customize-hero) - either using Git or downloading the [`.zip` file](https://github.com/ataylorme/customize-hero/archive/master.zip).

1. Move the customize hero plugin to `wp-content/plugins` of your local example site.

1. Activate the customize hero plugin.

###TwentySixteen Child Theme
Theme example code is in the `wp-content/themes/twentysixteen-child` directory.

###Customize Hero Plugin
The bulk of the workshop will take place within the customizer hero plugin directory `wp-content/plugins/customize-hero`.
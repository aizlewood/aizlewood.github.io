# Inception

A starting point for new Clearleft sites. Includes a set of (documented, configurable) build tasks and a recommended project directory structure.

> Note: Don't clone this repository using Git unless you want to contribute to the repo itself. Instead follow the 'Getting Started' instructions below.

#### Docs:

* [Getting started](#getting-started)
* [File and folder structure](#file-and-folder-structure)
* [Custom Server Configuration](#custom-server-configuration)
* [Included Grunt tasks](#included-grunt-tasks)
	* [CSS build](#css-build)
	* [JavaScript build](#javascript-build)
	* [Image optimisation](#image-optimisation)
	* [Font handler](#font-handler)
	* [File watcher](#file-watcher)

#### Related documentation:

* [Installing and using Grunt - a primer](#installing-and-using-grunt---a-primer)

## Getting started

Before you start you will need to make sure that you have [installed Node, NPM and Grunt](#installing-grunt) if you have not already got them on your computer. Then:

1. Download [the ZIP file of this repository](https://github.com/clearleft/starter/archive/master.zip).
2. Unzip.
3. Copy the contents of the inception-master folder into your project folder.
4. Rename `gitignore` to `.gitignore`
5. [Install the dependencies](#installing-project-dependencies) for the included Grunt tasks: If you're running elf, type `elf devbox:build` (otherwise: `npm install`) 
6. Customise the project structure as needed and start building
7. Use `grunt` to handle tasks such as pre-processing Sass files, optimising images, etc. (or if you're running elf, type `elf devbox:build`)



## File and folder structure

A recommended project structure has been included in this repository. The contents of this are as follows:

```
| - assets/
| ---- fonts/
| ---- img/
| ---- js/
| ---- sass/
| - public/
| ---- index.html
| - conf/
| --- apache.conf.example
| --- nginx.conf.example
| - tasks/
| ---- css.js
| ---- images.js
| ---- fonts.js
| ---- scripts.js
| - .gitignore
| - elf.yml
| - Gruntfile.js
| - package.json
| - README.md
```

> IMPORTANT: Please remember that the **delete key is your friend!** If you are not using any of the bundled files or directories then it's highly recommended that you delete them :-)

You may notice some `.gitkeep` files dotted around - these are invisible files that are used because otherwise Git does not like checking in empty folders. You can just ignore these (or delete them if they are not needed for your project, of course!).

### File/Folder structure overview:

* **The `/public` directory**

	All files that you want to be accessible to the web server should live in the `/public` directory. When configuring your Apache (or Nginx) server, **this is the directory that should be used as the web root**. An example Apache virtual host configuration might therefore look like this:

	```
<VirtualHost *:80>
    DocumentRoot "/Users/username/path/to/this/project/public"
    ServerName myproject.dev
</VirtualHost>
```

	Because the `/public` directory is the web root, all other files (such as the hidden Git files, the Grunt configuration file etc) will therefore not be publicly accessible (yay!).

	All asset resources (such as Sass source files, images etc) should be kept outside of the `/public` directory and then copied into place within it as part of a build and/or copy step (See the [documentation about using Grunt](#installing-and-using-grunt---a-primer) to help automate this process).

* **The `/assets` directory**

	All project assets should live in the assets directory. This includes files that need pre-processing (such as Sass stylesheets) **and** those that perhaps don't - for example images (if you are not doing any optimisation on them).

	Because this directory is **above** the web root (i.e. the `/public` directory) a build step is required to preprocess and/or move the files from this directory into the appropriate location in order to make them publicly available.

* **The `/tasks` directory**

	This directory contains some pre-configured Grunt tasks to make jobs like pre-processing Sass files and minifying your JavaScript a little easier. See the section on [using Grunt](#installing-and-using-grunt---a-primer) for more details.

* **The `/conf` directory**
	
	This contains two files, nginx.conf.example and apache.conf.example. If you don't need any custom server configuration for your site when deployed, you can delete these files. Otherwise refer to the [Custom Server Configuration](#custom-server-configuration) section for more info.

* **The `README.md` file**

	This is the file containing the documentation you are reading currently. Once downloaded, the contents of this file should be deleted and replaced with any documentation or installation instructions that your project needs.

* **The `.gitignore` file**

	The `.gitignore` file at the directory root tells Git to ignore certain files. A selection of commonly excluded files and directories have already been added but feel free to add more (or remove the ones already in there) to best fit your project's needs.

	As a general rule of thumb, any files that are generated by build tasks (such as the stylesheets created by processing Sass source files) **should not** be included in your repository. This is because they can cause regular conflicts when other people pull down the changes and make updates. Instead add these files to your `.gitignore` file and make sure that whenever the site is deployed, the required build tasks are run on the server to generate the output files in situ.

* **The `elf.yml` file**

	This file is used to provide deployment information (and more!) to the internal Clearleft development tool, Elf. For more information on how to use this file, please see the Elf documentation.

* **The `Gruntfile.js` file**

	This is used to set up and configure Grunt tasks. See the section on [using Grunt](#installing-and-using-grunt---a-primer) for more details.

* **The `package.json` file**

	This file is used to specify dependencies used in the Grunt tasks. See the section on [using Grunt](#installing-and-using-grunt---a-primer) for more details.

## Custom Server Configuration

If you are using [Elf](http://elf.clearleft.com) to deploy your site, you can also optionally provide custom Apache and Nginx configuration templates to use on the server. **Most of the time this is not needed** and these are only for special cases (such as when you need to add some custom subdomain redirects or similar).

In this case, you will need to copy one or both of the files in the `/conf` directory into the root of your site, and then remove the `.example` suffix from the filename(s). You can then edit the file(s) as needed and next time the site is deployed these will be used instead of the default server configuration.

It's important to note that these files are actually [Mustache](http://mustache.github.io/) _template_ files that contain Mustache tags in them to populate certain values. Remove these at your own risk - doing so may break expected behaviour when deploying. 

## Included Grunt tasks

This repository includes a number of custom Grunt tasks, located in the `/tasks` directory. All the tasks have both *dev* and *production* variants - by default the **production** tasks will be run, but you can run the dev tasks by passing the `--dev` flag when running Grunt from the command line. The dev tasks normally just skip selected optimisation steps to make builds quicker.

There is also a `--release` flag for when preparing a release (i.e. `grunt --release`) - this is mostly the same as the default *production* tasks but with some more aggressive cleaning of directories and pre-preparation steps beforehand.

**All included tasks can be configured (or disabled) in  the `Gruntfile.js` file.** This file is heavily commented to help you understand what is going on in there.

> Note that the `watch` task is started automatically when running the `grunt` command without specifying a task.

The included tasks are:

* [CSS build](#css-build)
* [JavaScript build](#javascript-build)
* [Image optimisation](#image-optimisation)
* [Font handler](#font-handler)
* [File watcher](#file-watcher)

### CSS build

This task is run using the `grunt css` (or `grunt css --dev`) command.

**Production behaviour (default):**

1. The contents of the destination directory are deleted.
2. Specified Sass files are processed into the destination directory.
3. Vendor prefixes for the target browser list are added.
4. Some statistics on CSS usage are generated in the terminal window. 

**Development behaviour:**

1. Specified Sass files are processed into the destination directory.
2. A source map is generated in the destination directory. 

### JavaScript build

This task is run using the `grunt scripts` (or `grunt scripts --dev`) command.

**Production behaviour (default):**

1. JSHint is (optionally) run on the specified files
2. Provided no issues are found, the scripts are concatenated together.
3. The output of the concatenation is then compressed with UglifyJS, console calls are stripped out.
4. The finished file is saved in the dest directory.

**Development behaviour:**

Development behaviour is the same as the production behaviour, except that some default JSHint settings are different (production settings are stricter around things like `console` calls etc). 

### Image optimisation

This task is run using the `grunt images` (or `grunt images --dev`) command.

**Behaviour (same for production and development):**

1. Images specified in the configuration are run through the relevant image optimisation program and output into the destination directory.
2. Other images that should not be optimised are copied directly into the destination directory, if required.

### Font handler

This task is run using the `grunt fonts` (or `grunt fonts --dev`) command.

**Behaviour (same for production and development):**

1. Font files specified in the configuration are copied directly into the destination directory.

### File watcher

This task is run using the `grunt watch` (or `grunt  watch --dev`) command.

The file watcher observes files specified in the configuration for changes, and re-runs the appropriate tasks automatically. It also starts a Live Reload server so if you have the [browser plugin installed](https://github.com/gruntjs/grunt-contrib-watch/blob/master/docs/watch-examples.md#using-live-reload-with-the-browser-extension) it can automagically refresh your browser when the build tasks have finished running.

To stop the file watcher task once it has been started, press `ctrl c` when in the terminal window.

## Installing and using Grunt - A primer

[Grunt](http://gruntjs.com/) is a JavaScript-based task runner that you run from the command line (i.e. the application **Terminal.app**, on Mac OSX). That means it can help automate certain tasks like processing Sass files or concatenating your JavaScript.

There are a number of Grunt-related files in the repository: The main `Gruntfile.js` file is where you can set up the tasks you want to run, a file called `package.json` which is used to help load any third-party code that Grunt needs (including the core Grunt code itself!) and a directory of bespoke Grunt tasks (the `/tasks` directory).

### Installing Grunt, Node and NPM (one time only)

To get started using Grunt you will need to take the following steps, if you have not already:

1. Install Node.js (and NPM, the Node Package Manager) by downloading and running [the appropriate installer](http://nodejs.org/download/)
2. Install the [Grunt command-line tool](http://gruntjs.com/getting-started#installing-the-cli) - you can do this by opening a terminal window and typing `npm install -g grunt-cli` and hitting enter once you have installed Node and the NPM as per step 1.

**These steps will only ever need to be run once on your machine.**

### Installing project dependencies 

**Each time** you clone your project's repository on a new machine (or if new tasks get added to the Gruntfile), you will install all the project-specific packages that you need. To do that you can follow these steps:

1. Open a new terminal window.
2. Change to the project's root directory (where your `Gruntfile.js` is located) - eg by running the command: `cd /Users/username/Projects/my-new-project` in the terminal window.
3. Install the NPM packages defined in your `package.json` file by running the `npm install` command.
4. Wait...... all done!

### Running Grunt tasks

Grunt tasks are run from the command line. As with installing the project packages (see above) you need to have terminal window open and with the current working directory set to the root directory for your project.

* To run the currently defined Grunt tasks, type `grunt` into the commandline.
* To run specific tasks, use the format `grunt mytask` where 'mytask' is the name of the task itself.

For more details on running tasks see the [Grunt documentation](http://gruntjs.com/getting-started).



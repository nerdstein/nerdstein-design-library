# Nerdstein.net 2017 Design

This repository provides all design-related assets for my site redesign. This readme explains how 
to participate.

There are two main parts of this code repository. 

* [Prototype](prototype) - Static HTML provided by a designer with the new look-and-feel of the site
* [Design Library](design-library) - A Pattern Lab with atoms, molecules, organisms, and pages.

There previously was a prototype that has been deprecated in favor of this Pattern Lab design library. The current progress of the design library pages are also represented as [HTML](http://htmlpreview.github.io/?https://raw.githubusercontent.com/nerdstein/nerdstein-design-library/master/html/patterns/04-pages-01-one-sidebar-one-sidebar/04-pages-01-one-sidebar-one-sidebar.html).

## Architecture

The prototype was intended to be nothing more than a quick visual of design elements on pages.

The design library is intended to split up the prototype into discrete, reusable parts. The library 
is based on Pattern Lab leveraging the Twig convention, which aligns with Drupal 8. 

While the end goal of the design library is to integrate with Drupal 8, the intent is for it to be 
completely decoupled from the site (and potentially reused in other digital properties). 

Workflows will exist to synchronize the design library and the site. The design library will maintain 
releases which will be managed by github and used to segment the downstream change management for the site. 


## Contribution Guide

We will leverage the issue queue and pull requests to organize and review respective changes.

### Making Changes

Visual changes will be made to both the prototype (a quick visual spot check) and the design library 
simultaneously. Pull requests that change one without the other will not be accepted.

### Prototype

Updates will include changes to markup (html) or to the assets that exist under the `files` directory 
(CSS, images, etc).

The markup/CSS is rather irrelevant as long as the responsive visual representation is correct.

### Design Library

#### Dependencies

* PHP
* Composer
* Node / NPM
* Gulp

#### Installation

Steps are run from the `design-library` directory on your local machine

* `composer install`
* `npm install --global gulp-cli`
* `npm install gulp`
* `npm install`

#### Common Structures

All patterns live in `design-library/patterns` and organized as atoms, molecules, organisms, and pages.

Each pattern is a subdirectory under the atom/molecule/organism/page directories. Patterns leverage numbers 
in the directory name to promote ordering. Numbers are ignored by pattern lab otherwise.

Each pattern maintains the following uniform structure:

* Twig file - markup and dynamic elements of the pattern
* SCSS file - style annotations
* JSON file(s) - one or more relevant examples for placeholder content
* MD files - markdown is used to document the usage and dependencies of the pattern


#### SCSS and Gulp

Gulp is used to compile the SCSS into one merged CSS file. This approach was used to minimize 
the creation and synchronization of specific CSS assets, which would warrant config changes to 
both Pattern Lab and Drupal respectively.

#### Twig

TODO - Capture any best practices learned about Twig usage


## Workflows

### Design Library

Steps are run from the `design-library` directory on your local machine.

* `gulp sass` - compiles all SCSS into CSS
* `php core/console --generate` - compiles Pattern Lab assets (please run Gulp separately)
* `php core/console --server` - loads built-in Pattern Lab server
* `php core/console --server --with-watch` - loads built-in Pattern Lab server, compiles Pattern Lab assets as needed
* `php core/console --export` - generates an updated HTML prototype from your changes

Alternatively, all of these tasks can be run automatically using the default gulp task.
 
* `gulp` - Start Pattern Lab server and watch for changes. Watch assets and recompile on changes.


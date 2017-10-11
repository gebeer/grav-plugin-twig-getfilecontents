# TwigGetfilecontentsPlugin

Plugin for grav CMS that adds the TWIG function getfilecontents($filePath) to embed contents of page files (e.g. SVG) inline.

## Installation

To install this plugin, just download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `twig-getfilecontents`. You can find these files on [GitHub](https://github.com/gebeer/grav-plugin-twig-getfilecontents) or via [GetGrav.org](http://getgrav.org/downloads/plugins#extras).

You should now have all the plugin files under

    /your/site/grav/user/plugins/twig-getfilecontents
	
> NOTE: This plugin is a modular component for Grav which requires [Grav](http://github.com/getgrav/grav) and the [Error](https://github.com/getgrav/grav-plugin-error) and [Problems](https://github.com/getgrav/grav-plugin-problems) to operate.

## Usage

Anywhere in your Twig templates use `getfilecontents($filePath)` where $filePath is the physical path to the file you want to embed.  
For a page file this would be something like `page.media.files|first.filepath`  

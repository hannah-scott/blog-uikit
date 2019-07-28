# README

A responsively-designed minimal blogging platform using [UIKit](https://getuikit.com/).

## Adding posts

Post files should be put into assets/content as .html files. If posts are written in Markdown then you can output to HTML with Pandoc (see examples). 

A good alternative to using pandoc is to write in Markdown, upload .md files to assets/content and include [Parsedown](https://github.com/erusev/parsedown) in your project. File extension can be changed in inc/config.php.

## Content folders

Currently the platform supports one layer of folders being created in assets/content.

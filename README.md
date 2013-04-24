fckphplist
==========

fckeditor plugin for phpList

Nov 2012

As of version 2.11.7, the editor in phpList is implemented using a plugin for phpList.

This is a quick transfer of the existing FCKeditor integration into such a plugin. It serves as an 
example on how to integrate the editor. Further work to integrate a newer version of the (F)CKeditor
or other HTML editors is needed. 

See also http://article.gmane.org/gmane.comp.php.phplist.devel/752

The main issue with the latest CKeditor is that the CKfinder filemanager is no longer Open Source,
which means that upgrading to the latest CKeditor will remove the image browse and upload functionality
from phpList. However, the KCfinder project on Sourceforge https://sourceforge.net/projects/kcfinder
seems to resolve this issue.

It just needs to be done :-) Check out https://github.com/bramley/phplist-plugin-ckeditor 

requirements:

- phpList version 2.11.7 or up
- FCKeditor 2.6.8 (https://sourceforge.net/projects/fckeditor/files/FCKeditor/2.6.8/)

How to install:

1. copy the fckphplist.php file and fckphplist directory into the plugin directory of your installation
2. copy the "fckeditor" directory from the FCKeditor distribution into the fckphplist directory
3. copy the "fckphplist/filemanager/connectors/phplist/" into "editor/filemanager/connectors/
4. cd to the fckphplist directory and apply the two patches (run apply.sh or manually)

the structure should be:

| - plugins

| - - fckphplist.php

| - - fckphplist

| - - - config.php

| - - - firefox_detect.patch

| - - - phplist_config.path

| - - - apply.sh

| - - - fckeditor

| - - - - editor

| - - - - - filemanager

| - - - - - - connectors

| - - - - - - - phplist

Then edit the fckphplist.php source and mark it "enabled" at the top.

Now load the Campaign Creation page and the editor should load.

If not, feel free to clone and fix.



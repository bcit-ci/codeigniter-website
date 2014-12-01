###################
CodeIgniter Website
###################

This is the official informational website for the 
`CodeIgniter project <https://github.com/bcit-ci/CodeIgniter/>`_.

The website has been open-sourced in the interest of transparency.
We welcome issues and pull requests, to handle suggestions or corrections 
to the style or structure of the website. 
We will be a bit more reserved with the content :-/

*****************
Programming Style
*****************

The website exhibits "good" programming style, although definitely not
the only way to do things. 

Some of the programming design decisions reflected:

-   The architecture adheres more to the "model-view-adapter" convention,
    where the view is unaware of the source of data and the model is unaware of
    how any data might be presented. The controllers are go-betweens.
-   A "master template" lets each controller focus 
    only with building its part of a webpage.
-   A base controller takes care of assembling finished pages, using the 
    master template.
-   Using the template parser eliminates PHP code from
    the views, where possible.
-   Mock data for the recent news and most recently active threads, means
    that the website can be tested locally, without needing access to 
    the live forum database.
-   View fragments are used to style single "records" on their own,
    improving cohesion.
-   The CodeIgniter framework folder has been moved outside of the webapp,
    in this case to a "system3" folder at the same hierarchy level as the 
    document root.
-   An ".htaccess" file is incorporated, to configure Apache to remote
    index.php from any URLs.

*******
Sitemap
*******

The site has a simple structure ... basically two-level 
(homepage and then content pages). 
There are a couple of additional pages, one for IRC for the visitors 
who do not have a suitable client, and
one for related but subordinate information, accessible from the footer navbar.

Appropriate comments are found in each of the controllers.

***************
Project Folders
***************

/application    the obvious
/assets         CSS, javascript & media
/data           zipped files for downloading, avatars
/user_guide     the user guide for CI2
/userguide3     the user guide for CI3


************
Installation
************

Please see the 
`installation section <http://codeigniter.com/userguide3/installation/index.html>`_
of the CodeIgniter User Guide.

*******
License
*******

Please see the `license
agreement <http://codeigniter.com/userguide3/license.html>`_

*********
Resources
*********

-  `User Guide <http://codeigniter.com/userguide3/>`_
-  `Community Forums <https://forum.codeigniter.com/>`_
-  `Community Wiki <https://github.com/bcit-ci/CodeIgniter/wiki/>`_
-  `Community IRC <http://codeigniter.com/irc>`_

***************
Acknowledgement
***************

The CodeIgniter Project would like to thank the Reactor Engineers, EllisLab, 
all the contributors to the CodeIgniter project, and you, the CodeIgniter user.

This repository is maintained by James Parry, Project Lead.
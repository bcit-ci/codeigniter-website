###################
CodeIgniter Website
###################

This was an official descriptive website for the 
`CodeIgniter project <https://github.com/bcit-ci/CodeIgniter/>`_.

This repository is no longer in effect, replaced by the `CodeIgniter4
version <https://github.com/codeigniter4projects/website2>`_.

*****************
Programming Style
*****************

The website exhibits "good" programming style, although definitely not
the only way to do things. 

Some of the programming design decisions reflected:

-   The <code>public</code> folder is the intended document root for the webapp.
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
-   An <code>.htaccess</code> file is incorporated, to configure Apache to remove
    index.php from any URLs.
-   Some of the formatting has gotten out of hand, so I am trying to
    conform to the CodeIgniter style guide as much as practical.

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
/public         document root
    /assets         CSS, javascript & media
    /data           zipped files for downloading, avatars
/user_guide     symbolic link to the current user guide
/userguide2     the user guide for CI2
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

-  `User Guide <https://codeigniter.com/userguide3/>`_
-  `Community Forums <https://forum.codeigniter.com/>`_
-  `Community Wiki <https://github.com/bcit-ci/CodeIgniter/wiki/>`_
-  `Community Slack Channel <https://codeigniterchat.slack.com>`_

***************
Acknowledgement
***************

The CodeIgniter Project would like to thank the Reactor Engineers, EllisLab, 
all the contributors to the CodeIgniter project, and you, the CodeIgniter user.

This repository is maintained by James Parry, Project Lead.

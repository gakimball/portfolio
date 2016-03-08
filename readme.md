# Hello.

This is all of the code for my old portfolio website, <http://geoffkimball.com>. In March 2016 I launched a new portfolio, which is not this one.

If you want to run the code on your local machine for some reason:

    $ git clone https://github.com/gakimball/portfolio.git
    $ cd portfolio
    $ # If you don't have Composer installed globally
    $ curl -sS https://getcomposer.org/installer | php
    $ php composer.phar install

To compile the Sass files you need the `sass`, `compass`, `susy`, and `modular-scale` gems.

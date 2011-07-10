# Loveboard

Realtime dashboard for likes and +1s. Notifies you in a browser window about new likes and +1s on another page in real time. This is a technology demo and not intended for use in a production environment.

Loveboard currently uses [Pusher](http://pusher.com) and PHP, but maybe there will be a [node.js](http://nodejs.org/)/[Socket.IO](http://socket.io/) version at some point in the future.

## Author

[Florian Eckerstorfer](http://florianeckerstorfer.com)


## Installation

As mentioned above, Loveboard is intended to be a technology demonstration and is definitely not ready for production use. If you want to play around or contribute to the project, here is some advice how to install Loveboard.

1. `git clone git://github.com/florianeckerstorfer/Loveboard.git ./`
1. `git submodule init`
1. `git submodule update`
1. `cp data/pusher.php.sample data/pusher.php`
1. Change the three constants in `data/pusher.php`.
1. chmod -R 777 data/


## Technologies, Libraries and Toolkits

- [HTML5 Boilerplate](http://html5boilerplate.com/)
- [jQuery](http://jquery.com/)
- [jQuery UI](http://jqueryui.com/)
- [Pusher](http://pusher.com/)
- [Twig](http://www.twig-project.org/)

Made with TextMate.


## License

The MIT License (MIT)
Copyright (c) 2011 Florian Eckerstorfer

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
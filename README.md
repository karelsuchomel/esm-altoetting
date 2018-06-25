# Emmanuel School of Mission
Wordpress theme. Designed by Marie Brothánková, implemented by Karel Suchomel.

## Setup build system with GruntJS

**dependencies**
If you've never run grunt on your system, chances are, you'll need to install
NodeJS, Grunt CLI, Ruby and SASS (which is ruby gem).

NodeJS
```
$ sudo apt-get install node
```

Grunt CLI
```
$ npm install -g grunt-cli
```

Ruby
```
$ sudo apt-get install ruby
```

SASS (as a ruby gem)
```
$ sudo su -c "gem install sass"
```


**install local build system**
To start instalation, change directory to /development and run
``` 
$ npm install
```

To use SASS you'll also have to run
```
$ npm install sass
```
and

```
$ npm install grunt-postcss pixrem autoprefixer cssnano
```

That should be done. Run the build system within the /development with ```$ grunt``` command.

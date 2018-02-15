module.exports = function (grunt) {

    // globs where our JS files are found - used below in uglify and watch
    var jsFilePaths = [
        'js/*.js',
        'js/app/*.js',
        'js/app/modules/*.js'
    ];
    
    

    // Project configuration
    grunt.initConfig({
        // you can read in JSON files, which are then set as objects. We use this below with banner
        pkg: grunt.file.readJSON('package.json'),

        // setup some variables that we'll use below
        appDir: 'public/',
        builtDir: 'public/build/',

        // Uglify js files (remove spaces and line breaks)
        uglify: {
            my_target: {
                files: [{
                    expand: true,
                    cwd:    '<%= appDir %>js',
                    src:    '**/*.js',
                    dest:   '<%= buildDir %>js'
                  }]
            }
        },
        
        // Minify css default file
        // Because in order to minimize the nb of queries between server and client, we will have only one css
        cssmin: {
            minify: {
                src: '<%= appDir %>/css/default.css',
                dest: '<%= buildDir %>/css/default.min.css'
            }
        },

        // Compile LESS to CSS on saving
        less: {
            development: {
                options: {
                    compress: false,
                    yuicompress: false,
                    optimization: 2
                },
                files: {
                    //   Destination file       :      Source file
                    "<%= appDir %>/css/*.css": "<%= appDir %>/less/*.less"
                }
            }
        },

        // run "Grunt watch" and have it automatically update things when files change
        watch: {
            // watch all JS files and run jshint
            scripts: {
                // self executing function to reuse jsFilePaths, but prefix each with appDir
                files: (function() {
                    var files = [];
                    jsFilePaths.forEach(function(val) {
                        files.push('<%= appDir %>/'+val);
                    });

                    return files;
                })(),
                tasks: ['uglify']
            },
            // watch all .less files and run less
            styles: {
                files: ['<%= appDir %>/less/*.less'],
                tasks: ['copy', 'less'],
                options: {
                    spawn: false
                }
            }
        }

    });

    // Load tasks from our external plugins. These are what we're configuring above
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-requirejs');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-cssmin');


    // the "default" task (e.g. simply "Grunt") runs tasks for development
    grunt.registerTask('default', ['requirejs','copy', 'less']);
    //grunt.registerTask('default', ['sass', 'jshint', 'less']);

    // register a "production" task that sets everything up before deployment
    grunt.registerTask('production', ['requirejs', 'copy', 'uglify', 'less', 'cssmin']);
};


/*****************************************/

// Change this path to your destination:

var wwwRoot = '';
var buildPath = 'build';

// http://gruntjs.com/getting-started
// http://www.integralist.co.uk/posts/grunt-boilerplate.html

/*****************************************/

module.exports = function (grunt) {
    'use strict';

    // Force use of Unix newlines
    grunt.util.linefeed = '\n';

    // var os = require('os');
    // var path = require('path');

    require('load-grunt-tasks')(grunt);

    // measures the time each task takes
    // require('time-grunt')(grunt);

    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),

        settings: {
            // Working paths
            wwwSource: 'source/',
            scriptsSourceDir: 'source/scripts/',
            stylesSourceDir: 'source/styles/',
            imagesSourceDir: 'source/images/',
            fontsSourceDir: 'source/fonts/',

            // Distribution paths
            wwwRoot: wwwRoot,
            build: buildPath,
            jsDir: buildPath + '/scripts/',
            cssDir: buildPath + '/styles/',
            imagesDir: buildPath + '/images/',
            fontsDir: buildPath + '/fonts/',
        },
    
        banner: '/*!\n' +
                ' * Bootstrap v<%= pkg.version %> (<%= pkg.homepage %>)\n' +
                ' * Copyright 2011-<%= grunt.template.today("yyyy") %> <%= pkg.author %>\n' +
                ' * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)\n' +
                ' */\n',
        jqueryCheck: 'if (typeof jQuery === \'undefined\') {\n' +
                    '  throw new Error(\'Bootstrap\\\'s JavaScript requires jQuery\')\n' +
                    '}\n',
        jqueryVersionCheck: '+function ($) {\n' +
                            '  var version = $.fn.jquery.split(\' \')[0].split(\'.\')\n' +
                            '  if ((version[0] < 2 && version[1] < 9) || (version[0] == 1 && version[1] == 9 && version[2] < 1) || (version[0] >= 4)) {\n' +
                            '    throw new Error(\'Bootstrap\\\'s JavaScript requires at least jQuery v1.9.1 but less than v4.0.0\')\n' +
                            '  }\n' +
                            '}(jQuery);\n\n',

        clean: {
            dist: '<%= settings.build %>'
        },

        sass: {
            options: {
                outputStyle: 'compressed' // Default: nested Values: nested, expanded, compact, compressed
            },
            dev: {
            options: {
                sourceComments: true,
                sourceMap: true,
                outputStyle: 'expanded'
            },
              files: [
                  {
                      expand: true,
                      cwd: '<%= settings.stylesSourceDir %>',
                      src: ['**/*.{scss,sass}'],
                      dest: '<%= settings.cssDir %>',
                      ext: '.css'
                  }
              ]
            },
            dist: {
              files: [
                  {
                      expand: true,
                      cwd: '<%= settings.stylesSourceDir %>',
                      src: ['**/*.{scss,sass}'],
                      dest: '<%= settings.cssDir %>',
                      ext: '.css'
                  }
              ]
            }
        },
        
        postcss: {
            options: {
                map: {
                    inline: false,
                    annotation: true,
                    sourcesContent: true
                },
                processors: [
                    require('autoprefixer')({
                        browsers: [
                          //
                          // Official browser support policy:
                          // http://v4-alpha.getbootstrap.com/getting-started/browsers-devices/#supported-browsers
                          //
                          'Chrome >= 35', // Exact version number here is kinda arbitrary
                          // Rather than using Autoprefixer's native "Firefox ESR" version specifier string,
                          // we deliberately hardcode the number. This is to avoid unwittingly severely breaking the previous ESR in the event that:
                          // (a) we happen to ship a new Bootstrap release soon after the release of a new ESR,
                          //     such that folks haven't yet had a reasonable amount of time to upgrade; and
                          // (b) the new ESR has unprefixed CSS properties/values whose absence would severely break webpages
                          //     (e.g. `box-sizing`, as opposed to `background: linear-gradient(...)`).
                          //     Since they've been unprefixed, Autoprefixer will stop prefixing them,
                          //     thus causing them to not work in the previous ESR (where the prefixes were required).
                          'Firefox >= 38', // Current Firefox Extended Support Release (ESR); https://www.mozilla.org/en-US/firefox/organizations/faq/
                          // Note: Edge versions in Autoprefixer & Can I Use refer to the EdgeHTML rendering engine version,
                          // NOT the Edge app version shown in Edge's "About" screen.
                          // For example, at the time of writing, Edge 20 on an up-to-date system uses EdgeHTML 12.
                          // See also https://github.com/Fyrd/caniuse/issues/1928
                          'Edge >= 12',
                          'Explorer >= 9',
                          // Out of leniency, we prefix these 1 version further back than the official policy.
                          'iOS >= 8',
                          'Safari >= 8',
                          // The following remain NOT officially supported, but we're lenient and include their prefixes to avoid severely breaking in them.
                          'Android 2.3',
                          'Android >= 4',
                          'Opera >= 12'
                        ]
                    }),
                    require('postcss-flexbugs-fixes')(),
                    // require('cssnano')() // minify the result
                ]
            },
            dist: {
                files: [
                    {
                        expand: true,
                        cwd: '<%= settings.cssDir %>',
                        src: ['**/*.css'],
                        dest: '<%= settings.cssDir %>',
                        ext: '.css'
                    }
                ]
            }
        },

        // JS build configuration
        babel: {
          dev: {
            options: {
              sourceMap: true,
              modules: 'ignore'
            },
            files: {
              '<%= settings.jsDir %>bootstrap/util.js'      : '<%= settings.scriptsSourceDir %>bootstrap/util.js',
              '<%= settings.jsDir %>bootstrap/alert.js'     : '<%= settings.scriptsSourceDir %>bootstrap/alert.js',
              '<%= settings.jsDir %>bootstrap/button.js'    : '<%= settings.scriptsSourceDir %>bootstrap/button.js',
              '<%= settings.jsDir %>bootstrap/carousel.js'  : '<%= settings.scriptsSourceDir %>bootstrap/carousel.js',
              '<%= settings.jsDir %>bootstrap/collapse.js'  : '<%= settings.scriptsSourceDir %>bootstrap/collapse.js',
              '<%= settings.jsDir %>bootstrap/dropdown.js'  : '<%= settings.scriptsSourceDir %>bootstrap/dropdown.js',
              '<%= settings.jsDir %>bootstrap/modal.js'     : '<%= settings.scriptsSourceDir %>bootstrap/modal.js',
              '<%= settings.jsDir %>bootstrap/scrollspy.js' : '<%= settings.scriptsSourceDir %>bootstrap/scrollspy.js',
              '<%= settings.jsDir %>bootstrap/tab.js'       : '<%= settings.scriptsSourceDir %>bootstrap/tab.js',
              '<%= settings.jsDir %>bootstrap/tooltip.js'   : '<%= settings.scriptsSourceDir %>bootstrap/tooltip.js',
              '<%= settings.jsDir %>bootstrap/popover.js'   : '<%= settings.scriptsSourceDir %>bootstrap/popover.js'
            }
          },
          dist: {
            options: {
              modules: 'ignore'
            },
            files: {
              '<%= concat.bootstrap.dest %>' : '<%= concat.bootstrap.dest %>'
            }
          }
        },

        stamp: {
          options: {
            banner: '<%= banner %>\n<%= jqueryCheck %>\n<%= jqueryVersionCheck %>\n+function ($) {\n',
            footer: '\n}(jQuery);'
          },
          bootstrap: {
            files: {
              src: '<%= concat.bootstrap.dest %>'
            }
          }
        },

        concat: {
          options: {
            // Custom function to remove all export and import statements
            process: function (src) {
              return src.replace(/^(export|import).*/gm, '');
            },
            stripBanners: false
          },
          bootstrap: {
            src: [
              '<%= settings.scriptsSourceDir %>bootstrap/util.js',
              '<%= settings.scriptsSourceDir %>bootstrap/alert.js',
              '<%= settings.scriptsSourceDir %>bootstrap/button.js',
              '<%= settings.scriptsSourceDir %>bootstrap/carousel.js',
              '<%= settings.scriptsSourceDir %>bootstrap/collapse.js',
              '<%= settings.scriptsSourceDir %>bootstrap/dropdown.js',
              '<%= settings.scriptsSourceDir %>bootstrap/modal.js',
              '<%= settings.scriptsSourceDir %>bootstrap/scrollspy.js',
              '<%= settings.scriptsSourceDir %>bootstrap/tab.js',
              '<%= settings.scriptsSourceDir %>bootstrap/tooltip.js',
              '<%= settings.scriptsSourceDir %>bootstrap/popover.js'
            ],
            dest: '<%= settings.jsDir %>bootstrap/<%= pkg.name %>.js'
          }
        },

        uglify: {
          options: {
            compress: {
              warnings: false
            },
            mangle: true,
            preserveComments: /^!|@preserve|@license|@cc_on/i
          },
          bootstrap: {
            src: '<%= concat.bootstrap.dest %>',
            dest: '<%= settings.jsDir %>/<%= pkg.name %>.min.js'
          },
          main: {
            src: '<%= settings.scriptsSourceDir %>/*.js',
            dest: '<%= settings.jsDir %>/main.js'
          }
        },

        copy: {
          vendorScripts: {
            expand: true,
            cwd: '<%= settings.scriptsSourceDir %>vendor',
            src: '**',
            dest: '<%= settings.jsDir %>vendor',
            flatten: true,
            filter: 'isFile',
          },
          vendorStyles: {
            expand: true,
            cwd: '<%= settings.stylesSourceDir %>vendor',
            src: '**',
            dest: '<%= settings.cssDir %>vendor',
            flatten: true,
            filter: 'isFile',
          },
          systemFiles: {
            files: {
              '<%= settings.wwwRoot %>.htaccess'        : '<%= settings.wwwSource %>.htaccess',
              '<%= settings.wwwRoot %>browserconfig.xml': '<%= settings.wwwSource %>browserconfig.xml',
              '<%= settings.wwwRoot %>crossdomain.xml'  : '<%= settings.wwwSource %>crossdomain.xml',
              '<%= settings.wwwRoot %>humans.txt'       : '<%= settings.wwwSource %>humans.txt',
              '<%= settings.wwwRoot %>robots.txt'       : '<%= settings.wwwSource %>robots.txt',
            }
          },
          fonts: {
            expand: true,
            cwd: '<%= settings.fontsSourceDir %>',
            src: '**',
            dest: '<%= settings.fontsDir %>',
            flatten: true,
            filter: 'isFile',
          },
          favicon: {
            expand: true,
            cwd: '<%= settings.imagesSourceDir %>/favicon',
            src: '**',
            dest: '<%= settings.imagesDir %>/favicon',
            flatten: true,
            filter: 'isFile',
          },
        },

        imagemin: {
            dist: {
                options: {
                    optimizationLevel: 5
                },
                files: [{
                    expand: true,
                    cwd: '<%= settings.imagesSourceDir %>',
                    src: ['**/*.{png,jpg,gif,svg}', '!favicon/**'],
                    dest: '<%= settings.imagesDir %>'
                }]
            }
        },

        concurrent: {
            clean: ['clean'],
            dist: ['styles', 'bootstrap-scripts', 'scripts', 'images', 'fonts', 'copy:vendorStyles', 'copy:vendorScripts', 'copy:favicon', ]
        },

        watch: {
            options: { livereload: true },
            styles: {
                files: ['<%= settings.stylesSourceDir %>**/*.{scss,sass,css}'],
                tasks: ['sass:dev', 'postcss']
            },
            scripts: {
                files: ['<%= settings.scriptsSourceDir %>**/*.js'],
                tasks: ['scripts']
            },
            images: {
                files: ['<%= settings.imagesSourceDir %>**/*.{png,jpg,gif,svg}'],
                tasks: ['images']
            },
            fonts: {
                files: ['<%= settings.fontsSourceDir %>**/*.*'],
                tasks: ['fonts']
            }
        },


    })

    // initalize !only once!
    grunt.registerTask('init', ['copy:systemFiles']);

    // CSS  distribution task.
    grunt.registerTask('styles', ['sass:dist', 'postcss']);

    // JS distribution task.
    grunt.registerTask('bootstrap-scripts', ['babel:dev', 'concat:bootstrap', 'babel:dist', 'stamp:bootstrap', 'uglify:bootstrap']);
    grunt.registerTask('scripts', ['uglify:main']);

    // Images distribution task.
    grunt.registerTask('images', ['newer:imagemin']);

    // Fonts distribution task.
    grunt.registerTask('fonts', ['copy:fonts']);

    // Build (Compile, dist, production) task
    grunt.registerTask('compile', ['concurrent:clean', 'concurrent:dist']);
    grunt.registerTask('default', ['compile']);
}

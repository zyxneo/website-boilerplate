
/*****************************************/

// Change this path to your destination:

var buildPath = 'views/build';

/*****************************************/

module.exports = function (grunt) {
    'use strict';

    // Force use of Unix newlines
    grunt.util.linefeed = '\n';

    // var os = require('os');
    // var path = require('path');

    grunt.loadNpmTasks('grunt-babel');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-postcss');
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-scss-lint');
    grunt.loadNpmTasks('grunt-stamp');
    grunt.loadNpmTasks('grunt-svgmin');

    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),

        settings: {
            // Working paths
            scriptsSourceDir: 'source/scripts/',
            stylesSourceDir: 'source/styles/',
            imagesSourceDir: 'source/images/',
            fontsSourceDir: 'source/fonts/',

            // Distribution paths
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
                precision: 6,
                sourceComments: false,
                sourceMap: true,
                outputStyle: 'expanded'
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
          core: {
            src: '<%= concat.bootstrap.dest %>',
            dest: '<%= settings.jsDir %>/<%= pkg.name %>.min.js'
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
        },

        imagemin: {
            dist: {
                options: {
                    optimizationLevel: 5
                },
                files: [{
                    expand: true,
                    cwd: '<%= settings.imagesDir %>src/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: '<%= settings.imagesDir %>build'
                }]
            }
        },

        svgmin: {
            options: {
                plugins: [
                    { removeViewBox: false },
                    { removeUselessStrokeAndFill: false },
                    { removeEmptyAttrs: false },
                    { sortAttrs: true },
                    {
                        cleanupNumericValues: {
                            floatPrecision: 1
                        }
                    }
                ]
            },
            dist: {
                files: [{
                    expand: true,
                    cwd: '<%= settings.imagesDir %>src/',
                    src: '{,*/}*.svg',
                    dest: '<%= settings.imagesDir %>build',
                    ext: '.svg'
                }]
            }
        },

        watch: {
            options: { livereload: true },
            styles: {
                files: ['<%= settings.stylesSourceDir %>**/*.{scss,sass,css}'],
                tasks: ['styles']
            },
            scripts: {
                files: ['<%= settings.scriptsSourceDir %>**/*.js'],
                tasks: ['scripts']
            }
        },


    })

    // CSS  distribution task.
    grunt.registerTask('styles', ['sass', 'postcss']);

    // JS distribution task.
    grunt.registerTask('scripts', ['babel:dev', 'concat', 'babel:dist', 'stamp', 'uglify:core', 'copy:vendorScripts']);
    
    grunt.registerTask('compile', ['clean', 'styles', 'scripts']);
    grunt.registerTask('default', ['compile']);
}

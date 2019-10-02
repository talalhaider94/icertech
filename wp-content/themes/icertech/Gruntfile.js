module.exports = function(grunt) {

	// Project configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		// Generate styles.css & styles.min.css from LESS files
		less: {
			compile: {
				options: {
					paths: ['css/less', 'assets/bootstrap/less', 'assets/slick', 'fonts/font-awesome-4.4.0/less']
				},files: {
					'css/styles.css': 'css/less/bootstrap-custom.less'
				}
			},
			minify: {
				options: {
					cleancss: true,
					report: 'min'
				},
				files: {
					'css/styles.min.css': 'css/styles.css',
				}
			}
		},

		postcss: {
			options: {
				processors: [
					//require('pixrem')(), // add fallbacks for rem units
					require('autoprefixer-core')({browsers: 'last 2 versions'}), // add vendor prefixes
					//require('cssnano')() // minify the result
				]
			},
			dist: {
				files: {
					'css/styles.min.css': 'css/styles.min.css',
				}
			}
		},

		// Concatonate & minify all included js files, save to scripts.js
		concat: {
			combineJS: {
				src: [
				/* Bootstrap js files */
				'assets/bootstrap/js/transition.js',
				'assets/bootstrap/js/alert.js',
				'assets/bootstrap/js/button.js',
				'assets/bootstrap/js/carousel.js',
				'assets/bootstrap/js/collapse.js',
				'assets/bootstrap/js/dropdown.js',
				'assets/bootstrap/js/modal.js',
				'assets/bootstrap/js/tooltip.js',
				'assets/bootstrap/js/popover.js',
				'assets/bootstrap/js/scrollspy.js',
				'assets/bootstrap/js/tab.js',
				'assets/bootstrap/js/affix.js',
				/* Other js libraries */
				'assets/slick/slick.js',
				/* Our custom js files */
				'js/source/banners.js',
				'js/source/scroll-to.js',
				'js/source/quantity-price.js',
				],
				dest: 'js/scripts.js'
			}
		},
		uglify: {
			sitewideJS: {
				options: {
					report: 'min'
				},
				src: 'js/scripts.js',
				dest: 'js/scripts.min.js'
			},
			faqsJS: {
				options: {
					report: 'min'
				},
				src: 'js/source/faqs-filter.js',
				dest: 'js/faqs-filter.min.js'
			}
		},

		// watch files and run tasks
		watch: {
			js : {
				files:['js/source/*.js'],
				tasks:['concat', 'uglify'],
				options: {
					spawn:false
				}
			},
			css : {
				files: ['css/less/*.less'],
				tasks:['less', 'postcss'],
				options: {
					spawn:false
				}
			}
		}

	});

	// Load plugins.
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-postcss');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');

	// Tasks
	grunt.registerTask('default', ['less', 'postcss', 'concat', 'uglify']);

};

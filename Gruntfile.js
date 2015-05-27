module.exports = function (grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    less: {
      development: {
        options: {
          compress: true,
          yuicompress: true,
          optimization: 2
        },
        files: {
          "style.css": "less/style.less" // destination file and source file
        }
      }
    },
    postcss: {
      options: {
        map: {inline:false},
        processors: [
          require('autoprefixer-core')({browsers: 'last 2 version'})
        ]
      },
      dist: {
        files: {
          'style.css': 'style.css'
        }
      }
    },
    watch: {
      styles: {
        files: ['less/*.less', 'less/**/*.less'], // which files to watch
        tasks: ['less', 'postcss'],
        options: {
          livereload: true
        }
      }
    }
  });

  grunt.loadNpmTasks('grunt-postcss');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['less', 'postcss', 'watch']);
};
module.exports = function(grunt) {

grunt.initConfig({
  responsive_images: {
    responsive: {
      options: {
        sizes: [{
          width: 480
        },
        {
          width: 640
        },
        {
          width: 960
        },
        {
          width: 1280
        },
        {
          width: 1600
        },
        {
          width: 1900
        }
			]
      },
      files: [{
        expand: true,
        src: ['sources/img/int/**.{jpg,gif,png}'],
        dest: './test/'
      }]
    }
  },
})

	grunt.loadNpmTasks('grunt-responsive-images');

  grunt.registerTask('default', ['responsive_images']);

};

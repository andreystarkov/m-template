module.exports = function(grunt) {
grunt.initConfig({
  responsive_images: {
    responsive: {
      options: {
        rename: true,
        quality: 66,
        sizes: [
          {
            width: 320,
            name: 'tiny'
          },
          {
            width: 480,
            name: 'xsmall'
          },
          {
            width: 768,
            name: 'small'
          },
          {
            width: 1024,
            name: 'medium'
          },
          {
            width: 1200,
            name: 'laptop'
          },
          {
            width: 1400,
            name: 'large'
          },
          {
            width: 1600,
            name: 'xlarge'
          },
          {
            width: 1900,
            name: 'full'
          }
        ]
      },
      files: [{
        expand: true,
        src: ['./sources/photos/**/*.{jpg,JPG}'],
        dest: './build/img'
      }]
    }
  }
});


	grunt.loadNpmTasks('grunt-responsive-images');

  grunt.registerTask('default', ['responsive_images']);

};

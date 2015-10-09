'use strict';
  module.exports = function(grunt) {

  grunt.initConfig({
  	responsive_videos: {
  		myTask: {
  			options: {
  				sizes: [{
  					width: 720,
  					poster: true
  				}],
  				encodes: [{
  					webm: [{
  						'-vcodec': 'libvpx'
  					}, {
  						'-acodec': 'libvorbis'
  					}, {
  						'-crf': '12'
  					}, {
  						'-b:v': '1.5M',
  					}, {
  						'-q:a': '100'
  					}]
  				}]
  			},
  			files: [{
  				expand: true,
  				src: ['sources/video/**.{mov,mp4}'],
  				dest: 'build/motion/'
  			}]
  		}
  	}
  });

  grunt.loadNpmTasks('grunt-responsive-videos');

  grunt.registerTask('default', [
    'responsive_videos'
  ]);

};
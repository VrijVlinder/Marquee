This plugin is based on Categories Image header by peregrine. Thanks P !

contact@vrijvlinder.com

This plugin puts a text and/or an image marquee on the discussions index header.




Checking the fields hides the images by order stored.The first 6 are for gif images but you can change that in the plugin if you want others just change the file type. The default image is image1 , you can leave these fields unchecked if you want the default image1 to be the one displayed.Checking up to the 5th image will hide the Image Marquee only. Checking out all the fields hides the whole marquee.

To edit the text marquee you do it in the class.marquee.plugin.php . 

To edit the style or hide something use the marq.css file.

fonts are in the fonts folder 

About the fonts

to change fonts or add fonts to the marquee I added a fonts file with a selection of fonts but you can add more

here is an example of how to change the font face in the css file using these fonts, you don't need to put all of them just the one and it's type but these are examples of how to put them in:

@font-face {
 font-family: 'FontName';
 src: url('plugins/Marquee/fonts/FontName.otf')format('embedded-opentype');
 src: url('plugins/Marquee/fonts/FontName.eot?#iefix') format('embedded-opentype'),
 url('plugins/Marquee/fonts/FontName.eot?#iefix') format('embedded-opentype')
 url('plugins/Marquee/fonts/FontName.woff') format('woff'),
 url('plugins/Marquee/fonts/FontName.ttf') format('truetype'),
 url('plugins/Marquee/fonts/FontName.svg#FontName') format('svg');
 font-weight: normal;
 font-style: normal;
}
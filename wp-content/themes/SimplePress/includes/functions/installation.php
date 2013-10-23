 <span class="boldtext">1. How do I install SimplePress onto my wordpress blog? </span>
<div class="indent">
  <p>There are several files included in the ZIP folder. These include wordpress theme files, plugin files, and photoshop files. To installed your wordpress theme you will first need to upload the theme/plugin files via FTP to your server. </p>
  <p>First you are going to upload the theme folder. Inside the ZIP folder you downloaded you will see a folder named &quot;theme.&quot; Within it is a folder named &quot;SimplePress.&quot; Via ftp, upload the &quot;SimplePress&quot; folder to your Wordpress themes directory. Depending on where you installed Wordpress on your server, the wp themes folder will be located in a path similar to: /public_html/blog/wp-content/themes. </p>
  <p>Next you need to select SimplePress and make it your default theme. Click on the design link, and under the themes tab locate SimplePress from the selection of themes and activate it. Your blog should now be updated with your new theme. </p>
<p>Finally, once the theme has been activated, you should navigate to the Appearances > SimplePress Theme Options page. Here you can adjust settings pertaining to theme's display. Once you have adjusted whatever settings you would like to change click the "save" button. You must click the "save" button for the options to be saved to the database. Even if you did not change anything you should click the save button once before using the theme to insure that the database has been written correctly.</p>
</div>
<span class="boldtext">2. How do I add the thumbnails to my posts? </span>
<div class="indent">
  <p>SimplePress utilizes a script called TimThumb to automatically resize images. Whenever you make a new post you will need to add a custom field. Scroll down below the text editor and click on the &quot;custom fields&quot; link. In the &quot;Name&quot; section, input &quot;Thumbnail&quot; (this is case sensitive). In the &quot;Value&quot; area, input the url to your thumbnail image. Your image will automatically be resized and cropped. The image must be hosted on your domain. (this is to protect against bandwidth left) </p>
  <p><span class="style1">Important Note: You <u>must</u> CHMOD the &quot;cache&quot; folder located in the SimplePress directory to 777 for this script to work. You can CHMOD (change the permissions) of a file using your favorite FTP program. If you are confused try following <a href="http://www.siteground.com/tutorials/ftp/ftp_chmod.htm"><u>this tutorial</u></a><u>.</u> Of course instead of CHMODing the template folder (as in the tutorial) you would CHMOD the &quot;cache&quot; folder found within your theme's directory. </span></p>
</div>
<span class="boldtext">3. How do I add my title/logo? </span>
<div class="indent">In this theme the title/logo is an image, which means you will need an image editor to add your own text. You can do this by opening the blank logo image located at Photoshop Files/logo_blank.png, or by opening the logo PSD file located at Photoshop Files/logo.psd. Replace the edited logo with the old logo by placing it in the following directory: theme/SimplePress/images, and naming the file "logo.png". If you need more room, or would like to edit the logo further, you can always do so by opening the original fully layered PSD file located at Photoshop Files/SimplePress.psd  </div>

<span class="boldtext">4. How do I manage advertisements on my blog? </span>
<div class="indent">You can change the images used in each of the advertisements, as well as which URL each ad points to, through the custom option pages found in wp-admin. Once logged in to the wordpress admin panel, click &quot;Design&quot; and then &quot;SimplePress Theme Options&quot; to reveal the various theme options. You can also use the 125x125 advertisement widget by adding the ET: Advertisement widget to your sidebar, and filling in the required fields.  </div>

  <span class="boldtext">5. How do I set up the featured slider on the homepage? </span>
  <div class="indent">
  <p>The featured slider can be set up using two different methods. You can either popular the tabs using Pages, or you can popular it using posts from a designated category. In the Appearances > SimplePress Theme Options page in wp-admin, under the General Settings > Featured Slider tab, you will see an option that says "Use Pages." If you select this option then pages will be used, if you don't then posts will be used. If you want to use Pages then you simply select "Use Pages," and then below the option select which pages you would like to display in the slider. If you don't use pages, then simply select the "Featured Category" from the dropdown menu and posts from that category will be added to the slider. </p></div>
  
  
  <span class="boldtext">6. How do I setup the three blurbs on the homepage, below the slider? </span>
  <div class="indent">
  <p>These blurbs are created using pages. Create three pages that you would like to use for these three blurbs, then go to the Appearances > SimplePress Theme Options page and click the General Settings > Homepage tab. Under the Service Page 1/2/3 dropdown menus, choose the three pages you would like to use. Witin the pages you can use a "more" tag to truncate the post preview.
</p>
<p>Next you will need to assign an Icon image to each blurb. This works just like Thumbnail images, except you use the custom field name "Icon" instead. So create a custom field for each page with the name of "Icon" and a value of the icon image you would like to use. Icons must not exceed 36x36 pixels to insure optimum display.</p>
</div>

  <span class="boldtext">7. How do I add a gallery section? </span>
  <div class="indent">
  <p>The gallery section is created using posts. The first thing you will need to do is create a new category that you would like to use as your gallery. Once it has been created, open the Appearances > SimplePress Theme Options page in wp-admin, and in the General Settings > General tab, locte the "Choose a Gallery Category" setting. Select your category from the dropdown menu and click "save." Any posts added to this category will automatically assume the gallery layout. To add an image to each gallery post, simply add the Thumbnail custom field like you would any normal post.
</p>
</div>
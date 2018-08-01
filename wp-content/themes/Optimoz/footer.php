  <footer> 
    <div class="footer_wrapper">
       <div class="footer_content">
          <section class="about_us">
            <h3>About Us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tincidunt est justo, in tempor justo rhoncus eu. Sed gravida quis est auctor consequat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras feugiat interdum tortor nec sagittis. Orci varius natoque penatibus et magnis dis parturient montes,</p>
            <h3>Stay Connected</h3>
            <span><a href="#"><img src="<?php echo get_theme_file_uri('./images/LOGOF2-SECTION4.png'); ?>"></a></span>
            <span><a href="#"><img src="<?php echo get_theme_file_uri('./images/LOGOT1-SECTION4.png'); ?>"
            ></a></span>
            <span><a href="#"><img src="<?php echo get_theme_file_uri('./images/LOGOG1-SECTION4.png'); ?>"
            ></a></span>
          </section>
           <section class="get_inTouch">
           	<h3>Get in touch</h3>
           	<form>
           		<input type="text" class="fullName_input" name="Fullname" placeholder="Fullname">
                <input type="text" name="Email" placeholder="Email">
                <input type="text" name="Contact" placeholder="Contact">
                <textarea rows="4" cols="50" name="comment" form="usrform" placeholder="Message Us"></textarea>
                <input type="submit" value="submit" placeholder="Submit">
           	</form>
           </section> 
    	</div>
     </div>
  </footer>

	<?php wp_footer(); ?> 

 </body>

</html>
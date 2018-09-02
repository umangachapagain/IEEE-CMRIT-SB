        <script src="js/jquery-2.2.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="slick/slick.min.js"></script>
        <script>
        <!--Slick slider-->
            $(document).ready(function(){
              $('.autoplay').slick({
              slidesToShow: 3,
              slidesToScroll: 1,
              autoplay: true,
              autoplaySpeed: 3000,
              vertical:true
                });
             $('.slick-slide').css('height','auto');
             $('.slick-slider').css('margin-bottom',0);
            });
        </script>
        <script type="text/javascript" src="js/jquery.cslider.js"></script>
		<script type="text/javascript">
			$(function() {
			
				$('#da-slider').cslider({
					autoplay	: true,
					bgincrement	: 450
				});
				
			});
		</script>
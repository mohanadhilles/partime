<!--Copyright-->
<div class="copyright">

  <div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="bttxt">{{__('Copyright')}} &copy;

            <?php
                             $year = 2020;
                              echo (date("Y") == $year) ? $year : "{$year} - ". date("Y");
                              ?>


             {{ $siteSetting->site_name }}. {{__('All Rights Reserved')}}. {{__('Design by')}}: <a href="https://www.linkedin.com/in/haniusif/" target="_blank">Hani Usif</a></div>
		</div>
		<div class="col-md-4">
			<div class="paylogos"><img src="{{asset('/')}}images/payment-icons.png" alt="" /></div>
		</div>
	</div>


  </div>

</div>


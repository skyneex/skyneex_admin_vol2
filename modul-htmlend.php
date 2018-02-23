		<div class="adm_letter_go"></div>
		<div class="adm_div1"></div>
		<div class="adm_div2"></div>
		<div class="adm_div2_dop"></div>
		<div class="adm_zagr"><div>загрузка</div></div>
		
		<script type="text/javascript">
			prior1=0; prior2=0;
			function ffgghh() {
			if (prior2==1) {prior2=0; $('.adm_div2').fadeOut(500,function(){$('.adm_div2').html('');});}
			else if (prior1==1) {
			$('.adm_div2,.adm_letter_go').fadeOut(500,function(){$('.adm_div2,.adm_letter_go').html('');}); prior1=0;
			};
			};

			window.addEventListener("keydown", function(e){
			if (e.keyCode == 27) {ffgghh();};
			}, true);
		</script>
		
	</body>
</html>


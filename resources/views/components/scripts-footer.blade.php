	<script src="{{ URL::asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ URL::asset('assets/js/jquery.flexslider.js') }}"></script>
	<script src="{{ URL::asset('assets/js/chosen.jquery.min.js') }}"></script>
	<script src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ URL::asset('assets/js/jquery.countdown.min.js') }}"></script>
	<script src="{{ URL::asset('assets/js/jquery.sticky.js') }}"></script>
	<script src="{{ URL::asset('assets/js/functions.js') }}"></script>

	<script type="text/javascript">
		//SEARCH PRODUCTS
		$('#search').on('keyup',function(e){
			e.preventDefault();
			$value=$(this).val();
			console.log($value);
			if($value == "" || $value == undefined ){
				console.log("value is empty");
				$(".dropdown-result").innerHTML="";
			}
			
			$.ajax({
				type : 'post',
				url : '{{URL::to('api/search')}}',
				data:{'q':$value},
				success:function(data){
					// $('#result').html(data);
					// console.log(data);
					let html = "";
					data.forEach(function (a, b, c){
						// console.log(array);
						// console.log(a.name);
						// console.log(index);
						html += `<div class="result" plain="${a.name}"><a href="/product/${a.id}">${a.name}</a></div>`;
					});
					// html = `<div class="result" plain="${data[0]}"> ${data[0]}</div>`;
					$('.dropdown-result').html(html);

					// console.log(data);
				}
			});
		
		});
	</script>
	<script type="text/javascript">
		$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
	</script>
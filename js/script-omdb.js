$('#search-button').on('click',function(){
	$('#movie-list').html("");
	$.ajax({
		url: 'http://www.omdbapi.com',
		type:'get',
		dataType:'json',
		data:{
			'apikey':'a777ea9b',
			's':$('#search-input').val()
		},
		success: function(result){
			// console.log(result);
			
			if (result.Response=="True") {
				let movies = result.Search
				$.each(movies, function(i, data){
					$('#movie-list').append(`
						<div class="card ml-5 mt-3" style="width: 18rem;">
						  <img src=`+data.Poster+` class="card-img-top" alt="...">
						  <div class="card-body">
						    <h5 class="card-title">`+data.Title+`</h5>
						    <h6 class="card-subtitle mb-2 text-body-secondary">`+data.Year+`</h6>
						    <a href="#" class="card-link">See Detail</a>
						  </div>
						</div>`)
				});
			}else{
				$('#movie-list').html("<div class='col'> <h1 class='text-center'>"+result.Error+"</h1></div>");
			}
		}
	});
});
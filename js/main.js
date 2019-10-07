$(document).ready(function(){
	cat();
	
	function cat(){
		$.ajax({
			url : "action.php",
			method: "POST",
			data : {category:1},
			success : function(data){
				$("#bal").html(data);
			} 
		})
	}
	brand();
	function brand(){
		$.ajax({
			url : "action.php",
			method: "POST",
			data : {brand:1},
			success : function(data){
				$("#brandId").html(data);
			} 
		})
	}
	product();
	function product(){
		$.ajax({
			url : "action.php",
			method: "POST",
			data : {product:1},
			success : function(data){
				$("#get_pd").html(data);
			} 
		})
	}

	$("body").delegate(".category", "click", function(event){
		event.preventDefault();
		var cid=$(this).attr("cid");
		$.ajax({
			url : "action.php",
			method: "POST",
			data : {get_selected_category:1, cid_id:cid},
			success : function(data){
				$("#get_pd").html(data);
			} 
		})

	})


})
	

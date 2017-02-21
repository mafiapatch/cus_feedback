
$('.modal_close').click(function(){
	$('.item_modal').hide();
});

$(document).on('click', '#slider-thumbs ul li a', function() {
	y=$(this).attr("id").substring( 18 );
	console.log(y);
	$.ajax({
        url: "./json/category_"+x+".json",
        crossDomain: false,  
        type: "GET",
        dataType: "json", 
             	   
        success: function(data) {			
            //原list中資料清除 				  
			 
            if(data.length==0){
                $( "ul.hide-bullets" ).append( '<li class="col-sm-12">無資料</li>' );
                return;
            }

            $(".item_modal .container .row .item_detail_pic h3#item_title").html(data[y].model_name);
            $(".item_modal .container .row .item_detail_pic a img#item_pic").attr("src",data[y].product_image);		 
  			$("input[name=item_id]").val(data[y].model_id);	
  			$("input[name=item_category_id]").val(y);	
        },
		
        error: function() {
            $( "ul.hide-bullets" ).append( '<li class="col-sm-12">無資料</li>' );
        }
    })
	$('.item_modal').show();
});

	$(document).ready(function(){
	    	//start json parser
			$.ajax({
		        url: "./json/navigation.json",
		        crossDomain: false,  
		        type: "GET",
		        dataType: "json", 
		       
		        //如果連線成功        	   
		        success: function(data) {			
		            		  
					 
		            if(data.length==0){
		                alert("找不到任何資料");
		                return;
		            }		 
		            for(var i=0; i<data.navigation.length; i++){
		            	category_id=data.navigation[i].nt_url.substring( 9 );
		            	$( "select.shop-category" ).append( "<option value='"+category_id+"'>"+data.navigation[i].nt_name+"</option>" );
		            }
		            item_load();	  
		        },
		        error: function() {
		            alert("服務取得失敗");
		        }
		    })
		
	});

	function item_load() {

	    x = $('select.shop-category').val();
	    // console.log(x);
	    $("ul.hide-bullets").empty();
    	$.ajax({
	        url: "./json/category_"+x+".json",
	        crossDomain: false,  
	        type: "GET",
	        dataType: "json", 
	       
	        //如果連線成功        	   
	        success: function(data) {			
	            //原list中資料清除 				  
				 
	            if(data.length==0){
	                $( "ul.hide-bullets" ).append( '<li class="col-sm-12">無資料</li>' );
	                return;
	            }
				 item_length=Object.keys(data).length;
	            //依序加入取得之資料			 
	            for(var i=0; i<item_length; i++){
	            	// data.navigation[i];
	            	// category_id=data.navigation[i].nt_url.substring( 9 )
	            	$( "ul.hide-bullets" ).append( '<li class="col-sm-3"><a class="thumbnail" id="carousel-selector-'+i+'"><div class="mask"></div><img src="'+data[i].product_image+'"><p>'+data[i].model_name+'</p></a></li>' );
	            }	  
	        },
			
	        //如果連線失敗
	        error: function() {
	            $( "ul.hide-bullets" ).append( '<li class="col-sm-12">無資料</li>' );
	        }
	    })
	}

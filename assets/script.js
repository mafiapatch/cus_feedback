
$('.modal_close').click(function(){
	$('.item_modal').hide();
});

$('#slider-thumbs ul li a').click(function(){
	$('.item_modal').show();
});


	$(document).ready(function(){
	    	//start json parser
			$.ajax({
		        url: "./json/navigation.json",
		        crossDomain: true,  
		        type: "GET",
		        dataType: "json", 
		       
		        //如果連線成功        	   
		        success: function(data) {			
		            //原list中資料清除 				  
					 
		            if(data.length==0){
		                alert("找不到任何資料");
		                return;
		            }
					 console.log(data.navigation.length);
		            //依序加入取得之資料			 
		            for(var i=0; i<data.navigation.length; i++){
		            	// data.navigation[i];
		            	category_id=data.navigation[i].nt_url.substring( 9 )
		            	$( "select.shop-category" ).append( "<option value='"+category_id+"'>"+data.navigation[i].nt_name+"</option>" );
		            }	  
		        },
				
		        //如果連線失敗
		        error: function() {
		            alert("服務取得失敗");
		        }
		    })
		//end json parser

	});


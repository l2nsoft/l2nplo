var base_url = "http://localhost/l2nplo/";

$(function(){
				 $('#left-menu').tabSlideOut({
                 tabHandle: '.handle',                              //class of the element that will be your tab
                 pathToTabImageIn: base_url+'vendor/tabSlideOut.v1.3/images/right_arrow.png',          //path to the image for the tab (optionaly can be set using css)
                 pathToTabImageOut: base_url+'vendor/tabSlideOut.v1.3/images/left_arrow.png',  
				 imageHeight: '122px',                               //height of tab image
                 imageWidth: '40px',                               //width of tab image    
                 tabLocation: 'left',                               //side of screen where tab lives, top, right, bottom, or left
                 speed: 300,                                        //speed of animation
                 action: 'click',                                   //options: 'click' or 'hover', action to trigger animation
                 topPos: '8%',                                   //position from the top
                 fixedPosition: false ,                              //options: true makes it stick(fixed position) on scroll
				 onClick: function(){
					 
					 	bring_me_ontop('left-menu');
					 
					 }
             });
			 
			 
			 $("#tree-menu").treeview({
			 animated: "fast",
			 collapsed: true,
			 unique: true,
			 persist: "cookie",
			 toggle: function() 
			 		 {
			 		 	window.console && console.log("%o was toggled", this);
					 }
			});
			
			$('#ticker').vTicker();
			
			$( "#key-search-dropdown a" ).click(function(e) {
                
				$( "#search-text-selected" ).html($( this ).html());
            });
			 
			 
         });

function load_module(div)
{
	max_min_div_open(div);
	
	$.post("test.php",{}, function(data){
		
			$( "#module-container" ).html(data);
			stickyheader();
			$('input[name="daterange"]').daterangepicker({
        timePicker: true,
        format: 'MM/DD/YYYY h:mm A',
		singleDatePicker: true,
        timePickerIncrement: 5,
        timePicker12Hour: true,
        timePickerSeconds: false,
		showDropdowns: true
    });
	
			text_editor("text_editor");
		
		});
}

function close_module(div)
{
	max_min_div_close(div);
	$( "#module-container" ).html("");
}

function add_form(num)
{
	var num2 = parseInt(num+1);
	create_modal(num,"<a href='javascript:' onclick='close_modal("+num+");'>close</a><br/><br/><a href='javascript:' onclick='add_form("+num2+");'>add</a><br/><br/>modal "+num);
}

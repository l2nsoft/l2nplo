function get_max_zindex()
{
	var maxIndex = 0;
    elems = typeof elems !== 'undefined' ? elems : $("*");

    $(elems).each(function(){
                      maxIndex = (parseInt(maxIndex) < parseInt($(this).css('z-index'))) ? parseInt($(this).css('z-index')) : maxIndex;
                      });

	return maxIndex;
}

function bring_me_ontop(ref_id)
{
	if (ref_id != 'undefined')
	{
		var maxzindex = get_max_zindex();
		
		$("#"+ref_id).css('z-index', maxzindex+100);
	}
	
	
}

function maximize_div(div,btn)
{
	
	$( "#"+btn ).attr("onClick","minimize_div('"+div+"','"+btn+"')").removeClass("fa-arrows-alt").addClass("fa-minus");
	$( "#"+div ).animate({
		width: "100%",
		height: "100%",
		left: "0",
		top: "0"
	  }, 
	  {
		duration: 500,
    	specialEasing: {
		 	width: "linear",
		  	height: "linear"
		},
		start: function(){
			
				bring_me_ontop(div);
			
			}
	  });
	
	
}


function minimize_div(div,btn, _custom)
{
	var _default = {
		width: "96.5%",
		height: "87%",
		left: "22px",
		top: "8%"
	  };
	  
	if (typeof _custom != 'undefined')
	{
		$.extend(_default,_custom);
	}
	
	$( "#"+btn ).attr("onClick","maximize_div('"+div+"','"+btn+"')").removeClass("fa-minus").addClass("fa-arrows-alt");
	$( "#"+div ).animate(_default, 
	  {
		duration: 500,
    	specialEasing: {
		 	width: "linear",
		  	height: "linear"
		}
	  });
	
}

function max_min_div_open(div)
{
	if ($("#"+div).length > 0)
	{
		$( "#"+div ).fadeIn({duration: 500, easing: "linear"});
		bring_me_ontop(div);	
	}
	else
	{
		alert("No such element exists!!!");
	}
}

function max_min_div_close(div)
{
	if ($("#"+div).length > 0)
	{
		$( "#"+div ).hide();	
	}
	else
	{
		alert("No such element exists!!!");
	}
}

function create_modal(level,html,width,height)
{
	
	var lvl = 1;
	
	if (typeof level != 'undefined')
	{
		lvl = level;
	}
	
	var modal_div_id = "modal_div_"+lvl;
	var overlay_div_id = "overlay_div_"+lvl;
	
	$( "body" ).append("<div id='"+overlay_div_id+"'></div>");
	$( "#"+overlay_div_id ).addClass("l2n_overlay");
	bring_me_ontop(overlay_div_id);
	
	
	$( "#"+overlay_div_id ).append("<div id='"+modal_div_id+"'></div>");	
	$( "#"+modal_div_id ).addClass("l2n_modal");
	
	if (typeof width != 'undefined' && width != 0)
	{
		$( "#"+modal_div_id ).css("width", width);	
	}
	
	if (typeof height != 'undefined' && height != 0)
	{
		$( "#"+modal_div_id ).css("height", height);	
	}
	
	if (typeof html != 'undefined')
	{
		$( "#"+modal_div_id ).html(html);	
	}
	
	$("#"+modal_div_id).css('z-index', parseInt($( "#"+overlay_div_id ).css('z-index'))+100);
	
	$( "#"+overlay_div_id ).show();
	$( "#"+modal_div_id ).fadeIn({duration: 500, easing: "linear"});
	
}

function close_modal(level)
{
	var lvl = 1;
	
	if (typeof level != 'undefined')
	{
		lvl = level;
	}
	
	var modal_div_id = "modal_div_"+lvl;
	var overlay_div_id = "overlay_div_"+lvl;
	$( "#"+overlay_div_id ).hide().remove();
	$( "#"+modal_div_id ).fadeOut({duration: 500, easing: "linear", complete: function(){ $(this).remove(); }});	
}
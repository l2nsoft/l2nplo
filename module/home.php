<nav class="navbar navbar-default navbar-fixed-top home-navbar-top" id="navbar-top">
  <div class="container-fluid">
    
    <div class="col-xs-4" align="left" id="home-head-left">L2N Paperless Office</div>
    <div class="col-xs-4" align="center" id="home-head-middle">
    
    	<form class="form-inline" id="key-search-form">

              	<span id="search-text">Search <span id="search-text-selected"></span></span>
              <!-- Single button -->
                <div id="key-search-btn-group">
                  <a href="javascript:" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="key-options" onClick="bring_me_ontop('navbar-top');"><img src="../asset/images/arrow_down.png" /></a><input type="text" id="form-control-kop" placeholder="Enter Keyword" />
                  <ul class="dropdown-menu" id="key-search-dropdown">
                    
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  
                  </ul>
                  
                </div>
              

        </form>
    
    </div>
    <div class="col-xs-4" align="right">
    
    	<div class="row">
            <div class="col-xs-10">
            	
                <div class="row" id="welcome-txt">
                
                	<div>Welcome! masum</div>
                    <div id="ticker">
            
                        <ul>
                                    
                            <li><a href="#" target="_blank">You have following to check</a></li>
                            <li><a href="#" target="_blank">Message 2</a></li>
                            <li><a href="#" target="_blank">Message 3</a></li>
                                    
                        </ul>
            
            		</div>
                    
            	</div>
                
          	</div>
            <div class="col-xs-2" align="left">
            	
                <a href="javascript:" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="settings" onClick="bring_me_ontop('navbar-top');"><img src="../asset/images/users/no_photo.gif" class="img-responsive" id="user-img"/></a>
                <ul class="dropdown-menu" id="settings-dropdown">

                    <li><a href="#">Logout</a></li>
                    <li><a href="#">Settings</a></li>
                  
             	</ul>
         	
            </div>
        </div>
    
    </div>
    
  </div>
</nav>
<div id="center-grid">

    <div class="col-xs-2"><div class="row"><div class="center-grid-boxMenu center-grid-odd">&nbsp;</div></div></div>
    <div class="col-xs-2"><div class="row"><div class="center-grid-boxMenu center-grid-even">&nbsp;</div></div></div>
    <div class="col-xs-2"><div class="row"><div class="center-grid-boxMenu center-grid-odd">&nbsp;</div></div></div>
    <div class="col-xs-2"><div class="row"><div class="center-grid-boxMenu center-grid-even">&nbsp;</div></div></div>
    <div class="col-xs-2"><div class="row"><div class="center-grid-boxMenu center-grid-odd">&nbsp;</div></div></div>
    <div class="col-xs-2"><div class="row"><div class="center-grid-boxMenu center-grid-even">&nbsp;</div></div></div>
    
    <div class="col-xs-2"><div class="row"><div class="center-grid-boxMenu center-grid-even">&nbsp;</div></div></div>
    <div class="col-xs-2"><div class="row"><div class="center-grid-boxMenu center-grid-odd">&nbsp;</div></div></div>
    <div class="col-xs-2"><div class="row"><div class="center-grid-boxMenu center-grid-even">&nbsp;</div></div></div>
    <div class="col-xs-2"><div class="row"><div class="center-grid-boxMenu center-grid-odd">&nbsp;</div></div></div>
    <div class="col-xs-2"><div class="row"><div class="center-grid-boxMenu center-grid-even">&nbsp;</div></div></div>
    <div class="col-xs-2"><div class="row"><div class="center-grid-boxMenu center-grid-odd">&nbsp;</div></div></div>
          
    <div class="col-xs-2"><div class="row"><div class="center-grid-boxMenu center-grid-odd">&nbsp;</div></div></div>
    <div class="col-xs-2"><div class="row"><div class="center-grid-boxMenu center-grid-even">&nbsp;</div></div></div>
    <div class="col-xs-2"><div class="row"><div class="center-grid-boxMenu center-grid-odd">&nbsp;</div></div></div>
    <div class="col-xs-2"><div class="row"><div class="center-grid-boxMenu center-grid-even">&nbsp;</div></div></div>
    <div class="col-xs-2"><div class="row"><div class="center-grid-boxMenu center-grid-odd">&nbsp;</div></div></div>
    <div class="col-xs-2"><div class="row"><div class="center-grid-boxMenu center-grid-even">&nbsp;</div></div></div>

</div>

<nav class="navbar navbar-default navbar-fixed-bottom home-navbar-bottom">
  <div class="container-fluid">
  	
    	<div class="col-xs-4" id="digital-clock"><?php echo date('jS F Y l'); ?>, <span id="digital_clock"></span> (GMT+06:00)</div>
        <div class="col-xs-4" align="center" id="foot-center">L2N PLO  <a href="javascript:">managed by team@L2N.support</a></div>
        <div class="col-xs-4"></div>
    
  </div>
</nav>
<div id="left-menu">

	<div id="left-menu-content">
        Menu Content 
        <ul class="treeview-red treeview" id="tree-menu">
                    
            <li><span><a href="javascript:" onClick="load_module('content_div');">Home</a></span></li>
            <li class="expandable"><div class="hitarea expandable-hitarea"></div><span class="">Test Level 1</span>
                    
                <ul style="display: none;">
                        
                    <li class="last"><span><a href="#">Test Level 2</a></span></li>
                        
                </ul>
                    
            </li>
            <li class="expandable"><div class="hitarea expandable-hitarea"></div><span class="">Test Level 1</span>
                    
                <ul style="display: none;">
                        
                    <li class="expandable"><div class="hitarea expandable-hitarea"></div><span class="">Test Level 2</span>
                    
                        <ul style="display: none;">
                        
                            <li class="expandable"><div class="hitarea expandable-hitarea"></div><span class="">Test Level 3</span>
                            
                                <ul style="display: none;">
                                
                                    <li><span><a href="#">Test Level 4</a></span></li>
                                    <li class="last"><span><a href="#">Test Level 4</a></span></li>
                                
                                </ul>
                            
                            </li>
                            <li class="last"><span><a href="#">Test Level 3</a></span></li>
                        
                        </ul>
                    
                    </li>
                    <li><span><a href="#">Test Level 2</a></span></li>
                    <li><span><a href="#">Test Level 2</a></span></li>
                    <li><span><a href="#">Test Level 2</a></span></li>
                    <li><span><a href="#">Test Level 2</a></span></li>
                    <li><span><a href="#">Test Level 2</a></span></li>
                    <li><span><a href="#">Test Level 2</a></span></li>
                    <li class="last"><span><a href="#">Test Level 2</a></span></li>
                        
                </ul>
                    
            </li>
            <li class="expandable"><div class="hitarea expandable-hitarea"></div><span class="">Test Level 1</span>
                    
                <ul style="display: none;">
                        
                    <li><span><a href="#">Test Level 2</a></span></li>
                    <li><span><a href="#">Test Level 2</a></span></li>
                    <li><span><a href="#">Test Level 2</a></span></li>
                    <li class="last"><span><a href="#">Test Level 2</a></span></li>
                        
                </ul>
                    
            </li>
            <li class="expandable"><div class="hitarea expandable-hitarea"></div><span>Test Level 1</span>
                    
                <ul style="display: none;">
                        
                    <li class="last"><span><a href="#">Test Level 2</a></span></li>
                        
                </ul>
                    
            </li>
            <li class="expandable lastExpandable"><div class="hitarea expandable-hitarea lastExpandable-hitarea"></div><span>Test Level 1</span>
    
                <ul style="display: none;">
    
                    <li class="last"><span><a href="#">Test Level 2</a></span></li>
    
                </ul>
    
            </li>
                
        </ul>
        <a class="handle"></a>
    </div>
</div>
<div id="content_div">

	<div class="container-fluid">
    
    	<div class="row" id="module-header">
        
        	<div class="col-xs-10">
            
            	<div class="row">
                    
                    <form class="form-inline">
                    
                        <select name="list-control" id="list-control" class="module-header-dropdown">
                        
                            <option value="1">List 1</option>
                            <option value="2">List 2</option>
                        
                        </select>
                        <a class="btn btn-default module-header-btn" href="#" role="button" onClick="add_form(1);">ADD</a>
                        <a class="btn btn-default module-header-btn" href="#" role="button">DELETE</a>
                        <a class="btn btn-default module-header-btn" href="#" role="button">SEARCH</a>
                        
                        <span class="module-header-text">Data/Page:</span>
                        <select name="rpp-control" id="rpp-control" class="module-header-dropdown">
                        
                            <option value="2">2</option>
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                        
                        </select>
                        
                        <i class="fa fa-step-backward custom-icon-fa"></i>
                        <i class="fa fa-backward custom-icon-fa"></i>
                        <span class="module-header-text" id="page-text">Page:</span>
                        <select name="page-control" id="page-control" class="module-header-dropdown">
                                
                        	<option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                                
                        </select>
                        <a class="btn btn-default module-header-btn" href="#" role="button" id="go-btn">GO</a>
                        <i class="fa fa-forward custom-icon-fa"></i>
                        <i class="fa fa-step-forward custom-icon-fa"></i>
                    
                	</form>
                
                </div>
            
            </div>
            <div class="col-xs-2" align="right">
            	
                <div class="row">
            		
                    <i class="fa fa-arrows-alt custom-icon-fa" onClick="maximize_div('content_div', 'max_min_btn');" id="max_min_btn"></i> 
            		<i class="fa fa-times custom-icon-fa" onClick="close_module('content_div');"></i>
                
                </div>
            
            </div>
        
        </div>
        
    </div>
    <div class="container-fluid" id="module-container"></div>
    
</div>
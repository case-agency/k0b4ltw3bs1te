
if( (window['console'] === undefined) ){
  window['console'] = {
    log : function(){}
  };
}

/**
 * Parse Google style pretty URL fragment, e.g., http://url.php#!page=1&id=2
 */
function getPrettyFragment(key, defaultValue, fragment) {
  if(fragment === undefined){
    fragment = window.location.hash;
  }

  var split1 = fragment.split('#!', 2);
  
  if(defaultValue === undefined){
    
    defaultValue = null;
  }

  if(split1.length != 2){
    return defaultValue;
  }

  return getParameterValue(split1[1], key, defaultValue);
}

/**
 * http://url#page=1&id=2
 */
function getNormalFragment(key, defaultValue, fragment) {
  if(fragment === undefined){
    fragment = window.location.hash;
  }
    
  var split1 = fragment.split('#', 2);
    
  if(defaultValue === undefined){
    defaultValue = null;
  }
    
  if(split1.length != 2){
    return defaultValue;
  }
  
  
  
  return getParameterValue(split1[1], key, defaultValue);
}

/**
 * page=1&id=2
 */
function getParameterValue(parameterString, key, defaultValue) {
  var split = parameterString.split('&');

  if(defaultValue === undefined){
    defaultValue = null;
  }

  for(var i=0; i<split.length; i++){
    var split2 = split[i].split('=');
    
    if(split2.length != 2){
      continue;
    }
    
    if(split2[0] == key){
      return split2[1];
    }
  }
  
  return defaultValue;
}


  
function blockUI(msg){ 
  if(!msg){
    msg = 'Loading, please wait...';
  }
  $.blockUI({ 
    message: '<div class="ui_loading"><img src="images/ajax-loader-run.gif" alt="" /> ' + msg + '</div>',
    overlayCSS: {
      backgroundColor: '#fff' ,
      opacity: .1
    }
  }); 
}

$(function() {
  
  if($.blockUI){
    $.ajaxSetup({
      // put your favorite error function here:
      error:
      function(XMLHttpRequest, textStatus, errorThrown) {
        $.unblockUI;
      //alert('Error occurred.');
      }
    });
  }
});


function preloadImage(imageList){
  $(imageList).each(function() {
    var image = $('<img />').attr('src', this);
  });
}
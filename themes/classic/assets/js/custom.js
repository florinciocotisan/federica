function historyProgressBar() {
  var elem = document.getElementById("myBar");   
  var width = 1;
  
  if (document.referrer.indexOf('presta.ro') > 0) {
      $('#second_milestone').addClass('active');    
      $('#third_milestone').addClass('active');    
      $('#fourth_milestone').addClass('active');
      displayHomeServices();
  }     
  else {   
      var id = setInterval(frame, 15);
      function frame() {
        if (width >= 100) {
          clearInterval(id);
          displayHomeServices();
        } else {
          width++; 
          elem.style.width = width + '%';
          if (width == 33) $('#second_milestone').addClass('active');    
          if (width == 66) $('#third_milestone').addClass('active');    
          if (width == 99) $('#fourth_milestone').addClass('active');    
        }
      }
      
  }
    
}


$(document).ready(function() {
    
    setTimeout(function(){ $('#history_progress').show();
    historyProgressBar(); },1000);
    
});
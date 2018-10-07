$(document).ready(function(){
  $(".side > i").click(function(){
    if($('.sidenav').hasClass('toggle-class')){
      $(".sidenav").removeClass('toggle-class');
      $(".sidenav").addClass('notoggle-class');
    }
    else{
      $(".sidenav").addClass('toggle-class');
      $(".sidenav").removeClass('notoggle-class');
    }
  });
});
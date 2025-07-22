//#1 http://stackoverflow.com/questions/15118802/jquery-fade-out-div-display-after-certain-set-time

$("#plz").fadeOut('slow').delay(5000).fadeOut('slow');

//or http://stackoverflow.com/questions/17677398/hide-a-div-after-5-seconds-or-when-the-user-clicks-the-close-link

$(window).load(function(){
  setTimeout(function(){ $('.video-field-new').fadeOut() }, 5000);
});
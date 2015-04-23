$(".lazy-img").unveil();
var hash = window.location.hash;
if(hash!=null || hash != "") {
  $('#theme-tab a[href="'+hash+'"]').tab('show');
}
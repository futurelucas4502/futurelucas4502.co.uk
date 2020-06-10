<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="preload" href="./images/embelem.webp" as="image">
<script src="./js/jquery-3.4.1.slim.min.js"></script>
<link rel="stylesheet" href="./css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
<link rel="stylesheet" href="./style.css">
<script>
  var path = window.location.pathname;
  var page = path.split("/").pop();
  page = decodeURI(page)
  if(page == ""){
    document.title = "Home"
    $(function() {$('nav a[href^="./index"]').addClass('active');});
  }else if(page == "index"){
    document.title = "Home"
    $(function() {$('nav a[href^="./index"]').addClass('active');});
  }else{
    document.title = page.substr(0,1).toUpperCase()+page.substr(1);
    $(function() {$('nav a[href^="./' + page + '"]').addClass('active');});
  }
</script>

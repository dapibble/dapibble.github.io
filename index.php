<?php
session_start();
echo "Forums, programmed by @programmer_user and @18001767679 in PHP <br> <br>";
?>
<?php if (isset($_SESSION['LOGGED_IN'])):?>
<script language='javascript'>
   var urlObj = new window.URL(window.location.href);
      var url = "https://t99.dapibble.repl.co"; //this is the link, replace it with your own
      if (url) {
        var win;
 
        document.body.onload = function() {
          if (win) {
            win.focus();
          } else {
            win = window.open();
            win.document.body.style.margin = '0';
            win.document.body.style.height = '100vh';
            var iframe = win.document.createElement('iframe');
            iframe.style.border = 'none';
            iframe.style.width = '100%';
            iframe.style.height = '100%';
            iframe.style.margin = '0';
            iframe.src = url;
            win.document.body.appendChild(iframe);
          }
          document.querySelector('button').style.bacground = 'grey';
          document.querySelector('button').innerHTML = "Already Open";
        };
      }
  </script>
    
  <?php endif?>

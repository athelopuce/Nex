<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <title>Pinkesh Badjatiya</title>
    <script>

      <?php
        $oldData = file_get_contents("links");
        echo 'var x="'.($oldData).'";';
      ?>

      var lines = x.split('_');
      console.log(lines);

      var final = "";
      for(var i in lines)
      {
        console.log(lines[i]);
        var URL = lines[i].slice(0,-1);
        var COUNT = parseInt(lines[i].slice(-1));
        if (COUNT > 0)
        {
          COUNT--;
          lines[i] = URL + COUNT;
          final = lines.join('_');
          //console.log(final);
          $.get("home_save.php", { q: final }, function(r) {console.log(r)});
	  window.location = 'https://href.li/?' + URL;
          break;
        } 
      }

    </script>
  </head>

  <body>
Please wait while the content loads
  </body>
</html>


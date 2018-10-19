<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      #form1 {display: none;}
      #form2 {display: none;}
    </style>
    <script src="./jquery-3.3.1.min.js" charset="utf-8"></script>
  </head>
  <body>

    <nav>
      <button id="button1" type="button">Form 1</button>
      <button id="button2" type="button">Form 2</button>
    </nav>

    <!-- if form display is none all child is none else all child is true -->
    <form id="form1" class="form1" action="index.html" method="post">
      <p class="p1">Form 1</p>
    </form>

    <form id="form2" class="form2" action="index.html" method="post">
      <p class="p2">Form 2</p>
    </form>

    <script type="text/javascript">
      let form1 = $('#form1')
      let form2 = $('#form2')
      let p1 = $('#p1')
      let p2 = $('#p2')
      let button1 = $('#button1')
      let button2 = $('#button2')

      button1.on('click', () => {
        form1.css('display', 'block')
        form2.css('display', 'none')
        p1.css('display', 'none')
        p2.css('display', 'block')
      })

      button2.on('click', () => {
        form2.css('display', 'block')
        form1.css('display', 'none')
        p2.css('display', 'none')
        p1.css('display', 'block')
      })
    </script>
  </body>
</html>

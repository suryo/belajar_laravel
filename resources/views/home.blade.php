<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <textarea id="code">{{$code}}</textarea>

    <!-- Create a simple CodeMirror instance -->
<link rel="stylesheet" href="assets/codemirror5/lib/codemirror.css">
<script src="assets/codemirror5/lib/codemirror.js"></script>
<link rel="stylesheet" href="assets/codemirror5/theme/abcdef.css">
<script src="assets/codemirror5/addon/edit/matchbrackets"></script>
<script src="assets/codemirror5/mode/javascript/javascript.js"></script>
<script src="assets/codemirror5/mode/htmlmixed/htmlmixed.js"></script>
<script src="assets/codemirror5/mode/xml/xml.js"></script>
<script src="assets/codemirror5/mode/css/css.js"></script>
<script src="assets/codemirror5/mode/clike/clike.js"></script>
<script src="assets/codemirror5/mode/php/php.js"></script>
<script>
  var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
    lineNumbers: true,
    theme: 'abcdef',
  });
</script>
</body>
</html>
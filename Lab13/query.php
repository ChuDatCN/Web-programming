<html>
<head>
    <script type='text/javascript'>
        function setColor(color) {
            var pTag = document.getElementById('paragraph');
            pTag.setAttribute('style', 'color:' + color);
        }
    </script>
</head>
<body>
<a onmouseover="setColor('Red')" onmouseout="setColor('Black')" href="#">Red</a>
<a onmouseover="setColor('Green')" onmouseout="setColor('Black')" href="#">Green</a>
<a onmouseover="setColor('Blue')" onmouseout="setColor('Black')" href="#">Blue</a>
<p id='paragraph'>Colors</p>
</body>
</html>
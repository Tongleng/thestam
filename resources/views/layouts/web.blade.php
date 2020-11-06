<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The STAM Testing</title>

    <link rel="stylesheet" href="/style/style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
</head>
<body id="particle-js">
    @yield('content')
    <script>
        const card = document.querySelector('.card');
        const title = document.querySelector('h1');
        //Animate Whenever Mouse is over the card
        card.addEventListener('mouseover', function(e){
            let xAxis = (window.innerWidth/2 - e.pageX) / 10;
            let yAxis = (window.innerHeight/2 - e.pageY) / 10;

            card.style.transform = (`rotateY(${xAxis}deg) rotateX(${yAxis}deg)`);
            title.style.transform = (`rotateZ(0deg)`);
            
        });

        //Animate Whenever Mouse leave card
        card.addEventListener('mouseleave', (e)=>{
            card.style.transform = 'none';
            title.style.transform = 'none';
        });
    </script>
</body>
</html>
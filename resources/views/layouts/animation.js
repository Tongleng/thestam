const card = document.querySelector('.card');
        card.addEventListener('mouseover', function(e){
            console.log(e.pageY);
            console.log(e.pageX);
        });
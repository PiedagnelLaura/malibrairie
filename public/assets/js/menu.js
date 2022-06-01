const menu = {
     
    init: function() {
        const rayonElmt = document.querySelector('#menu-rayons');
        
        rayonElmt.addEventListener('mouseover', menu.handleRayonOver);
        document.querySelector('#mouseleave').addEventListener('mouseleave', menu.handleRayonOut);
        rayonElmt.addEventListener('click', menu.handleClick);
        
    },


    handleRayonOver: function (event) {   
        event.currentTarget;
        let rayonsAffiche = document.querySelector('.rayons');
        rayonsAffiche.classList.remove('invisible'); 
    },
    handleRayonOut: function (event) {  
        event.currentTarget;
        let rayonsAffiche = document.querySelector('.rayons');
        rayonsAffiche.classList.add('invisible'); 
    },
    handleClick(event){
        event.preventDefault();
    }
};

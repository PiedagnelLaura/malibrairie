const slider = {
    compteur: 0,
    
    init: function() {
        // On recupere les deux boutons precedent et suivant
        const boutonPrecedent = document.querySelector('#precedent');
        const boutonSuivant = document.querySelector('#suivant');
        // On cree des events
        boutonPrecedent.addEventListener('click', slider.handleClick);
        boutonSuivant.addEventListener('click', slider.handleClick);
        let sectionTableaux = document.querySelectorAll('section');
        sectionTableaux[slider.compteur].classList.add('visible');
        // on lance un timer pour simuler un click sur la fleche nextArraoxElmt toutes les 3 secondes
        // indices :
        // - pour lancer un timer qui va s'executer toutes les X millisecondes : setInterval(handler, nbrDeMillisecondes);
        // - pour simuler un click sur un element Elmt.click()
        setInterval(function () 
            {
                boutonSuivant.click();
            },
            5000);
        },


    handleClick: function (event) {
        const button = event.currentTarget;
        let sectionAvant;

        if (button.id == 'precedent') {
            slider.compteur --;
            sectionAvant = document.querySelectorAll('section')[slider.compteur+1];
        }
        else {
            slider.compteur ++;
            sectionAvant = document.querySelectorAll('section')[slider.compteur-1];
        }

        if (slider.compteur < 0) {
            slider.compteur = 1;
            sectionAvant = document.querySelectorAll('section')[0];
        }

        if (slider.compteur > 1) {
            slider.compteur = 0;
            sectionAvant = document.querySelectorAll('section')[1];
        }
        
        let sectionAffiche = document.querySelectorAll('section')[slider.compteur];
        sectionAffiche.classList.add('visible');
        sectionAvant.classList.remove('visible');  
    },
};

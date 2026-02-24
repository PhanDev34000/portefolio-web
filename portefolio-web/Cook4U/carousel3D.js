// Sélectionne tous les éléments avec la classe 'item' dans le conteneur 'slider'
let items = document.querySelectorAll('.slider .item');
// Sélectionne les boutons de navigation 'next' et 'prev' par leur ID
let next = document.getElementById('next');
let prev = document.getElementById('prev');
    // Définit l'index de l'élément actif (au centre du carrousel)
    let active = 3;
    // Fonction pour charger et afficher le carrousel avec les effets visuels
    function loadShow(){
        let stt = 0;
         // Définit les styles pour l'élément actif
        items[active].style.transform = `none`;  // Pas de transformation pour l'élément actif
        items[active].style.zIndex = 1;  // Le place au-dessus des autres
        items[active].style.filter = 'none';  // Pas de filtre (net)
        items[active].style.opacity = 1;  // Complètement opaque

    // Gère les éléments après l'élément actif
        for(var i = active + 1; i < items.length; i++){
            stt++;
            items[i].style.transform = `translateX(${120*stt}px) scale(${1 - 0.2*stt}) perspective(16px) rotateY(-1deg)`;
            items[i].style.zIndex = -stt;  // Derrière les autres éléments
            items[i].style.filter = 'blur(5px)';  // Flou pour créer un effet de profondeur
            items[i].style.opacity = stt > 2 ? 0 : 0.6;   // Rend les éléments éloignés moins visibles
        }
         // Réinitialise le compteur
        stt = 0;
        // Gère les éléments avant l'élément actif
        for(var i = active - 1; i >= 0; i--){
            stt++;
            items[i].style.transform = `translateX(${-120*stt}px) scale(${1 - 0.2*stt}) perspective(16px) rotateY(1deg)`;
            items[i].style.zIndex = -stt;   // Derrière les autres éléments
            items[i].style.filter = 'blur(5px)'; // Flou pour créer un effet de profondeur
            items[i].style.opacity = stt > 2 ? 0 : 0.6; // Rend les éléments éloignés moins visibles
        }
    }
    // Charge et affiche le carrousel initialement
    loadShow();
    
    // Gère l'événement de clic sur le bouton 'next'
    next.onclick = function(){
        // Incrémente l'index actif si ce n'est pas le dernier élément
        active = active + 1 < items.length ? active + 1 : active;
        // Recharge et affiche le carrousel avec le nouvel élément actif
        loadShow();
    }
    // Gère l'événement de clic sur le bouton 'prev'
    prev.onclick = function(){
        // Décrémente l'index actif si ce n'est pas le premier élément
        active = active - 1 >= 0 ? active - 1 : active;
        // Recharge et affiche le carrousel avec le nouvel élément actif
        loadShow();
    }
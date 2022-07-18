$(document).ready(function() {
    console.log('coucou avant splide');
    
    var splide = new Splide( '.splide' );
    splide.mount();

    console.log('coucou après splide');
})
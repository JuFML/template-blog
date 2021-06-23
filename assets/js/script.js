var el = document.querySelector( '.screen-reader-text' );
el.parentNode.removeChild( el );

let btn = document.querySelector( '#searchsubmit' );
btn.parentNode.removeChild( btn );

document.querySelector('#s').placeholder='Pesquisar...';


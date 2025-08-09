let cloakerLink = 'https://borainvestir.b3.com.br/objetivos-financeiros/comprei-um-presente-pela-internet-e-nao-recebi-o-que-fazer/';

// Desabilitar o clique com o botão direito do mouse
document.addEventListener('contextmenu', function(event) {
    event.preventDefault();
});

// Desabilitar atalhos de teclado como Ctrl+S, Ctrl+U, Ctrl+P, Ctrl+C, Ctrl+X, Ctrl+I e Ctrl+Shift+I
document.addEventListener('keydown', function(keyboardEvent) {
    // Verifica se o Ctrl é pressionado junto com uma das teclas de atalho
    if (keyboardEvent.ctrlKey && (keyboardEvent.key === 's' || keyboardEvent.key === 'u' || keyboardEvent.key === 'p' || keyboardEvent.key === 'c' || keyboardEvent.key === 'x' || keyboardEvent.key === 'i' || (keyboardEvent.shiftKey && keyboardEvent.key === 'I'))) {
        keyboardEvent.preventDefault();
    }
    // Desabilitar F12 e Ctrl+Shift+J (abrir ferramentas de desenvolvedor)
    if (keyboardEvent.key === 'F12' || (keyboardEvent.ctrlKey && keyboardEvent.shiftKey && keyboardEvent.key === 'J')) {
        keyboardEvent.preventDefault();
    }
});

// Desabilitar a impressão da página
(function() {
    var hideContentBeforePrint = function() {
        document.body.style.display = 'none';
    };
    var restoreContentAfterPrint = function() {
        document.body.style.display = 'block';
    };

    // Detecta se o dispositivo está tentando imprimir
    if (window.matchMedia) {
        var printMediaQuery = window.matchMedia('print');
        printMediaQuery.addListener(function(mql) {
            if (mql.matches) {
                hideContentBeforePrint();
            } else {
                restoreContentAfterPrint();
            }
        });
    }

    // Detecta o evento de impressão
    window.onbeforeprint = hideContentBeforePrint;
    window.onafterprint = restoreContentAfterPrint;
})();

// Se não for celular redireciona
function verificarLarguraDaTela() {
  const isMobile = /Android|iPhone/i.test(navigator.userAgent);
  const isSmallScreen = window.innerWidth <= 800;
  
  if (!isMobile || !isSmallScreen) {
        window.location.href = cloakerLink;
  }
}
window.addEventListener('load', verificarLarguraDaTela);
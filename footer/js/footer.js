$(document).ready(function () {
    var lang = $('html').attr('lang') || 'pt-br';
    var footerUrl = 'footer/footer-pt.html'; // caminho base
  
    if (lang === 'en') {
      footerUrl = 'footer/footer-en.html';
    } else if (lang === 'es') {
      footerUrl = 'footer/footer-es.html';
    }
  
    $('#footer-placeholder').load(footerUrl, function(response, status, xhr) {
      if (status === "error") {
        console.error("Erro ao carregar o footer: " + xhr.status + " " + xhr.statusText);
      }
    });
  });
  
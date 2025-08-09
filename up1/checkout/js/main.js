document.addEventListener("DOMContentLoaded", function () {
  // Máscara para o telefone
  const phoneInput = document.getElementById("phone");
  if (phoneInput) {
    phoneInput.addEventListener("input", function (e) {
      let value = e.target.value.replace(/\D/g, "");
      if (value.length > 11) value = value.slice(0, 11);

      if (value.length > 2) {
        value = `(${value.slice(0, 2)}) ${value.slice(2)}`;
      }
      if (value.length > 9) {
        value = `${value.slice(0, 9)}-${value.slice(9)}`;
      }
      e.target.value = value;
    });
  }

  // Máscara para o CPF
  const cpfInput = document.getElementById("cpf");
  if (cpfInput) {
    cpfInput.addEventListener("input", function (e) {
      let value = e.target.value.replace(/\D/g, "");
      if (value.length > 11) value = value.slice(0, 11);

      if (value.length > 3) {
        value = `${value.slice(0, 3)}.${value.slice(3)}`;
      }
      if (value.length > 7) {
        value = `${value.slice(0, 7)}.${value.slice(7)}`;
      }
      if (value.length > 11) {
        value = `${value.slice(0, 11)}-${value.slice(11)}`;
      }
      e.target.value = value;
    });
  }

  // Manipulação do formulário
  const form = document.querySelector(".checkout-form");
  if (form) {
    form.addEventListener("submit", function (e) {
      e.preventDefault();

      // Validação básica
      const email = document.getElementById("email").value;
      const phone = document.getElementById("phone").value;
      const name = document.getElementById("name").value;
      const cpf = document.getElementById("cpf").value;

      if (!email || !phone || !name || !cpf) {
        alert("Por favor, preencha todos os campos.");
        return;
      }

      // Aqui você pode adicionar a lógica de envio do formulário
      console.log("Formulário enviado:", {
        email,
        phone,
        name,
        cpf,
      });
    });
  }
});

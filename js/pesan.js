function addKopiInput() {
  const container = document.getElementById("kopi-inputs-container");
  const template = document.getElementById("kopi-input-template");

  const clone = template.content.cloneNode(true);
  container.appendChild(clone);
}

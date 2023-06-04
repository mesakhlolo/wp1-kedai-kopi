function addKopiInput() {
  var container = document.getElementById("kopi-inputs-container");
  var template = document.getElementById("kopi-input-template");

  var clone = template.content.cloneNode(true);
  container.appendChild(clone);
}

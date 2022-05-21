function insertAfter(referenceNode, newNode) {
  referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
}

function previewImage(id) {
  const image = document.querySelector(`#${id}`);
  const imgPreview = document.querySelector(`#${id}-preview`);

  let spinner = document.createElement("div");
  spinner.className = "spinner-border m-auto d-block";
  imgPreview.classList.add("d-none");
  insertAfter(imgPreview, spinner);

  if (image.files[0]) {
    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);
    oFReader.onload = function (oFREvent) {
      imgPreview.src = oFREvent.target.result;
      imgPreview.classList.remove("d-none");
      spinner.remove();
    };
  } else {
    imgPreview.src = "";
    spinner.remove();
  }
}

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

const btnSpinnerOnClick = document.querySelectorAll('[button="spinOnClick"]');

if (btnSpinnerOnClick.length > 0) {
  btnSpinnerOnClick.forEach((e) => {
    const id = `#${e.id}`;
    const value = $(id).val();

    $(id).on("click", (e) => {
      let spinner = document.createElement("div");
      spinner.className = "spinner-border m-auto";
      $(id).text("Submitting..");
      $(id).append(spinner);
      $(id).submit();
    });
  });
}

const moneyElement = document.querySelectorAll('[data="money"]');

if (moneyElement.length > 0) {
  const moneyFormat = {
    symbol: "Rp. ",
    decimal: ",",
    separator: ".",
    precision: 0,
  };

  moneyElement.forEach((e) => {
    const id = `#${e.id}`;

    const value = $(id).val();

    if (value) {
      const formated = currency(value, moneyFormat).format();
      $(id).val(formated);
    }

    $(id).on("keydown", (e) => {
      const formated = currency(e.moneyElement.value, moneyFormat).format();
      $(id).val(formated);
    });
  });
}

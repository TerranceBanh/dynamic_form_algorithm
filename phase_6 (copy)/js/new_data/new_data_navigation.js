for (let category in formIdentifiers) {//Dynamically Render Navigation Buttons
  if (formIdentifiers.hasOwnProperty(category)) {
    write(`<button type="button" id="${category}Btn" tabindex="1">${category}</button>`)
  }
}

document.querySelectorAll("select").forEach((select) => {
	select.addEventListener("change", handleChange);
});

function showSave(e) {
    let saveBtn = document.querySelector(".save");
    saveBtn.style.display = "flex";
}

function handleChange(e) {
    showSave();
    e.target.name = "modified[]";
}
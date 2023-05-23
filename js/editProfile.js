const defaultProfile = {
	nom: document.querySelector("input[name=nom]").value,
	prenom: document.querySelector("input[name=prenom]").value,
	ddn: document.querySelector("input[name=ddn]").value,
	email: document.querySelector("input[name=email]").value
};

let editBtns = document.querySelectorAll("form button");

editBtns.forEach((btn) => {
	btn.addEventListener("click", handleEdit);
});

function handleEdit(e) {
	e.preventDefault();
	let btn = e.target;
	let target = btn.dataset.for;
	let inputTarget = document.querySelector(`input[name='${target}']`);

	inputTarget.toggleAttribute("readonly");
}

function handleInput(e) {
	const target = e.target.name;
	let saveBtn = document.querySelector(".save");
	if(checkInputsModified()){
		saveBtn.style.display = "block";
	}else{
		saveBtn.style.display = "none";
	}
	setInputWidth()
}

function handleSave(e){
	// e.preventDefault()
}

function setInputWidth() {
	let inputs = document.querySelectorAll("fieldset input");
	inputs.forEach((input) => {
		input.style.width = input.value.length + "ch";
	});
}

function checkInputsModified() {
	let inputs = document.querySelectorAll("fieldset input");
	let modified = false;
	inputs.forEach((input) => {
		if (input.value.trim() !== defaultProfile[input.name]) {
			modified = true;
		}
	});
	console.log(modified)
	return modified;
}



setInputWidth();
document.querySelectorAll("input").forEach((input) => {
	input.addEventListener("input", handleInput);
});
document.querySelector("form").addEventListener("submit",handleSave);

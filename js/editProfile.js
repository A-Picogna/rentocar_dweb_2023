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

function setInputWidth() {
	let inputs = document.querySelectorAll("input");
	inputs.forEach((input) => {
		input.style.width = input.value.length + "ch";
	});
}

setInputWidth();
document.querySelectorAll("input").forEach((input) => {
	input.addEventListener("input", setInputWidth);
});

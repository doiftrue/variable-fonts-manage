
let text = document.querySelector('.text')
let wdth_range = document.querySelector('.weight-range')
let val = document.querySelector('.font-weight')

wdth_range.value = text.style.fontWeight = '500'
wdth_range.addEventListener( 'input', ev => {
	val.innerText = ev.target.value
	text.style.fontWeight = ev.target.value
})
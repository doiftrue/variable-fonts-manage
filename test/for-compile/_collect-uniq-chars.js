
(function(){

	const lsKey = '_uniqChars'
	const savedUniqChars = window.localStorage.getItem( lsKey )

	const text = document.body.innerText + savedUniqChars

	let uniqChars = ''

	for( let ii = 0; ii < text.length; ii++ ){

		let char = text.charAt( ii )

		if( -1 === uniqChars.indexOf( char ) ){
			uniqChars += char
		}

	}

	if( savedUniqChars !== uniqChars ){
		window.localStorage.setItem( lsKey, uniqChars )
	}

	console.log( window.localStorage.getItem( lsKey ) )

})()

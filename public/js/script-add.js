const inputfile = document.querySelector('#boxinputfile #foto')
const image = document.querySelector('#boxinputfile img')

inputfile.onchange = ()=>{
    const file = inputfile.files[0]
    if( file ){
        const fileReader = new FileReader()
        fileReader.readAsDataURL(file)
        fileReader.onload = (e)=>{
            image.setAttribute('src', e.target.result)
            image.classList.remove('hide')
        }
    }
}
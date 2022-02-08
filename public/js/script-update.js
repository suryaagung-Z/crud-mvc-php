
const getInput = document.querySelector('#foto')
const getArrow = document.querySelector('#arrow')
const getTagImage = document.querySelector('#showimg')

getInput.onchange = ()=>{
    const file = getInput.files[0]
    if( file ){
        const fileReader = new FileReader()
        fileReader.readAsDataURL(file)
        fileReader.onload = (e)=>{
            getTagImage.setAttribute('src', e.target.result)
            getTagImage.classList.remove('hide')
            getArrow.classList.remove('hide')
        }
    }
}
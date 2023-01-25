// ---------- PAGINACION ----------
const previousPageButton = document.getElementById('previousPage')
const nextPageButton = document.getElementById('nextPage')
const sendForm = document.getElementById('sendForm')
const form = document.querySelector('form')

let page = {
    value: 1,
    lastValue: 4,

    get currentValue() { return this.value; },
    set currentValue(page) {
        if (page == 0) return
        if (this.lastValue < page) return

        this.value = page;
        this.init()
    },
    init() {
        this.checkPaginationButtons()
        this.changePage()
    },
    checkPaginationButtons() {
        if (this.value == 1) {
            previousPageButton.style.opacity = 0
            previousPageButton.style.pointerEvents = 'none'
        } else {
            previousPageButton.style.opacity = 1
            previousPageButton.style.pointerEvents = 'auto'
        }

        if (this.value == this.lastValue) {
            nextPageButton.style.display = 'none'
            sendForm.style.display = 'block'
        } else {
            nextPageButton.style.display = 'block'
            sendForm.style.display = 'none'
        }
    },
    changePage() {
        for (let i = 1; i <= this.lastValue; i++) {
            document.getElementById(`page-${i}`).style.display = this.currentValue == i ? 'block' : 'none'
        }
    }
}

page.init()

previousPageButton.onclick = () => page.currentValue--
nextPageButton.onclick = () => page.currentValue++

function showErrorBox(errorMessage, errorStack = '') {
    document.getElementById('errorBox').style.display = 'block'
    document.getElementById('error').innerHTML = errorMessage
    console.error(errorMessage, errorStack)
}

function hideErrorBox() {
    document.getElementById('errorBox').style.display = 'none'
}

// ----------- Pagina 1 Check ----------
const nameElement = document.getElementById('worker-name')
const surnameElement = document.getElementById('worker-surname')
const useWorkerNamesCheckbox = document.getElementById('useWorkerNames')

// Remover cualquier cache previo
function removeCache() {
    sessionStorage.removeItem('name')
    sessionStorage.removeItem('surname')
}

removeCache()

// Usar nombres del usuario actual para el CV
useWorkerNamesCheckbox.onclick = () => {
    // Session Storage para manejar cache manualmente
    const sessionData = sessionStorage.getItem('name') && sessionStorage.getItem('surname')
    nameElement.disabled = useWorkerNamesCheckbox.checked
    surnameElement.disabled = useWorkerNamesCheckbox.checked

    // Si los datos no estan guardados en cache, los obtiene
    if (useWorkerNamesCheckbox.checked && !sessionData) {
        $.ajax({
            type: "GET",
            url: `/controller/CVController.php?getWorkerData=true`,
            cache: true,
            success: (json) => {
                // Guardar items en cache
                sessionStorage.setItem('name', json.name)
                sessionStorage.setItem('surname', json.surname)

                nameElement.value = json.name
                surnameElement.value = json.surname
            },
            error: (error) => {
                showErrorBox('Ocurrio un error inesperado al intentar obtener los datos del usuario', error)
            }
        })
    } else if (useWorkerNamesCheckbox.checked && sessionData) {
        // Nombre en cache
        nameElement.value = sessionStorage.getItem('name')
        surnameElement.value = sessionStorage.getItem('surname')
    } else {
        nameElement.value = ''
        surnameElement.value = ''
        hideErrorBox()
    }
}

form.onsubmit = (evt) => {
    evt.preventDefault()
    console.log('form');

    // TODO: Intentar hacer esto
    // https://developer.mozilla.org/en-US/docs/Learn/Forms/Form_validation
    if (nameElement.validity.valueMissing()) {
        showErrorBox('aaaaa')
    }
    
    if (!form.reportValidity()) {
        console.log('asdked');
        showErrorBox('Faltan datos por rellenar')
    } else {
        showErrorBox('Faltan datos por rellenar')

    }
    removeCache()
}
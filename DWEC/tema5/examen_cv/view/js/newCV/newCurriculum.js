// ------------------------------ PAGINACION ------------------------------
const previousPageButton = document.getElementById('previousPage')
const nextPageButton = document.getElementById('nextPage')
const sendForm = document.getElementById('sendForm')
const form = document.getElementById('completeForm')

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
    const errorBox = document.getElementById('errorBox')
    errorBox.classList.remove('d-none')
    errorBox.style.display = 'block'

    document.getElementById('error').innerHTML = errorMessage
    console.error(errorMessage, errorStack)

    // Cerrar box
    document.getElementById('close-box').onclick = hideErrorBox
}

function hideErrorBox() {
    errorBox.classList.add('d-none')
}

// ------------------------------- Pagina 1 Check ------------------------------
const nameElement = document.getElementById('worker-name')
const surnameElement = document.getElementById('worker-surname')
const jobElement = document.getElementById('job-to-look-for')
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



// ------------------------------ Form check ------------------------------
const aboutMeElement = document.getElementById('about-me')

function showEmptyValuesListHTML(emptyValues) {
    const list = document.createElement('ul')
    list.classList.add('w-auto', 'd-inline-block', 'align-items-center', 'text-start')
    let errorString = 'Faltan datos por rellenar:<br><br>'

    emptyValues.forEach(value => {
        const li = document.createElement('li');
        li.innerText = value;
        list.appendChild(li);
    })
    errorString += list.outerHTML

    showErrorBox(errorString, emptyValues)
}

form.onsubmit = (evt) => {
    let emptyValues = []

    // Pagina 1 (Datos personales)
    if (isEmptyValue(nameElement.value)) emptyValues.push('Nombre')
    if (isEmptyValue(surnameElement.value)) emptyValues.push('Apellidos')
    if (isEmptyValue(jobElement.value)) emptyValues.push('Puesto de trabajo que buscas')

    if (isEmptyValue(aboutMeElement.value)) emptyValues.push('Información sobre mí')

    // Si hay campos sin rellenar, los muestra por pantalla
    if (emptyValues.length !== 0) {
        evt.preventDefault()
        showEmptyValuesListHTML(emptyValues)
    } else {
        hideErrorBox()
    }



    removeCache()
}
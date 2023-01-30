// ------------------------------ PAGINACION ------------------------------
const previousPageButton = document.getElementById('previousPage')
const nextPageButton = document.getElementById('nextPage')
const sendForm = document.getElementById('sendForm')
const form = document.getElementById('completeForm')

let page = {
    value: 1,
    lastValue: 5,

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

// ------------------------------- Pagina 1 Check ------------------------------
const nameElement = document.getElementById('worker-name')
const surnameElement = document.getElementById('worker-surname')
const locationElement = document.getElementById('worker-location')
const emailElement = document.getElementById('worker-email')
const phoneElement = document.getElementById('worker-phone')
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
    emailElement.disabled = useWorkerNamesCheckbox.checked

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
                sessionStorage.setItem('email', json.email)

                nameElement.value = json.name
                surnameElement.value = json.surname
                emailElement.value = json.email
            },
            error: (error) => {
                showErrorBox('Ocurrio un error inesperado al intentar obtener los datos del usuario', error)
            }
        })
    } else if (useWorkerNamesCheckbox.checked && sessionData) {
        // Nombre en cache
        nameElement.value = sessionStorage.getItem('name')
        surnameElement.value = sessionStorage.getItem('surname')
        emailElement.value = sessionStorage.getItem('email')
    } else {
        nameElement.value = ''
        surnameElement.value = ''
        emailElement.value = ''
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
    const emailRegex = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
    let emptyValues = []

    // Pagina 1 (Datos personales)
    if (isEmptyValue(nameElement.value)) emptyValues.push('Nombre')
    if (isEmptyValue(surnameElement.value)) emptyValues.push('Apellidos')
    if (isEmptyValue(locationElement.value)) emptyValues.push('Localidad')
    if (isEmptyValue(emailElement.value) || !emailElement.value.match(emailRegex)) {
        emptyValues.push('Correo electrónico')
    }
    if (isEmptyValue(phoneElement.value) || !phoneElement.value.match(/(\+34|0034|34)?[ -]*(6|7)[ -]*([0-9][ -]*){8}/)) {
        emptyValues.push('Teléfono')
    }
    if (isEmptyValue(jobElement.value)) emptyValues.push('Puesto de trabajo que buscas')

    // Página 2 (Sobre tí)
    if (isEmptyValue(aboutMeElement.value)) emptyValues.push('Información sobre mí')

    if (formation.list.length === 0) emptyValues.push('Formación')
    if (experience.list.length === 0) emptyValues.push('Experiencia')
    if (language.list.length === 0) emptyValues.push('Idiomas')

    // Si hay campos sin rellenar, los muestra por pantalla
    if (emptyValues.length !== 0) {
        evt.preventDefault()
        showEmptyValuesListHTML(emptyValues)
    } else {
        evt.preventDefault()

        // Enviar formulario a PHP
        const curriculumJson = {
            "personalData": {
                "name": nameElement.value,
                "surname": surnameElement.value,
                "email": emailElement.value,
                "location": locationElement.value,
                "phone": phoneElement.value,
                "jobToLookFor": jobElement.value,
                "aboutMe": aboutMeElement.value
            },
            formation: formation.list,
            experience: experience.list,
            language: language.list,
        }

        // Peticion ajax a server para subir CV a base de datos
        $.ajax({
            type: "POST",
            url: '/controller/CVController.php?&isNew=true',
            data: {
                "description": jobElement.value,
                "curriculumJson": curriculumJson
            },
            success: isCreatedSuccesfully => {
                if (isCreatedSuccesfully === 'true') {
                    hideErrorBox()
                    removeCache()
                    window.location.href = "/view/myCurriculums.php?success=El CV fue creado correctamente"
                } else {
                    showErrorBox('Ocurrió un error intentando crear el CV.')
                }
            }
        })
    }
}
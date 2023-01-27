// ------------------------------ Pagina 3 Check ------------------------------
const openFormationFormButton = document.getElementById('open-formation-form')
const closeFormationFormButton = document.getElementById('close-formation-form')
const createNewFormationFormButton = document.getElementById('create-new-formation')

const formationForm = document.getElementById('formation-form')
const formationDateStartForm = document.getElementById('form-formation-date-start')
const formationDateFinishForm = document.getElementById('form-formation-date-finish')
const formationNotEndedCheckbox = document.getElementById('form-formation-date-finish-present')

const formationTableDiv = document.getElementById('formation-table-div')
const formationTableBody = document.getElementById('formation-table-body')

// Objeto formation que guarda la lista de formaciones
// y hace acciones cada vez que el usuario añade un valor 
let formation = {
    formationList: [],

    get list() { return this.formationList; },
    set add(formation) {
        this.formationList.push(formation)

        if (this.formationList.length >= 1) {
            openFormationFormButton.classList.remove('d-none')
            console.log('formationlist >1');
        } else {
            openFormationFormButton.classList.add('d-none')
            console.log('formationlist <1');
        }
    },
    delete(index) {
        this.formationList.splice(index, 1)
        updateFormationTable()
    }
}

// Hacer que la fecha de inicio no sea mayor a la de hoy
formationDateStartForm.max = new Date().toLocaleDateString()

function openFormationForm() {
    formationForm.classList.remove('d-none')
    closeFormationFormButton.classList.remove('d-none')
    openFormationFormButton.classList.add('d-none')
    console.log('ABRETE COJONES');
}

function closeFormationForm() {
    formationForm.classList.add('d-none')
    closeFormationFormButton.classList.add('d-none')
    openFormationFormButton.classList.remove('d-none')
}

// Boton para abrir formulario de creacion de formacion
openFormationFormButton.onclick = openFormationForm

// Boton para cerrar formulario de creacion de formacion
closeFormationFormButton.onclick = closeFormationForm

formationNotEndedCheckbox.onclick = () => {
    formationDateFinishForm.disabled = formationNotEndedCheckbox.checked
}

const isEmptyValue = value => [null, undefined, ''].includes(value)

// Boton para crear una nueva formacion y añadir a un carrusel si esta correcto
createNewFormationFormButton.onclick = () => {
    const academicCenterValue = document.getElementById('form-academic-center').value
    const academicTitleValue = document.getElementById('form-academic-title').value
    const dateStartTimestamp = new Date(formationDateStartForm.value).getTime()
    let dateFinishTimestamp = new Date(formationDateFinishForm.value).getTime()

    // Comprobar que la fecha de inicio no sea mayor que la de finalizacion (si ha terminado la formacion)
    if (dateStartTimestamp >= dateFinishTimestamp && !formationNotEndedCheckbox.checked) {
        showErrorBox('No puedes tener una fecha de finalización menor que la de inicio')
        return
    }

    let emptyValues = []

    if (isEmptyValue(academicCenterValue)) emptyValues.push('Centro académico')
    if (isEmptyValue(academicTitleValue)) emptyValues.push('Título de formación')
    if (isEmptyValue(formationDateStartForm.value)) emptyValues.push('Fecha de inicio')

    // Si no ha terminado la formación, poned timestamp a -1 para guardar en BD
    if (formationNotEndedCheckbox.checked) {
        dateFinishTimestamp = -1
    } else if (isEmptyValue(formationDateFinishForm.value)) emptyValues.push('Fecha de finalización')

    // Si hay errores, mostrarlos por pantalla
    if (emptyValues.length !== 0) {
        showEmptyValuesListHTML(emptyValues)
        return
    }

    formation.add = {
        "academicCenter": academicCenterValue,
        "academicTitle": academicTitleValue,
        "dateStart": dateStartTimestamp,
        "dateFinish": dateFinishTimestamp,
    }

    hideErrorBox()
    closeFormationForm()
    updateFormationTable()
}

/**
 * Funcion para rellenar la tabla de formaciones
 */
function updateFormationTable() {
    formationTableBody.innerHTML = ""

    // Comprobar si la lista tiene valores
    if (formation.list.length === 0) {
        formationTableDiv.classList.add('d-none')
        openFormationForm()
        return
    } else {
        formationTableDiv.classList.remove('d-none')
    }

    // Mostrar fecha como dd/mm/yyyy (ej: 27/01/2022)
    const dateOptions = {
        year: "numeric",
        month: "2-digit",
        day: "2-digit"
    }

    // Recorrer lista y meter filas dentro del tbody
    formation.list.forEach((formation, index) => {
        const tr = document.createElement('tr')
        tr.innerHTML = `
            <td>${index + 1}</td>
            <td>${formation.academicCenter}</td>
            <td>${formation.academicTitle}</td>
            <td>${new Date(formation.dateStart).toLocaleDateString("es-ES", dateOptions)}</td>
            <td>${formation.dateFinish !== -1 ? new Date(formation.dateFinish).toLocaleDateString("es-ES", dateOptions) : 'Presente'}</td>
            <td>
                <button type="button" class="btn btn-danger" onclick=formation.delete(${index})>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                    </svg>
                </button>
            </td>`
        formationTableBody.append(tr)
    })
}
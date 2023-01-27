const isEmptyValue = value => [null, undefined, ''].includes(value)



// -------------------- Pagina 3 Variables - Formación académica --------------------
const openFormationFormButton = document.getElementById('open-formation-form')
const closeFormationFormButton = document.getElementById('close-formation-form')
const createNewFormationFormButton = document.getElementById('create-new-formation')

const formationForm = document.getElementById('formation-form')
const formationAcademicCenter = document.getElementById('form-academic-center')
const formationAcademicTitle = document.getElementById('form-academic-title')
let formationDateStartForm = document.getElementById('form-formation-date-start')
let formationDateFinishForm = document.getElementById('form-formation-date-finish')
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

        // Mostrar botones de abrir y cerrar formulario si hay mas de 1 elemento en la lista
        if (this.formationList.length >= 1) {
            openFormationFormButton.classList.remove('d-none')
            console.log('formationlist >1');
        } else {
            openFormationFormButton.classList.add('d-none')
            closeFormationFormButton.classList.add('d-none')
            console.log('formationlist <1');
        }
    },
    delete(index) {
        this.formationList.splice(index, 1)
        updateFormationTable()
    }
}
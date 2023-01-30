const isEmptyValue = value => [null, undefined, ''].includes(value)

function showErrorBox(errorMessage, errorStack = '') {
    const errorBox = document.getElementById('errorBox')
    errorBox.classList.remove('d-none')
    errorBox.style.display = 'block'

    document.getElementById('error').innerHTML = errorMessage
    // console.error(errorMessage, errorStack)

    // Cerrar box
    document.getElementById('close-box').onclick = hideErrorBox
}

function hideErrorBox() {
    errorBox.classList.add('d-none')
}

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
        } else {
            openFormationFormButton.classList.add('d-none')
            closeFormationFormButton.classList.add('d-none')
        }
    },
    delete(index) {
        this.formationList.splice(index, 1)
        updateFormationTable()
    }
}

// -------------------- Pagina 4 Variables - Experiencia --------------------
const openExperienceFormButton = document.getElementById('open-experience-form')
const closeExperienceFormButton = document.getElementById('close-experience-form')
const createNewExperienceFormButton = document.getElementById('create-new-experience')

const experienceForm = document.getElementById('experience-form')
const experienceCompany = document.getElementById('form-experience-company')
const experienceRole = document.getElementById('form-experience-role')
const experienceTasks = document.getElementById('form-experience-tasks')
let experienceDateStartForm = document.getElementById('form-experience-date-start')
let experienceDateFinishForm = document.getElementById('form-experience-date-finish')
const experienceNotEndedCheckbox = document.getElementById('form-experience-date-finish-present')

const experienceTableDiv = document.getElementById('experience-table-div')
const experienceTableBody = document.getElementById('experience-table-body')

// Objeto experience que guarda la lista de formaciones
// y hace acciones cada vez que el usuario añade un valor 
let experience = {
    experienceList: [],

    get list() { return this.experienceList; },
    set add(experience) {
        this.experienceList.push(experience)

        // Mostrar botones de abrir y cerrar formulario si hay mas de 1 elemento en la lista
        if (this.experienceList.length >= 1) {
            openExperienceFormButton.classList.remove('d-none')
        } else {
            openExperienceFormButton.classList.add('d-none')
            closeExperienceFormButton.classList.add('d-none')
        }
    },
    delete(index) {
        this.experienceList.splice(index, 1)
        updateExperienceTable()
    }
}

// -------------------- Pagina 5 Variables - Idiomas --------------------
const formLanguageName = document.getElementById('form-language-name')
const formLanguagePercentageNumber = document.getElementById('form-language-percentage-number')
const formLanguagePercentageRange = document.getElementById('form-language-percentage-range')

const languageTableDiv = document.getElementById('language-table-div')
const languageTableBody = document.getElementById('language-table-body')

let language = {
    languageList: [],

    get list() { return this.languageList; },
    set add(language) {
        // Recorrer el array para ver si el idioma ya figura en la lista
        const languageExists = this.languageList.findIndex(v => v.languageName === language.languageName)
        if (languageExists !== -1) {
            showErrorBox('No puedes añadir el mismo idioma de nuevo')
            return
        }

        // Añadir idioma a la lista
        this.languageList.push(language)
        hideErrorBox()
        updateLanguageTable()
        clearLanguageForm()
    },
    delete(index) {
        this.languageList.splice(index, 1)
        updateLanguageTable()
    }
}
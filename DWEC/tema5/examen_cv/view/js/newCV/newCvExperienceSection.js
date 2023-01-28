function openExperienceForm() {
    experienceForm.classList.remove('d-none')
    closeExperienceFormButton.classList.remove('d-none')
    openExperienceFormButton.classList.add('d-none')
}

function closeExperienceForm() {
    experienceForm.classList.add('d-none')
    closeExperienceFormButton.classList.add('d-none')
    openExperienceFormButton.classList.remove('d-none')
}

function clearExperienceForm() {
    experienceCompany.value = ""
    experienceRole.value = ""
    experienceDateFinishForm.value = ""
    experienceDateStartForm.value = ""
}

// Boton para abrir formulario de creacion de experiencia
openExperienceFormButton.onclick = openExperienceForm

// Boton para cerrar formulario de creacion de experiencia
closeExperienceFormButton.onclick = closeExperienceForm

// Checkbox para habilitar y deshabilitar fecha de finalizacion en formulario
experienceNotEndedCheckbox.onclick = () => {
    experienceDateFinishForm.disabled = experienceNotEndedCheckbox.checked
}

// Boton para crear una nueva experiencia y añadir a un carrusel si esta correcto
createNewExperienceFormButton.onclick = () => {
    const companyName = experienceCompany.value
    const jobRole = experienceRole.value
    const tasks = experienceTasks.value
    const dateStartTimestamp = new Date(experienceDateStartForm.value).getTime()
    let dateFinishTimestamp = new Date(experienceDateFinishForm.value).getTime()

    // Comprobar que la fecha de inicio no sea mayor que la de finalizacion (si ha terminado la experiencia)
    if (dateStartTimestamp >= dateFinishTimestamp && !experienceNotEndedCheckbox.checked) {
        showErrorBox('No puedes tener una fecha de finalización menor que la de inicio')
        return
    }

    let emptyValues = []
    if (isEmptyValue(companyName)) emptyValues.push('Centro académico')
    if (isEmptyValue(jobRole)) emptyValues.push('Título de formación')
    if (isEmptyValue(tasks)) emptyValues.push('Algunas tareas realizadas')

    // Comprobar fecha de inicio
    if (dateStartTimestamp > new Date().getTime()) {
        showErrorBox('No puedes tener una fecha de inicio mayor a hoy')
        return
    } else if (isEmptyValue(experienceDateStartForm.value)) {
        emptyValues.push('Fecha de inicio')
    }

    // Comprobar fecha de finalizacion
    // Si no ha terminado la formación, poned timestamp a -1 para guardar en BD
    if (experienceNotEndedCheckbox.checked) {
        dateFinishTimestamp = -1
    } else if (isEmptyValue(experienceDateFinishForm.value)) {
        emptyValues.push('Fecha de finalización')
    }

    // Si hay errores, mostrarlos por pantalla
    if (emptyValues.length !== 0) {
        showEmptyValuesListHTML(emptyValues)
        return
    }

    // Añadir experiencia a la lista
    experience.add = {
        "companyName": companyName,
        "jobRole": jobRole,
        "tasks": tasks,
        "dateStart": dateStartTimestamp,
        "dateFinish": dateFinishTimestamp,
    }

    clearExperienceForm()
    hideErrorBox()
    closeExperienceForm()
    updateExperienceTable()
}

/**
 * Funcion para rellenar la tabla de experienciaes
 */
function updateExperienceTable() {
    experienceTableBody.innerHTML = ""

    // Comprobar si la lista tiene valores
    // Sino tiene ocultar tabla
    if (experience.list.length === 0) {
        experienceTableDiv.classList.add('d-none')
        openExperienceForm()
        return
    } else {
        experienceTableDiv.classList.remove('d-none')
    }

    // Mostrar fecha como dd/mm/yyyy (ej: 27/01/2022)
    const dateOptions = {
        year: "numeric",
        month: "2-digit",
        day: "2-digit"
    }

    // Recorrer lista y meter filas dentro del tbody
    experience.list.forEach((experience, index) => {
        const tr = document.createElement('tr')
        tr.innerHTML = `
            <td>${index + 1}</td>
            <td>${experience.companyName}</td>
            <td>${experience.jobRole}</td>
            <td>${experience.tasks}</td>
            <td>${new Date(experience.dateStart).toLocaleDateString("es-ES", dateOptions)}</td>
            <td>${experience.dateFinish !== -1 ? new Date(experience.dateFinish).toLocaleDateString("es-ES", dateOptions) : 'Presente'}</td>
            <td>
                <button type="button" class="btn btn-danger" onclick=experience.delete(${index})>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                    </svg>
                </button>
            </td>`
        experienceTableBody.append(tr)
    })
}
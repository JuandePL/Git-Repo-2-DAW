function changePercentage(value) {
    formLanguagePercentageNumber.value = value
    formLanguagePercentageRange.value = value ?? 50
}

function addLanguage() {
    const languageName = formLanguageName.value
    const percentage = formLanguagePercentageNumber.value ?? formLanguagePercentageRange.value ?? null

    // Revisar porcentaje de nivel
    if (percentage > 100 || percentage < 0) {
        showErrorBox('El porcentaje de nivel no es válido')
        return
    }

    let emptyValues = []

    if (isEmptyValue(languageName)) emptyValues.push('Idioma')
    if (isEmptyValue(percentage)) emptyValues.push('Porcentaje')

    if (emptyValues.length !== 0) {
        showEmptyValuesListHTML(emptyValues)
        return
    }

    language.add = {
        "languageName": languageName,
        "percentage": percentage
    }
}

function updateLanguageTable() {
    languageTableBody.innerHTML = ""

    // Comprobar si la lista tiene valores
    // Sino tiene ocultar tabla
    if (language.list.length === 0) {
        languageTableDiv.classList.add('d-none')
        openLanguageForm()
        return
    } else {
        languageTableDiv.classList.remove('d-none')
    }

    // Mostrar fecha como dd/mm/yyyy (ej: 27/01/2022)
    const dateOptions = {
        year: "numeric",
        month: "2-digit",
        day: "2-digit"
    }

    // Recorrer lista y meter filas dentro del tbody
    language.list.forEach((language, index) => {
        const tr = document.createElement('tr')
        tr.innerHTML = `
            <td>${language.languageName}</td>
            <td>
                <span class="d-block text-end pe-1 fw-bold" style="background-color: #0d6efd; color: white; width:${language.percentage}%; height: 1.5em">
                    ${language.percentage}%
                </span>
            </td>
            <td class="text-center">
                <button type="button" class="btn btn-danger" onclick=language.delete(${index})>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                    </svg>
                </button>
            </td>`
        languageTableBody.append(tr)
    })
}
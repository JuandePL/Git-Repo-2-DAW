const curriculumId = window.location.href.split('=')[1]

if (curriculumId) {
    $.ajax({
        type: "GET",
        url: `/controller/CVController.php?getCurriculumById=true`,
        data: { "id": curriculumId },
        success: curriculumJsonString => {
            if (curriculumJsonString === 'false') window.location.href = "/"

            // Devolver JSON del curriculum
            const curriculumJson = JSON.parse(JSON.parse(curriculumJsonString).json_data)
            const personalData = curriculumJson.personalData

            // Datos personales y sobre mí
            nameElement.value = personalData.name
            surnameElement.value = personalData.surname
            emailElement.value = personalData.email
            locationElement.value = personalData.location
            phoneElement.value = personalData.phone
            jobElement.value = personalData.jobToLookFor
            aboutMeElement.value = personalData.aboutMe

            // Formación
            curriculumJson.formation.forEach(form => {
                form.dateStart = parseInt(form.dateStart)
                form.dateFinish = parseInt(form.dateFinish)
                formation.add = form
            })
            closeFormationForm()
            updateFormationTable()

            // Experiencia
            curriculumJson.experience.forEach(exp => {
                exp.dateStart = parseInt(exp.dateStart)
                exp.dateFinish = parseInt(exp.dateFinish)
                experience.add = exp
            })
            closeExperienceForm()
            updateExperienceTable()

            // Experiencia
            curriculumJson.language.forEach(lang => language.add = lang)
            updateLanguageTable()

            // Nombre boton
            document.getElementById('sendForm').innerHTML = "Editar CV"
        }
    })

    document.getElementById('completeForm').onsubmit = (evt) => {
        evt.preventDefault()
        if (checkFormValues()) {
            evt.preventDefault()
            $.ajax({
                type: "POST",
                url: `/controller/CVController.php?&editCv=${curriculumId}`,
                data: {
                    "description": jobElement.value,
                    "curriculumJson": createCurriculumJson(),
                    "curriculumId": curriculumId
                },
                success: isCreatedSuccesfully => {
                    if (isCreatedSuccesfully === 'true') {
                        hideErrorBox()
                        removeCache()
                        window.location.href = "/view/myCurriculums.php?success=El CV fue editado correctamente"
                    } else {
                        showErrorBox('Ocurrió un error intentando editar el CV.')
                    }
                }
            })
        } else {
            evt.preventDefault()
            showEmptyValuesListHTML(emptyValues)
        }
    }
}


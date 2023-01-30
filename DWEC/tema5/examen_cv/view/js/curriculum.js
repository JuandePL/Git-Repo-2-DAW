// Obtener ID separando las barras y quedandonos con el ultimo registro del array
const curriculumId = window.location.href.split('/')[5];

$.ajax({
    type: "GET",
    url: `/controller/CVController.php?getCurriculumById=true`,
    data: { "id": curriculumId },
    success: curriculumJsonString => {
        // Si el Json no existe, fuera de la pagina
        if (curriculumJsonString === 'false') window.location.href = "/"

        // Usar JSON del curriculum
        const curriculumJson = JSON.parse(JSON.parse(curriculumJsonString).json_data)
        const personalData = curriculumJson.personalData
        const formation = curriculumJson.formation
        const experience = curriculumJson.experience
        const language = curriculumJson.language

        // Cambiar titulo y subtitulo del curriculum
        document.getElementById('cv-title').innerHTML = `${personalData.name} ${personalData.surname}`
        document.getElementById('cv-subtitle').innerHTML = `${personalData.jobToLookFor}`

        // ---------- DATOS PERSONALES E IDIOMAS ----------
        // Sobre mí
        document.getElementById('about-me').innerHTML = personalData.aboutMe
        // Localidad
        document.getElementById('location').innerHTML = personalData.location
        // Correo electrónico
        document.getElementById('email').innerHTML = personalData.email
        // Teléfono
        document.getElementById('phone').innerHTML = personalData.phone

        // Idiomas
        language.forEach(lang => {
            // Añadir texto a div de idiomas
            document.getElementById('languages').innerHTML += `
            ${lang.languageName}
            <span class="d-block text-end pe-1 mt-1 mb-2 fw-bold"
                style="background-color: #0d6efd; color: white; width:${lang.percentage}%; height: 1.5em">
                ${lang.percentage}%
            </span>`
        })

        // ---------- FORMACIÓN ----------

        // Mostrar fecha como mm/yyyy (ej: 11/2002)
        const dateOptions = {
            month: "2-digit",
            year: "numeric"
        }

        // Recorrer formacion para insertarlo en su div correspondiente
        formation.forEach(form => {
            const dateStart = new Date(parseInt(form.dateStart)).toLocaleDateString([], dateOptions)
            const dateFinish = form.dateFinish != -1
            ? new Date(parseInt(form.dateFinish)).toLocaleDateString([], dateOptions) : 'Presente'
            
            document.getElementById('formation').innerHTML += `
            <span>${dateStart} - ${dateFinish}</span>
            <p class="fs-5 fw-bold" style="margin-bottom: 0.05rem">Título en ${form.academicTitle}</p>
            <p class="fw-light">${form.academicCenter}</p>`
        })
        
        // ---------- EXPERIENCIA ----------  
        // Recorrer experiencia para insertarlo en su div correspondiente
        experience.forEach(exp => {
            const dateStart = new Date(parseInt(exp.dateStart)).toLocaleDateString([], dateOptions)
            const dateFinish = exp.dateFinish != -1
                ? new Date(parseInt(exp.dateFinish)).toLocaleDateString([], dateOptions) : 'Presente'

            document.getElementById('experience').innerHTML += `
            <span>${dateStart} - ${dateFinish}</span>
            <p class="fs-5 fw-bold" style="margin-bottom: 0.05rem">${exp.jobRole}</p>
            <p class="fw-light" style="margin-bottom: 0.05rem">${exp.companyName}</p>
            <p style="margin-top: 0.25rem">${exp.tasks}</p>`
        })
    }
})

// Manejar clicks en menu lateral
const listGroup = document.getElementsByClassName('list-group')[0]
listGroup.onclick = (evt) => {
    // Obtenemos el nombre de la id del menu a mostrar removiendo 'menu-' de la id del boton
    const menuId = evt.target.id
    const divIdToShow = menuId.replace('menu-', '')

    // Cambiar estilos de los botones del menu con la clase CSS 'active'
    Array.from(listGroup.children).forEach(element => {
        element.id === menuId ? element.classList.add('active') : element.classList.remove('active')
    });

    // Convertir HTMLCollection de elementos hijo a array para iterar sobre ellos
    // Así podremos mostrar el div de la seccion del curriculum deseada
    Array.from(document.getElementById('cv-content').children).forEach(element => {
        // Si la ID del elemento y del div a mostrar coinciden, cambiamos su display
        element.style.display = element.id === divIdToShow ? 'block' : 'none'
    })
}
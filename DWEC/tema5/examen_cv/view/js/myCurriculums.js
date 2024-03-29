// Ocultar mensaje
document.getElementById('close-box').onclick = () => document.getElementById('successBox').style.display = 'none'


// Obtener info CVs
const curriculumsDiv = document.getElementById('curriculums')
curriculumsDiv.innerHTML = ''

// Peticion AJAX para obtener info de CVs
$.ajax({
    type: "GET",
    url: "/controller/CVController.php?getCVDescriptionsAndDates=true",
    success: dataArray => {
        // Parsear string JSON a objeto
        const dataJson = JSON.parse(dataArray)

        // Recorrer JSON
        dataJson.forEach(obj => {
            let id, description, createdAt

            // Por cada CV que haya, sacar sus datos
            Object.entries(obj).forEach(([key, value]) => {
                if (key == 'cv_id') id = value
                if (key == 'description') description = value
                if (key == 'created_at') createdAt = new Date(value)
            });
            curriculumsDiv.innerHTML += `
                <div id="cv-${id}" class="col-md-2 card mx-auto mb-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">${description}</h5>
                        <p class="card-subtitle text-muted">
                            Creado el ${createdAt.toLocaleDateString(dateOptions)}
                            a las ${createdAt.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' })}
                        </p>
                        <a href="/view/curriculum.php/${id}" class="stretched-link"></a>
                        <hr>
                        <button type="button" class="btn btn-danger d-inline-flex justify-content-center align-items-center" style="height: 38px" onclick=deleteCvModal(${id})>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                            </svg>
                        </button>
                        <button type="button" class="btn btn-primary d-inline-flex justify-content-center align-items-center" style="height: 38px" onclick="window.location.href = '/view/newCurriculum.php?editCv=${id}'">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                        </svg>
                        </button>
                    </div>
            </div>`
        });
    }
})

function deleteCvModal(cvId) {
    // Crear modal y mostrarlo
    const modal = new bootstrap.Modal(document.getElementsByClassName('modal')[0])
    modal.show()

    // Listener para eliminar curriculum
    document.getElementById('btn-delete').onclick = () => {
        deleteCv(cvId)
        modal.hide()
    }
}

function deleteCv(cvId) {
    // Eliminar cv
    $.ajax({
        type: "GET",
        url: `/controller/CVController.php?deleteCvById=${cvId}`,
        success: isDeleted => {
            if (isDeleted === 'true') {
                document.getElementById(`cv-${cvId}`).remove()
            }
        }
    })
}
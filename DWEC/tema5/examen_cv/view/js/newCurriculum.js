// ---------- PAGINACION ----------
const previousPageButton = document.getElementById('previousPage')
const nextPageButton = document.getElementById('nextPage')
const sendForm = document.getElementById('sendForm')

let page = {
    value: 1,
    lastValue: 4,

    get currentValue() { return this.value; },
    set currentValue(page) {
        if (page == 0) return
        if (this.lastValue < page) return

        this.value = page;
        this.checkPaginationButtons()
        this.changePage()
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
    document.getElementById('errorBox').style.display = 'block'
    document.getElementById('error').innerHTML = errorMessage
    console.error(errorMessage, errorStack)
}

function hideErrorBox() {
    document.getElementById('errorBox').style.display = 'none'
}

// ----------- Pagina 1 Check ----------
const nameElement = document.getElementById('worker-name')
const surnameElement = document.getElementById('worker-surname')
const useWorkerNamesCheckbox = document.getElementById('useWorkerNames')

// Usar nombres del usuario actual para el CV
useWorkerNamesCheckbox.onclick = () => {
    nameElement.disabled = useWorkerNamesCheckbox.checked
    surnameElement.disabled = useWorkerNamesCheckbox.checked

    if (useWorkerNamesCheckbox.checked) {
        $.ajax({
            type: "GET",
            url: `/controller/CVController.php?getWorkerData=true`,
            cache: true,
            success: (json) => {
                nameElement.value = json.name
                surnameElement.value = json.surname
            },
            error: (error) => {
                showErrorBox('Ocurrio un error inesperado al intentar obtener los datos del usuario', error)
            }
        })
    } else {
        nameElement.value = ''
        surnameElement.value = ''
        hideErrorBox()
    }
}
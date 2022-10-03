import { Question } from "./Question"

Question

const questionNumberTag = document.getElementById('questionId')
const questionTag = document.getElementById('question')
const trueRadio = document.getElementById('trueRadio')
const falseRadio = document.getElementById('falseRadio')
const respondButton = document.getElementById('respondButton')

let index = 0
const questionList = [
    {
        "JavaScript puede ejecutarse nativamente en navegadores web": false
    },
    {
        "Levantarse a las 8 de la mañana es lo mejor que existe": false
    },
    {
        "1 + 1 = 7": false
    },
    {
        "El Betis es el mejor equipo del mundo": true
    },
    {
        "Carlos Alberto Morán Lozano es el delegado de 2º DAM": false
    },
    {
        "Este código es más complicado de lo que pedía el ejercicio": true
    },
    {
        "DWES significa Desarrollo <a href='https://acortar.link/oIRv6U'>Webó</a> España Sevilla": false
    }
]

function changeQuestion() {
    console.log(questionList[index].toString());
    questionNumberTag.innerHTML = index + 1;
    questionTag.innerHTML = questionList[index]
}

changeQuestion()

/**
 * Clase para crear preguntas
 */
export class Question {
    constructor(question, answer, isAnswered = false) {
        this.question = question
        this.answer = answer
        this.isAnswered = isAnswered
    }

    toString() {
        return question + " " + answer + " " + isAnswered
    }
}